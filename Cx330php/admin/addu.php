<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>添加管理员</title>
	<style type="text/css">
		.ipt{width:180px;height:30px;border-radius:5px;
			outline:none;border:1px solid #eee;box-sizing:border-box;padding-left:15px;}
		.sub{width:50px;height:20px;border:1px solid #eee;background:#eee;color:#ff7575;}
	</style>
</head>
<body>
	<form method="post" action="adduser.php">
		用户名：<input type="username" name="username" class="ipt"></br></br>
		密 码：<input type="password" name="password" class="ipt"></br></br>
		<input type="submit" value="添加" class="sub">
	</form>
</body>
</html>