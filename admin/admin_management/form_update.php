<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Update</title>
</head>
<body>
<h1>Admin Management</h1>
    <?php
    require "./connect.php";
    $admin_Id = $_GET['admin_Id'];
    
    $sql = "select * from admin where admin_Id='$admin_Id'";
    $result = mysqli_query($connect,$sql);
    $each = mysqli_fetch_array($result);
    ?>
<form action="./process_update.php" method="post">
    <input type="hidden" name="admin_Id" value="<?php echo $each['admin_Id']?>">
    Tên
    <input type="text" name="admin_Name" value="<?php echo $each['admin_Name']?>">
    <br>
    Email
    <input type="email" name="email" value="<?php echo $each['email']?>">
    <br>
    Mật Khẩu
    <input type="password" name="password" value="<?php echo $each['password']?>">
    <br>
    Cấp Độ
    <input type="radio" name="type" value="1" <?php if($each['type']==0);?>>Super Admin
    <input type="radio" name="type" value="0" <?php if($each['type']==1);?>>Admin
    <br>
    <button type="submit">Sửa</button>
</form>
</body>
</html>