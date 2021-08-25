<?php
 header("Content-type: text/html; charset=utf-8");//设置编码
 require_once('conn.php');
 $id = $_GET['id'];
 $sql = "SELECT * FROM about where id='$id'";
 $res = mysqli_query($conn,$sql);
 $row = mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>修改信息</title>
 <style type="text/css">
 .ipt{width:180px;height:30px;border-radius:5px;
 outline:none;border:1px solid #eee;box-sizing:border-box;padding-left:15px;}
 .sub{width:50px;height:20px;border:1px solid #eee;background:#eee;color:#ff7575;}
 </style>
</head>
<body>
 <form method="post" action="modifyabout.php?id=<?php echo $id;?>">
 标题：<input type="text" name="title" class="ipt" value="<?php echo $row['title'];?>">
 </br></br>
 内容：<textarea cols="80" rows="10" name="content" class="txt"><?php echo $row['content'];?></textarea></br></br>
 <input type="submit" value="修改" class="sub">
 </form>
</body>
</html>