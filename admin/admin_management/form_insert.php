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
<h1>Admin Management</h1>
    <form action="./process_insert.php" method="post">
        Tên
        <input type="text" name="admin_Name">
        <br>
        Email
        <input type="email" name="email">
        <br>
        Mật Khẩu
        <input type="password" name="password">
        <br>
        Cấp Độ
        <input type="radio" name="type" value="1"> Super Admin
        <input type="radio" name="type" value="0" checked> Admin
        <br>
        <button>Thêm</button>
    </form>
</body>
</html>