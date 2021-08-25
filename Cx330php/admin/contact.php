<?php
    require_once('conn.php');
    $sql = "SELECT * from contact order by id desc";
    $res = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>展示练习我们页面信息</title>
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
    <div class="top"><a href="addta.php">添加公司信息</a></div>

    <div class="cont">
        <table cellspacing="0" cellpadding="0" border="1">
            <tr>
                <th>公司地址</th>
                <th>公司电话</th>
                <th>技术支持</th>
                <th>售后电话</th>
                <th>公司传真</th>
                <th>公司主页</th>
                <th>电子邮件</th>
                <th>操作</th>
            </tr>
            <?php
                while($row = mysqli_fetch_array($res)){
            ?>
            <tr>
                <td><?php echo $row['site'];?></td>
                <td><?php echo $row['tel'];?></td>
                <td><?php echo $row['suppot'];?></td>
                <td><?php echo $row['nexttel'];?></td>
                <td><?php echo $row['fax'];?></td>
                <td><?php echo $row['home'];?></td>
                <td><?php echo $row['email'];?></td>
                <td>
                    <a href="modifycon.php?id=<?php echo $row['id'];?>">修改</a>
                    <a href="delcontact.php?id=<?php echo $row['id'];?>">删除</a>
                </td>
            </tr>
            <?php
                }
            ?>
        </table>
    </div>
</body>
</html>