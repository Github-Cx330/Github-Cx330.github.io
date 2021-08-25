<?php
    // 链接数据库
	require_once('conn.php');
	$sql = "select * from user order by id desc"; //查询user表中的数据
    $info = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>展示用户列表</title>
	<style type="text/css">
		.top{height:30px;line-height:30px;float:right;margin-right:15px;}
		.top a{color:red;text-decoration:none;}
		.cont{width:100%;height:300px;float:left;}
		.cont_ct{float:left;}
		table{width:100%;border:1px solid #eee;text-align:center;}
		th{background:#eee;}
		td{width:200px;height:30px;}
	</style>
</head>
<body>
	<div class="top"><a href="addu.php">添加管理员</a></div>

	<div class="cont">
		<table cellspacing="0" cellpadding="0" border="1">
			<tr>
				<th>ID</th>
				<th>用户名</th>
				<th>密码</th>
				<th>操作</th>
			</tr>
			<?php
				//获取表中的数据
				while($row=mysqli_fetch_array($info)){
			?>
			<tr>
				<td><?php echo $row['id'];?></td>
				<td><?php echo $row['username'];?></td>
				<td><?php echo $row['password'];?></td>
				<td>
					<a href="modifyu.php?id=<?php echo $row['id'];?>">修改</a>
					<a href="deluser.php?id=<?php echo $row['id'];?>">删除</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</div>
</body>
</html>