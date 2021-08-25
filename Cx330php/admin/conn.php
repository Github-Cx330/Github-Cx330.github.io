<?php
$conn=mysqli_connect("localhost","root","123456","article");
if($conn){
    //echo"ok";
    return $conn;
}else{
    echo"no conn";
}