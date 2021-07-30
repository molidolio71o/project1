<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Update Brand</title>
</head>
<body>
<h1> Brand Management </h1>
    <?php
    require "./connect.php";
    $brand_id = $_GET['brand_id'];
    
    $sql = "select * from brand where brand_id='$brand_id'";
    $result = mysqli_query($connect,$sql);
    $each = mysqli_fetch_array($result);
    ?>
<form action="./process_update.php" method="post">
    <input type="hidden" name="brand_id" value="<?php echo $each['brand_id']?>">
    Tên
    <input type="text" name="brand_name" value="<?php echo $each['brand_name']?>">
    <br>
    <button type="submit">Sửa</button>
</form>
</body>
</html>