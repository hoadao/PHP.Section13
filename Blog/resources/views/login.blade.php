<?php
/**
 * Created by PhpStorm.
 * User: hoa
 * Date: 14/02/2019
 * Time: 13:57
 */
?>
        <!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<h1>Đăng nhập</h1>
<form action="/login" method="POST">
    <p>@csrf</p>
    <p>
        <input type="text" name="username" placeholder="Tên đăng nhập">
    </p>
    <p>
        <input type="password" name="password" placeholder="Mật khẩu">
    </p>
    <p>
        <button type="submit">Đăng nhập</button>
    </p>
</form>
</body>
</html>
