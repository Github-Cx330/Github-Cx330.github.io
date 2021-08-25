<?php
    require_once('conn.php');
    $id = $_GET['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    $sql = "UPDATE about SET title='$title',content='$content' where id='$id'";
    $res = mysqli_query($conn,$sql);
    if($res){
        echo "<script>alert('修改信息成功');location.href='about.php'</script>";
    }else{
        echo "<script>alert('修改信息失败');history.go(-1);</script>";
    }

?>