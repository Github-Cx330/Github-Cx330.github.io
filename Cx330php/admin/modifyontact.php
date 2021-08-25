<?php
    require_once('conn.php');
    $id = $_GET['id'];
    $site    = $_POST['site']; //地址
    $tel     = $_POST['tel'];    //电话
    $suppot  = $_POST['suppot'];//技术支持
    $nexttel = $_POST['nexttel'];//售后电话
    $fax     = $_POST['fax'];        //公司传真
    $home    = $_POST['home'];        //公司首页
    $email   = $_POST['email'];    //电子邮件
    $sql = "UPDATE contact set site='$site',tel='$tel',suppot='$suppot',nexttel='$nexttel',fax='$fax',home='$home',email='$email' where id='$id'";

    // echo $sql;die;
    $res = mysqli_query($conn,$sql);
    if($res){
        echo "<script>alert('修改公司信息成功');location.href='contact.php'</script>";
    }else{
        echo "<script>alert('修改公司信息失败');history.go(-1);</script>";
    }
?>