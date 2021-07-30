<?php
require './connect.php';
if(!isset($_POST['submit']) && $_POST['brand_name'] !=''){
    $brand_name = $_POST['brand_name'];
    $sql = "Select * from brand where brand_name = '$brand_name'";
    $result = mysqli_query($connect,$sql);
    if(mysqli_num_rows($result)>0){

    }
    $sql = "insert into brand(brand_id,brand_name) 
    value (null,'$brand_name')" ; 
    mysqli_query($connect,$sql);
        header("Location: index.php");
}else{
    header("Location:form_insert.php?error= Thêm Thất Bại");
}
?>