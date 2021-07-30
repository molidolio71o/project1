<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Brand Management</title>
</head>
<body>
    <h1> Brand Management </h1>
    <?php
    require './connect.php';

    $sql = "select * from brand";
    $result = mysqli_query($connect,$sql);
    ?>
    <a href="./form_insert.php">Thêm</a>

    <table border="1" width="100%">
        <tr>
            <th>Tên hãng</th>
            <th>Sửa</th>
            <th>Xóa</th>
        </tr>
        <?php foreach ($result as $each): ?>
            <tr>
                <td>
                    <?php echo $each['brand_name'] ?>
                </td>
                <td>
                    <a onclick='return confirm("Bạn muốn sửa tên hãng này không ?")' href='form_update.php?brand_id=<?php echo $each['brand_id']?>'>Sửa</a>
                </td>
                <td>
                    <a onclick='return confirm("Bạn muốn xóa tên hãng này không ?")' href="./delete.php?brand_id=<?php echo $each['brand_id']?>">Xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
    <?php
    mysqli_close($connect)
    ?>
</body>
</html>