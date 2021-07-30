<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Admin Management</title>
</head>
<body>
    <h1>Admin Management</h1>
    <?php
    require './connect.php';

    $sql = "select * from air_conditioner";
    $result = mysqli_query($connect,$sql);
    ?>
    <a href="./form_insert.php">Thêm</a>

    <table border="1" width="100%">
        <tr>
            <th>Tên Máy</th>
            <th>Giá</th>
            <th>Type</th>
            <th>Sửa</th>
            <th>Xóa</th>
        </tr>
        <?php foreach ($result as $each): ?>
            <tr>
                <td>
                    <?php echo $each['machine_name'] ?>
                </td>
                <td>
                    <?php echo $each['price'] ?>
                </td>
                <td>
                <img src="<?php echo $each['image'] ?>" height='200' >
                </td>
                <td>
                    <?php echo $each['description'] ?>
                </td>
                <td>
                    <?php echo $each['origin'] ?>
                </td>
                <td>
                    <a onclick='return confirm("Bạn muốn sửa tài khoản này không ?")' href='form_update.php?machine_id =<?php echo $each['machine_id ']?>'>Sửa</a>
                </td>
                <td>
                    <a onclick='return confirm("Bạn muốn xóa tài khoản này không ?")' href="./delete.php?machine_id =<?php echo $each['machine_id ']?>">Xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
    <?php
    mysqli_close($connect)
    ?>
</body>
</html>