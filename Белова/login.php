<?php
session_start();
include 'connect.php';

$error_message = "";
if (isset($_POST["send"])) {
    if (!empty($_POST["email"]) && !empty($_POST["pass"])) {
        $email = $_POST["email"];
        $query = $mysqli->query("SELECT * FROM `users_new_live` WHERE `email` = '$email';");
        //$hgd = mysqli_fetch_array($query);
        if (mysqli_num_rows($query) == 1) {
            
            $pass = $_POST["pass"];
            $row = mysqli_fetch_assoc($query);
            if (md5("$pass") == $row["pass"]) {
                $_SESSION["name"] = $_POST["name"];
                header("location: profile.php?send = 1");
            } else echo $error_message = "Пароль неверный";
        } else echo $error_message = "Пользователь не сущ";
    } else echo $error_message = "Поля не заполнены";
}
// echo $_SESSION["email"];

$mysqli->close()
?>





<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новая жизнь</title>
    <link rel="stylesheet" href="reg.css">
</head>

<body>
    <div class="container">
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


        <form method="POST">
            <div class='content'>
                <h1 class='reg'>Войти в личный кабинет</h1>
                <div class='input-fields'>
                    <input type='email' placeholder='Email' name='email' class='input'></input><br>
                    <input type='password' placeholder='Пароль' name='pass' class='input'></input>

                </div>
                <? $error_message;?>
                <a href="#" class="password_q">Забыли пароль?</a>
                <input type="submit" name="send" value="Войти">
        </form>
    </div>



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

    </div>
</body>

</html>