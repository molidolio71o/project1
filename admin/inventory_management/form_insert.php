<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Insert</title>
</head>

<body>
    <?php
    
    ?>

    <form action="./process_insert.php" method="post">
        Hãng Máy
        <!-- <input type="dropdown-item" name="brand_id"> -->
        <select name="brand_id" id="">
            <?php 
            for($i=0; $i<5; $i++){
                echo ("<option value='$i'> brand, $i</option>");
            };
            ?>
            
        </select>
        <br>
        Tên Máy
        <input type="text" name="machine_name">
        <br>
        Giá
        <input type="number" name="price">
        <br>
        Mô Tả
        <input type="long-text" name="description">
        <br>
        Ảnh
        <input type="file" name="fileToUpload" id="fileToUpload">
        <br>
        Xuất xứ
        <input type="text" name="origin">
        <br>
        <button>Thêm</button>
    </form>
</body>
</html>