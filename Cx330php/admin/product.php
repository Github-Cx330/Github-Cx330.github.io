<?php
	require_once('conn.php'); //连接数据库
	$page=isset($_GET['page']) ?$_GET['page'] :1 ;//接收页码
	$page=!empty($page) ? $page :1;
	$table_name="product";//查取表名设置
	$perpage=4;//每页显示的数据个数
	//最大页数和总记录数
	$total_sql="SELECT count(*) from $table_name";
	$total_result =mysqli_query($conn,$total_sql);
	$total_row=mysqli_fetch_row($total_result);
	$total = $total_row[0];//获取最大页码数
	$total_page = ceil($total/$perpage);//向上整数
	//临界点
	$page=$page>$total_page ? $total_page:$page;//当下一页数大于最大页数时的情况
	//分页设置初始化
	$start=($page-1)*$perpage;
	$sql = "SELECT * from product order by id desc limit $start,$perpage";
	$info = mysqli_query($conn,$sql);	
	//$sql = "select * from product order by id desc"; //查询user表中的数据
	//$info = mysql_query($sql);
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
		th{background:#eee;height:30px;}
		td{width:200px;height:70px;}
	</style>
</head>
<body>
	<div class="top"><a href="addpro.php">添加产品</a></div>

	<div class="cont">
		<table cellspacing="0" cellpadding="0" border="1">
			<tr>
				<th>ID</th>
				<th>名称</th>
				<th>图片</th>
				<th>价格</th>
				<th>操作</th>
			</tr>
			<?php
				while($row = mysqli_fetch_array($info)){
			?>
			<tr>
				<td><?php echo $row['id'];?></td>
				<td><?php echo $row['title'];?></td>
				<td><img src="../uploads/<?php echo $row['imgname'];?>" width="50" height="50"></td>
				<td><?php echo $row['price'];?></td>
				<td>
					<a href="modifypro.php?id=<?php echo $row['id'];?>">修改</a>
					<a href="delproduct.php?id=<?php echo $row['id'];?>">删除</a>
				</td>
			</tr>
			<?php
				}
			?>
			<tr>
				<td colspan="5">
				<a href="<?php echo "$_SERVER[PHP_SELF]?page=1"?>">首页</a>
 	<a href="<?php echo "$_SERVER[PHP_SELF]?page=".($page-1)?>">上一页</a><a href="<?php echo "$_SERVER[PHP_SELF]?page=".($page+1)?>">下一页</a>
 	<a href="<?php echo "$_SERVER[PHP_SELF]?page={$total_page}"?>">末页</a>
				</td>
			</tr>
		</table>
	</div>
</body>
</html>