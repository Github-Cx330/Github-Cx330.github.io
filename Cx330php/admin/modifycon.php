<?php
    require_once('conn.php');
    $id = $_GET['id'];
    $sql = "SELECT * from contact where id='$id'";
    $res = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($conn,$res);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>修改公司信息</title>
    <style type="text/css">
        .ipt{width:180px;height:30px;border-radius:5px;
            outline:none;border:1px solid #eee;box-sizing:border-box;padding-left:15px;}
        .txt{width:250px;height:200px;}
        .sub{width:50px;height:20px;border:1px solid #eee;background:#eee;color:#ff7575;}
    </style>
</head>
<body>
    <form method="post" action="modifyontact.php?id=<?php echo $id;?>">
        公司地址:<input type="text" name="site" class="ipt" value="<?php echo $row['site'];?>">
        </br></br>
        公司电话:<input type="text" name="tel" class="ipt" value="<?php echo $row['tel'];?>">
        </br></br>
        技术支持:<input type="text" name="suppot" class="ipt" value="<?php echo $row['suppot'];?>">
        </br></br>
        售后电话:<input type="text" name="nexttel" class="ipt" value="<?php echo $row['nexttel'];?>">
        </br></br>
        公司传真:<input type="text" name="fax" class="ipt" value="<?php echo $row['fax'];?>">
        </br></br>
        公司主页:<input type="text" name="home" class="ipt" value="<?php echo $row['home'];?>">
        </br></br>
        电子邮件:<input type="text" name="email" class="ipt" value="<?php echo $row['email'];?>">
        </br></br>
        <input type="submit" value="修改" class="sub">
    </form>
</body>
</html>