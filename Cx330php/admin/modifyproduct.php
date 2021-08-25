<?php
    require_once('conn.php');
    
    $id = $_GET['id'];
    $title = $_POST['title'];
    $imagename = $_POST['imgname'];
    $price = $_POST['price'];
    $goodtime = time();
    $sql = "UPDATE product SET title='$title',imgname='$imagename',price='$price',goodtime='$goodtime' where id='$id'";
    $res = mysqli_query($conn,$sql);
    if($res){
        echo "<script>alert('修改产品成功');location.href='product.php'</script>";
    }else{
        echo "<script>alert('修改产品失败');history.go(-1);</script>";
    }

?>