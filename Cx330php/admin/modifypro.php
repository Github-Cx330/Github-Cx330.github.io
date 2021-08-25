<?php
    require_once('conn.php');
    $id = $_GET['id'];
    $sql = "SELECT * from product where id= '$id'";
    $res = mysqli_query($conn,$sql);
    $info = mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>修改产品</title>
    <style type="text/css">
        #cnt{
            width:400px;
            height:400px;
            margin-top:15px;
            margin-left: 15px;
        }
        iframe{border:0px;}
    </style>
</head>
<body>
    <div id="cnt">
        <form method="post" action="modifyproduct.php?id=<?php echo $info['id']?>" enctype="multipart/form-data">
            产品名称:<input type="text" name="title" id="title" value="<?php echo $info['title']?>"></br></br>
            <iframe src="file.php"></iframe>
            <input type="text" id="imgname" name="imgname" value="<?php echo $info['imgname'];?>"></br></br>
            产品价格:<input type="text" name="price" value="<?php echo $info['price']?>">
            </br></br>
            <input type="submit" value="修改产品">
        </form>
    </div>
</body>
</html>