<?php

$admin_Id = $_POST['admin_Id'];
$admin_Name = $_POST['admin_Name'];
$email = $_POST['email'];
$password = $_POST['password'];
$type = $_POST['type'] ;
 
 require './connect.php';

 $sql = "update admin set 
         admin_Name = '$admin_Name',
         email = '$email',
         password = '$password',
         type = '$type'
         where
         admin_Id = '$admin_Id'
         "
       ;

mysqli_query($connect,$sql);
header("location: index.php");
mysqli_close($connect);
?> 