<?php

$machine_id = $_POST['machine_id'];
$brand_id  = $_POST['brand_id '];
$machine_name = $_POST['machine_name'];
$price = $_POST['price'];
$description = $_POST['description'];
$image = $_POST['image'];
$origin = $_POST['origin'];
 
 require './connect.php';

 $sql = "update air_conditioner set
         brand_id = '$brand_id',
         machine_name = '$machine_name',
         price = '$price',
         description = '$description',
         image = '$image',
         origin = '$origin'
         where
         machine_id = '$machine_id'
         "
       ;

mysqli_query($connect,$sql);
header("location: index.php");
mysqli_close($connect);
?> 