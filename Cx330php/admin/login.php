<?php
     session_start();
    require_once('conn.php');

?>

    //获取表单的信息
    $name = trim($_POST['username']);
    $password = trim($_POST['password']);
    $_SESSION['username'] = trim($_POST['username']);
    $_SESSION['password'] = trim($_POST['username']);

    //查询数据库  然后取出数据库的信息，如果和表单提交的信息一致，则登录成功，进入后台管理
    $sql= "select * from user where username='$name' and password='$password'";
    $res= mysqli_query($conn,$sql);
    $row= mysqli_fetch_row($res);
    if($row){
        echo "<script>alert('登录成功')</script>";
        echo "<script>location.href='main.php'</script>";
    }else{
       echo $name;
       echo $password;
       echo $_SESSION['username'];
       echo $_SESSION['password'];
    }
?>