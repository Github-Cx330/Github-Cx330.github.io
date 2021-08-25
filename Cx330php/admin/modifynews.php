<?php
    require_once('conn.php');
    $id = $_GET['id'];
    $title = $_POST['title'];
    $type = $_POST['type'];
    $content = $_POST['content'];
    $newtime = time();

    $sql = "UPDATE news SET title='$title',content='$content',type='$type',newtime='$newtime' where id='$id'";
    $res = mysqli_query($conn,$sql);
    if($res){
        echo "<script>alert('修改新闻资讯成功');location.href='news.php'</script>";
    }else{
        echo "<script>alert('修改新闻资讯失败');history.go(-1);</script>";
    }
?>