<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>添加公司信息</title>
    <style type="text/css">
        .ipt{width:180px;height:30px;border-radius:5px;
            outline:none;border:1px solid #eee;box-sizing:border-box;padding-left:15px;}
        .txt{width:250px;height:200px;}
        .sub{width:50px;height:20px;border:1px solid #eee;background:#eee;color:#ff7575;}
    </style>
</head>
<body>
    <form method="post" action="addcontact.php">
        公司地址:<input type="text" name="site" class="ipt"></br></br>
        公司电话:<input type="text" name="tel" class="ipt"></br></br>
        技术支持:<input type="text" name="suppot" class="ipt"></br></br>
        售后电话:<input type="text" name="nexttel" class="ipt"></br></br>
        公司传真:<input type="text" name="fax" class="ipt"></br></br>
        公司主页:<input type="text" name="home" class="ipt"></br></br>
        电子邮件:<input type="text" name="email" class="ipt"></br></br>
        <input type="submit" value="添加" class="sub">
    </form>
</body>
</html>