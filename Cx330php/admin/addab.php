<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>添加信息</title>
    <style type="text/css">
        .ipt{width:180px;height:30px;border-radius:5px;
            outline:none;border:1px solid #eee;box-sizing:border-box;padding-left:15px;}
        .txt{width:250px;height:200px;}
        .sub{width:50px;height:20px;border:1px solid #eee;background:#eee;color:#ff7575;}
    </style>
</head>
<body>
    <form method="post" action="addabout.php">
        标题：<input type="text" name="title" class="ipt">
        </br></br>
        内容：<textarea cols="50" rows="5" name="content" class="txt"></textarea></br></br>
        <input type="submit" value="添加" class="sub">
    </form>
</body>
</html>