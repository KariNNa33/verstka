<?php
include 'connect.php';
$error_message = "";
if (isset($_POST["send"])) {
    if ($_POST["email"] && $_POST["name"] && $_POST["surname"] && $_POST["phone"] && $_POST["pass"] && $_POST["pass2"] ) {
        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            if ($_POST["pass"] == $_POST["pass2"]) {
                $name = $_POST["name"];
                $query = $mysqli->query("SELECT * FROM `users_new_live` WHERE `name` = '$name';");
                if (mysqli_num_rows($query) == 0) {
                    $email = $_POST['email'];
                    $query2 = $mysqli->query("SELECT * FROM `users_new_live` WHERE `email`='$email';");
                    if (mysqli_num_rows($query2) == 0) {
                        $password = $_POST['pass'];
                        $surname = $_POST['surname'];
                        $phone = $_POST['phone'];
                        $result = $mysqli->query("INSERT INTO `users_new_live` (`email`, `name`, `surname`, `phone`, `pass`)
                        VALUES ('$email', '$name', '$surname', '$phone', md5('$password') );");
                        header("location: index.php");
                    } else echo $error_message = "Данная почта уже зарегана";
                } else echo $error_message = "Данный логин уже зареган";
            } else echo $error_message = "Пароли не совпадают";
        } else echo $error_message = "Формат эл. почты указан неверно";
    } else echo $error_message = "Не все поля заполнены";
}
    $mysqli->close();
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



        <form action="" method="POST">
        <div class='content'>
            <h1 class='reg'>Регистрация</h1>
            <div class='input-fields'>
                <input type='email' placeholder='Email' name='email' class='input'></input><br>
                <input type='text' placeholder='Имя' name='name' class='input'></input><br>
                <input type='text' placeholder='Фамилия' name='surname' class='input'></input><br>
                <input type='tel' placeholder='Телефон' name='phone' class='input'></input><br>
                <input type='password' placeholder='Пароль' name='pass' class='input'></input><br>
                <input type='password' placeholder='Повтор пароля' name='pass2' class='input'></input>
            </div>
            <input type="checkbox" class="sogl">Согласен на обработку персовнальных</input>
            <input type="submit" name="send" value="Создать аккаунт">
        </div>
</form>



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