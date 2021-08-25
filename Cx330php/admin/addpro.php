<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>添加产品</title>
	<style type="text/css">
		#cnt{
			width:400px;
			height:400px;
			margin-top:15px;
			margin-left: 15px;
		}
	</style>
</head>
<body>
	<div id="cnt">
		<form method="post" action="addproduct.php" enctype="multipart/form-data">
			产品名称:<input type="text" name="title" id="title"></br></br>
			上传文件:<input type="file" name="myFile"></br></br>
			产品价格:<input type="text" name="price"></br></br>
			<input type="submit" value="添加产品">
		</form>
	</div>
</body>
</html>