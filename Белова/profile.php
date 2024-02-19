<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="header">
            <div class="logotip">
                <a href="index.php">
                    <img class="logo" src="img/logo.png" alt="Логотип">
                    <p class="text_logotip">Новая жизнь!</p>
                </a>
            </div>
            <div class="menu">
                <input type="search" placeholder="Поиск" class="search">
                <a href="add.php" class="text_menu">Добавить</a>
                <a href="orders-management.php" class="text_menu">Отзывы</a>
                <a href="register.php" class="text_menu">Регистрация</a>
                <a href="login.php" class="text_menu">Войти</a>
                <a href="profile.php" class="text_menu">Личный кабинет</a>
            </div>
        </div>


<?php
session_start();
echo "Пользователь авторизован как " . $_SESSION["name"];
?>



        <div class="footer">
            <div class="logotip">
                <a href="index.php">
                    <img class="logo" src="img/logo.png" alt="Логотип">
                    <p class="text_logotip">Новая жизнь!</p>
                </a>
            </div>
            <div class="menu">
                <input type="search" placeholder="Поиск" class="search">
                <a href="add.php" class="text_menu">Добавить</a>
                <a href="orders-management.php" class="text_menu">Отзывы</a>
                <a href="register.php" class="text_menu">Регистрация</a>
                <a href="login.php" class="text_menu">Войти</a>
                <a href="profile.php" class="text_menu">Личный кабинет</a>
            </div>
        </div>

</body>
</html>