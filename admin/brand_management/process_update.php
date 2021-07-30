<?php

$brand_id = $_POST['brand_id'];
$brand_name = $_POST['brand_name'];
 
 require './connect.php';

 $sql = "update brand set 
         brand_name = '$brand_name'
         where
         brand_id = '$brand_id'
         "
       ;

mysqli_query($connect,$sql);
header("location: index.php");
mysqli_close($connect);
?> 