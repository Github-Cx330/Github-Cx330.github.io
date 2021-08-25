<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">
			body{margin-top:50px;text-align:center;}
			a{text-decoration:none;float:right;margin-right:30px;color:red;}
	</style>
</head>
<body>
    <h1>合肥领航环保科技公司后台管理系统</h1>
    	<a href="loginout.php?act=loginout" target="_top">退出</a>
	<?php
		if(!empty($_SESSION['username'])){
	?><?php
		}
	?>
</body>
</html>