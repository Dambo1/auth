<?php
session_start();

if($_SESSION['user'])
{
    header('Location: profile.php');
}


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<!-- Форма регистрации -->

<form action="vendor/singup.php" method="post" enctype="multipart/form-data">
    <label>ФИО</label>
    <input type = "text" name="full_name" placeholder="Введите свое ФИО">
    <label>Логин</label>
    <input type = "text" name="login" placeholder="Введите свой логин">
    <label>Почта</label>
    <input type = "email" name="email" placeholder="Введите свой email">
    <label>Изображение профиля</label>
    <input type = "file" name="avatar" >
    <label>Пароль</label>
    <input type = "password" name="password" placeholder="Введите пароль">
    <label>Подтверждение пароля</label>
    <input type = "password" name="password_confirm" placeholder="Подтвердите пароль">
    <button>Зарегистрироваться</button>
    <p>
        У вас уже есть аккаунт? - <a href="index.php">авторизируйтесь</a>
    </p>
    <?php

    if($_SESSION['message']) {
        echo '<p class="msg">' . $_SESSION['message'] . '</p>';
    }
            unset($_SESSION['message']);
    ?>
</form>
</body>
</html>