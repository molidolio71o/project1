<?php
require './connect.php';
if(!isset($_POST['submit']) && $_POST['admin_Name'] !=''&&  $_POST['email'] !=''
&&  $_POST['password'] !=''&&  $_POST['type'] !=''){
    $admin_Name = $_POST['admin_Name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $type = $_POST['type']; 
    $sql = "Select * from admin where admin_Name = '$admin_Name'";
    $result = mysqli_query($connect,$sql);
    if(mysqli_num_rows($result)>0){

    }
    $sql = "insert into admin(admin_Id,admin_Name,email,password,type) 
    value (null,'$admin_Name','$email','$password','$type')" ; 
    mysqli_query($connect,$sql);
        header("Location: index.php");
}else{
    header("Location:form_insert.php?error= Thêm Thất Bại");
}
?>