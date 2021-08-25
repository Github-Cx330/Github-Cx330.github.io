<?php
    require_once('../admin/conn.php');
    $sql = "SELECT * from contact";
    $res = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
    <meta name="format-detection" content="telephone=no">
    <title>联系我们</title>
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
        /*联系我们部分样式*/
        .contact{width:410px;height:600px;margin:0 auto;background:#e0e0e0;}
        .contact_top{margin-top:5px;margin-left:10px;padding-top:15px;font-weight:bold;}
        .contact_left{width:250px;height:530px;margin-top:15px;/*margin-left:8px;*/float:left;}
        .contact_right{width:150px;height:530px;float:right;text-align:center;
            margin-top:15px;margin-right:10px;}
        .online{font-weight:bold;color:red;}
        .weixin{width:200px;height:250px;}
        .weixin img{padding-top:15px;}
        .service{width:200px;height:280px;}
        .service img{padding-top:15px;}
        .site{width:200px;height:30px;padding-top:35px;/*margin-left:15px;*/}
        /*底部样式*/
        .site span{margin-left:5px;}
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
        <div id="top_left"><img src="https://img.php.cn/upload/course/000/000/010/582407c034cfe355.jpg" width="50" height="50"></div>
    </div>
    <div id="cnt">
        <img src="https://img.php.cn/upload/course/000/000/010/5824078a8353f806.jpg" width="410" height="100">
    </div>
    <div class="contact">
        <div class="contact_top">当前位置>></div>
        <div class="contact_left">
            <div class="site">
                <span>公司地址：</span></br>
                <?php echo $row['site'];?>
            </div>
            <div class="site">
                <span>公司电话：</span></br>
                <?php echo $row['tel'];?>
            </div>
            <div class="site">
                <span>技术支持：</span></br>
                <?php echo $row['suppot'];?>
            </div>
            <div class="site">
                <span>售后电话：</span></br>
                <?php echo $row['nexttel'];?>
            </div>
            <div class="site">
                <span>公司传真：</span></br>
                <?php echo $row['fax'];?>
            </div>
            <div class="site">
                <span>公司主页：</span></br>
                <?php echo $row['home'];?>
            </div>
            <div class="site">
                <span>电子邮件：</span></br>
                <?php echo $row['email'];?>
            </div>
        </div>
        <div class="contact_right">
            <div class="weixin">
                <span class="online">关注微信公众号</span></br>
                <img src="https://img.php.cn/upload/course/000/000/010/5824088dafe08668.png" width="100" height="100">
            </div>
            <div class="service">
                <span class="online">在线客服</span></br>
                <a href="#"><img src="https://img.php.cn/upload/course/000/000/010/58240862418f1266.jpg" width="120" height="50"></a></br>
                <a href="#"><img src="https://img.php.cn/upload/course/000/000/010/58240883231ed119.jpg" width="120" height="50"></a>
            </div>
        </div>
    </div>
    <div class="but">地址：安徽省合肥市科学大道669号(黄山路与科学大道交口东南角) 预约电话：400-800-9558
                        备ICP 皖0219845号 <p>版权所有：合肥环保科技 All rights reserved</p>
    </div>
</body>
</html>