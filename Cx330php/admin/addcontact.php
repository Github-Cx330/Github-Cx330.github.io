<?php
    //添加联系我们信息部分代码
    require_once('conn.php');
    $site    = $_POST['site']; //地址
    $tel     = $_POST['tel'];    //电话
    $suppot  = $_POST['suppot'];//技术支持
    $nexttel = $_POST['nexttel'];//售后电话
    $fax     = $_POST['fax'];        //公司传真
    $home    = $_POST['home'];        //公司首页
    $email   = $_POST['email'];    //电子邮件
    if(empty($site)){
        echo "<script>alert('请填写地址');history.go(-1);</script>";
    }else if(empty($tel)){
        echo "<script>alert('请填写电话');history.go(-1);</script>";
    }else if(empty($suppot)){
        echo "<script>alert('请填写技术支持');history.go(-1);</script>";
    }else if(empty($nexttel)){
        echo "<script>alert('请填写售后电话');history.go(-1);</script>";
    }else if(empty($fax)){
        echo "<script>alert('请填写公司传真');history.go(-1);</script>";
    }else if(empty($home)){
        echo "<script>alert('请填写公司首页');history.go(-1);</script>";
    }else if(empty($email)){
        echo "<script>alert('请填写电子邮件');history.go(-1);</script>";
    }else{
        $sql  = "insert into contact(site,tel,suppot,nexttel,fax,home,email) values('$site','$tel','$suppot','$nexttel','$fax','$home','$email')";
        $res = mysqli_query($conn,$sql);
        if($res){
            echo "<script>alert('添加公司信息成功');location.href='contact.php';</script>";
        }else{
            echo "<script>alert('添加公司信息失败');history.go(-1);</script>";
        }
    }
?>