<?php
    session_start();
    if($_GET['act'] == 'loginout'){
        unset($_SESSION);
        echo "<script>location.href='log.php';</script>";
    }
    
?>