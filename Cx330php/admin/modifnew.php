<?php
    require_once('conn.php'); //连接数据库
    require_once('functions.php');
    $page=isset($_GET['page']) ?$_GET['page'] :1 ;//接收页码
    $page=!empty($page) ? $page :1;
    $table_name="news";//查取表名设置
    $perpage=1;//每页显示的数据个数
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
    $sql = "SELECT * from news order by id desc limit $start,$perpage";
    $info = mysqli_query($conn,$sql);    

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>展示新闻资讯</title>
    <style type="text/css">
        .top{height:30px;line-height:30px;float:right;margin-right:15px;}
        .top a{color:red;text-decoration:none;}
        .cont{width:100%;height:300px;float:left;}
        .cont_ct{float:left;}
        table{width:100%;border:1px solid #eee;text-align:center;}
        th{background:#eee;}
        td{width:200px;height:30px;}
    </style>
</head>
<body>
    <div class="top"><a href="addne.php">添加新闻资讯</a></div>

    <div class="cont">
        <table cellspacing="0" cellpadding="0" border="1">
            <tr>
                <th>ID</th>
                <th>类别</th>
                <th>标题</th>
                <th>内容</th>
                <th>操作</th>
            </tr>
            <?php
                //获取表中的数据
                while($row=mysqli_fetch_array($info)){
            ?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <?php
                    if($row['type']==1){
                ?>
                <td>公司新闻</td>
                <?php
                    }else{
                ?>
                <td>公司公告</td>
                <?php
                    }
                ?>
                <td><?php echo $row['title'];?></td>
                <td><?php echo msubstr($row['content'],0,15);?></td>
                <td>
                    <a href="modifnew.php?id=<?php echo $row['id'];?>">修改</a>
                    <a href="delnews.php?id=<?php echo $row['id'];?>">删除</a>
                </td>
            </tr>
            <?php
                }
            ?>
            <tr>
                <td colspan="5">
                <a href="<?php echo "$_SERVER[PHP_SELF]?page=1"?>">首页</a>
                <a href="<?php echo "$_SERVER[PHP_SELF]?page=".($page-1)?>">上一页</a><a href="<?php echo "$_SERVER[PHP_SELF]?page=".($page+1)?>">下一页</a>
                <a href="<?php echo "$_SERVER[PHP_SELF]?page={$total_page}"?>">末页</a>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>