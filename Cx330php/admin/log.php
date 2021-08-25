<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>php 登录</title>
    <style type="text/css">
        *{margin: 0px;padding: 0px;}
        body{background: #eee;}
        .inpu{border-radius:10px;outline:none;width:200px;height:30px;border:1px solid red;
            box-sizing:border-box;padding-left:15px;
        }
        #div{width:400px;height:400px;background:#B1FEF9;margin:0 auto;
            margin-top:150px;border-radius:20px;}
        h3{margin-left:88px;padding-top:60px;}
        h4{margin-left:120px;padding-top:60px;font-size: 18px;}
        #cnt{width:280px;height:370px;margin-left:33px;padding-top:60px;}
        .sub{width:70px;height:30px;border:1px solid #fff;background:#eee;
            margin-left:28px;margin-top:20px;}
        .sub1{width:70px;height:30px;border:1px solid #fff;
            background:#eee;margin-left:150px;margin-top:20px;}
    </style>
</head>
<body>
    <div id="div">
        <h3>欢迎登陆后台管理系统</h3>
        <div id="cnt">
            <form method="post" action="login.php">
                用户名：<input type="text" placeholder="请输入用户名" name="username" class="inpu">
                <br><br>
                密&nbsp;码：<input type="password" placeholder="请输入密码" name="password" class="inpu">
                <br><br>
                <input type="submit" value="登录" class="sub">
            </form>
        </div>
    </div>
</body>
</html>a
