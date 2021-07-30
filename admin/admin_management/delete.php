<?php
require './connect.php';
$admin_Id = $_GET['admin_Id'] ;



$sql = "delete from admin where admin_Id = '$admin_Id' ";

mysqli_query($connect,$sql);
header("location: index.php");
mysqli_close($connect); 

?>