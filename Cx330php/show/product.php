<?php
    require_once('../admin/conn.php');
    $page=isset($_GET['page']) ?$_GET['page'] :1 ;//接收页码
    $page=!empty($page) ? $page :1;
    $table_name="product";//查取表名设置
    $perpage=9;//每页显示的数据个数
    //最大页数和总记录数
    $total_sql="SELECT count(*) from $table_name";
    $total_result =mysqli_query($conn,$total_sql);
    $total_row=mysqli_fetch_row($total_result);
    $total = $total_row[0];//获取最大页码数
    $total_page = ceil($total/$perpage);//向上整数
    //临界点
    $page=$page>$total_page ? $total_page:$page;//当下一页数大于最大页数时的情况
    //分页设置初始化
    $start=($page-1)*$perpage;
    $sql = "SELECT * from product order by id desc limit $start,$perpage";
    $res = mysqli_query($conn,$sql);
    // $sql="select * from product order by id desc limit 1,9";
    // $res = mysql_query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
    <meta name="format-detection" content="telephone=no">
    <title>产品展示</title>
    <style type="text/css">
        *{margin:0px;padding:0px;}
        /*头部样式*/
        #top{width:410px;height:40px;margin:0 auto;}
        body{background:#f0f0f0;}
        #to_left{float:left;}
        #top_right{float:right;margin-top:20px;margin-right:15px;}
        li{float:left;list-style:none;margin:0px 5px; padding-bottom:15px;}
        li a{text-decoration:none;color:#000;}
        li a:hover{color:red;}
        #cnt{width:410px;margin:0 auto;}
        /*产品展示部分样式*/
        .product_c{width:410px;height:500px;margin:0 auto;background:#e0e0e0;}
        .product_top{margin-top:5px;margin-left:10px;font-weight:bold;padding-top:15px;}
        .product_cnt{width:410px;height:450px;margin-top:10px;margin-left:14px;}
        .pro{width:100px;height:90px;border:1px solid #fff;float:
            left;margin-left:19px;margin-top:30px;}
        .page{float:left;margin-top:30px;margin-left:95px;}
        /*底部样式*/
        .but{width:410px;height:60px;margin:0 auto;text-align:center;background:#999;
            padding-top:8px;margin-top:5px;}
    </style>
</head>
<body>
    <div id="top">
        <div id="top_right">
            <ul>
                <li><a href="index.php">首页</a></li>
                <li><a href="about.php">关于我们</a></li>
                <li><a href="news.php">新闻资讯</a></li>
                <li><a href="product.php">产品展示</a></li>
                <li><a href="contact.php">联系我们</a></li>
            </ul>
        </div>
        <div id="top_left"><img src="logo.jpg" width="50" height="50"></div>
    </div>
    <div id="cnt">
        <img src="messter.jpg" width="410px" height="100">
    </div>
    <div class="product_c">
        <div class="product_top">当前位置>>产品展示</div>
        <div class="product_cnt">
            <?php
                while($row = mysqli_fetch_array($res)){
            ?>
            <div class="pro"><img src="../uploads/<?php echo $row['imgname'];?>" width="98" height="88"></div>
            <?php
                }
            ?>
            <div class="page">
                <a href="<?php echo "$_SERVER[PHP_SELF]?page=1"?>">首页</a>
                <a href="<?php echo "$_SERVER[PHP_SELF]?page=".($page-1)?>">上一页</a><a href="<?php echo "$_SERVER[PHP_SELF]?page=".($page+1)?>">下一页</a>
                <a href="<?php echo "$_SERVER[PHP_SELF]?page={$total_page}"?>">末页</a>
            </div>
        </div>
    </div>
    <div class="but">地址：安徽省合肥市科学大道669号(黄山路与科学大道交口东南角)                 预约电话：400-800-9558
                        备ICP 皖0219845号 <p>版权所有：合肥环保科技 All rights reserved</p>
    </div>
</body>
</html>