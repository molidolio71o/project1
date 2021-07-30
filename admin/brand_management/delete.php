<?php
require './connect.php';
$brand_id = $_GET['brand_id'] ;



$sql = "delete from brand where brand_id = '$brand_id' ";

mysqli_query($connect,$sql);
header("location: index.php");
mysqli_close($connect); 

?>