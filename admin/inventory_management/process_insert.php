<?php
require './connect.php';
if(!isset($_POST['submit']) && $_POST['brand_id'] !=''&& $_POST['machine_name'] !=''&&  $_POST['price'] !=''
&&  $_POST['description'] !=''&&  $_POST['fileToUpload'] !=''){
    $brand_id = $_POST['brand_id'];
    $machine_name = $_POST['machine_name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $fileToUpload = $_POST['fileToUpload'];
    $origin = $_POST['origin']; 
    $sql = "Select * from air_conditioner where machine_name = '$machine_name'";
    $result = mysqli_query($connect,$sql);
    if(mysqli_num_rows($result)>0){

    }
    $sql = "insert into air_conditioner(admin_Id,brand_id ,machine_name,price,description,fileToUpload,origin) 
    value (null,'$brand_id','$machine_name','$price','$description','$image','$origin')" ; 
    mysqli_query($connect,$sql);
        header("Location: index.php");
}else{
    header("Location:form_insert.php?error= Thêm Thất Bại");
}



$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}


// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}


?>