<?php
    require_once('../admin/conn.php');
    require_once('../admin/functions.php');
    $sql ="SELECT * from about order by id desc";
    $res = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($res);

    $sql1 = "SELECT * from product limit 0,4";
    $res1 = mysqli_query($conn,$sql1);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
    <meta name="format-detection" content="telephone=no">
    <title>关于我们</title>
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
        /*about 部分样式*/
        .dv{width:410px;border:1px solid #ccc;margin:0 auto;margin-top:30px;}
        .dv1{width:90px;height:50px;margin:0 auto;line-height:50px;background:#f0f0f0;
        text-align:center;margin-top:-28px;font-weight:bold;}
        #about{float:left;width:410px;clear:both;}
        .about_cnt{width:410px;height:400px;margin:0 auto;}
        .about_cnt_left{width:120px;height:300px;padding-top:10px;float:left;}
        .img{width:100px;height:70px;border:1px solid #999;margin-top:25px;margin-left:4px;}
        .img:first-child{margin-top:5px;}
        .about_cnt_right{width:280px;height:300px;float:right;margin-top:1px;margin-right:5px;}
        .title{width:100%;height:30px;margin-top:6px;margin-left:5px;font-weight:bold;}
        .cont{text-indent:2em;line-height:25px;}
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

    <div class="dv"></div>
    <div class="dv1">关于我们</div>
    <div id="about"></div>
    <div class="about_cnt">
        <div class="about_cnt_left">
            <?php
                while($row1 = mysqli_fetch_array($res1)){
            ?>
            <div class="img">
                <img src="../uploads/<?php echo $row1['imgname']?>" width="100" height="70">
            </div>
            <?php
                }
            ?>
        </div>
        <div class="about_cnt_right">
            <div class="title">当前位置>><?php echo $row['title'];?></div>
            <div class="cont"><?php echo msubstr($row['content'],0,228);?></div>
        </div>
    </div>

    <div class="but">地址：安徽省合肥市科学大道669号(黄山路与科学大道交口东南角) 预约电话：400-800-9558
                        备ICP 皖0219845号 <p>版权所有：合肥环保科技 All rights reserved</p>
    </div>
</body>
</html>