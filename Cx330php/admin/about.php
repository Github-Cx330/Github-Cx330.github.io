<?php
    header("Content-type: text/html; charset=utf-8");//设置编码
    require_once('conn.php');
    $sql = "SELECT * FROM about order by id desc";
    $res = mysqli_query($conn,$sql);

//截取中文字符
function msubstr($str,$start=0,$length,$suffix=true,$charset="utf-8"){
    if(function_exists("mb_substr")){
        if ($suffix && mb_strlen($str, $charset)>$length)
            return mb_substr($str, $start, $length, $charset)."...";
        else
            return mb_substr($str, $start, $length, $charset);
    }elseif(function_exists('iconv_substr')) {
        if ($suffix && strlen($str)>$length)
            return iconv_substr($str,$start,$length,$charset)."...";
        else
            return iconv_substr($str,$start,$length,$charset);
    }
    $re['utf-8']   = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|[\xe0-\xef][\x80-\xbf]{2}|[\xf0-\xff][\x80-\xbf]{3}/";
    $re['gb2312'] = "/[\x01-\x7f]|[\xb0-\xf7][\xa0-\xfe]/";
    $re['gbk']    = "/[\x01-\x7f]|[\x81-\xfe][\x40-\xfe]/";
    $re['big5']   = "/[\x01-\x7f]|[\x81-\xfe]([\x40-\x7e]|\xa1-\xfe])/";
    preg_match_all($re[$charset], $str, $match);
    $slice = join("",array_slice($match[0], $start, $length));
    if($suffix) return $slice."…";
    return $slice;
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>展示关于我们的信息</title>
    <style type="text/css">
        .top{height:30px;line-height:30px;float:right;margin-right:15px;}
        .top a{color:red;text-decoration:none;}
        .cont{width:100%;height:300px;float:left;}
        .cont_ct{float:left;}
        table{width:100%;border:1px solid #eee;text-align:center;}
        th{background:#eee;}
        td{width:200px;height:40px;}
    </style>
</head>
<body>
    <div class="top"><a href="addab.php">添加信息</a></div>

    <div class="cont">
        <table cellspacing="0" cellpadding="0" border="1">
            <tr>
                <th>ID</th>
                <th>标题</th>
                <th>内容</th>
                <th>操作</th>
            </tr>
           
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['title'];?></td>
                <td><!-- <textarea cols="50" rows="5" readonly> -->
               <!-- </textarea> --></td>
                <td>
                    <a href="modifya.php?id=<?php echo $row['id'];?>">修改</a>
                    <a href="delabout.php?id=<?php echo $row['id'];?>">删除</a>
                </td>
            </tr>
        
                
            
        </table>
    </div>
</body>
</html>
