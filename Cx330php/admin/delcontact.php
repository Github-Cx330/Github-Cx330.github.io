<?php
    //删除练习我们信息部分代码
    require_once('conn.php');
    $id = $_GET['id'];
    $sql = "delete from contact where id='$id'";
    $res = mysqli_query($conn,$sql);
    if($res){
        echo "<script>alert('删除成功');location.href='contact.php';</script>";
    }else{
        echo "<script>alert('删除失败');location.href='contact.php';</script>";
    }
?>