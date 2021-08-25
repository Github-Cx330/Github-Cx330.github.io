<?php
    if(!empty($_POST['go']) && $_POST['go']==1){
    //接受文件，临时文件信息
    $fileinfo=$_FILES["myFile"];//降维操作
    $filename=$fileinfo["name"];
    $tmp_name=$fileinfo["tmp_name"];
    $size=$fileinfo["size"];
    $error=$fileinfo["error"];
    $type=$fileinfo["type"];
 
    //服务器端设定限制
    $maxsize=10485760;//10M,10*1024*1024
    $allowExt=array('jpeg','jpg','png','gif');//允许上传的文件类型（拓展名
    $ext=pathinfo($filename,PATHINFO_EXTENSION);//提取上传文件的拓展名
    //目标存放文件夹
    $path="../uploads";
    if (!file_exists($path)) {  //当目录不存在，就创建目录
      mkdir($path,0777,true);//创建目录
      chmod($path, 0777);//改变文件模式,所有人都有执行权限、写权限、度权限
    }
    //得到唯一的文件名！防止因为文件名相同而产生覆盖
    $uniName=md5(uniqid(microtime(true),true)).".$ext";

    //md5加密，uniqid产生唯一id，microtime做前缀
    //目标存放文件地址
    $destination=$path."/".$uniName;
    //当文件上传成功，存入临时文件夹，服务器端开始判断
    if ($error==0) {
      if ($size>$maxsize) {
        exit("上传文件过大！");
      }
      if (!in_array($ext, $allowExt)) {
        exit("非法文件类型");
      }
      if (!is_uploaded_file($tmp_name)) {
        exit("上传方式有误，请使用post方式");
      }
      //判断是否为真实图片（防止伪装成图片的病毒一类的
      if (!getimagesize($tmp_name)) {//getimagesize真实返回数组，否则返回false
        exit("不是真正的图片类型");
      }
      //move_uploaded_file($tmp_name, "uploads/".$filename);
      if (@move_uploaded_file($tmp_name, $destination)) {//@错误抑制符，不让用户看到警告
        echo "<script>parent.document.all.imgname.value = '$destination';</script>文件".$filename."上传成功!";
      }else{
        echo "文件".$filename."上传失败!";
      } 
    }else{
      switch ($error){
        case 1:echo "超过了上传文件的最大值，请上传2M以下文件";break;
        case 2:echo "上传文件过多，请一次上传20个及以下文件！";break;
        case 3:echo "文件并未完全上传，请再次尝试！";break;
        case 4:echo "未选择上传文件！";break;
        case 7:echo "没有临时文件夹";break;
      }
    }

}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form method="post" action="?" enctype="multipart/form-data">
        上传文件:<input type="file" name="myFile"></br></br>
        <input type="hidden" value="1" name="go">
        <input type="submit" value="上传"></br></br>
    </form>
</body>
</html>