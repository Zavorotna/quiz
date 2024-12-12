<?php
    require_once 'reg_check.php';
    require_once 'enter_check.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Тестування студентів за програмою PHP Developer</title>
</head>
<body class="wrapper <?= $_COOKIE['theme'] ?? "" ?>">
    <h1>Пройдіть реєстрацію</h1>
    <div class="mask-blur registration-form">
        <form class="wrapper d-flex flex-center-col"action="enter.php" method="post" class="enter_form" enctype="multipart/form-data">
            <div class="flex-between items-center">
                <div>
                    <p>
                        <label class="d-flex flex-center-col">
                            Ваше імя
                            <input type="text" placeholder="Enter your login" name="login">
                        </label>
                    </p>
                    <p>
                        <label class="d-flex flex-center-col"> Ваш телефон
                            <input type="tel" placeholder="Enter your phone number" name="userPhone">
                        </label>
                    </p>
                    <p>
                        <label class="d-flex flex-center-col"> Ваш email
                            <input type="email" placeholder="Enter your email" name="userEmail">
                        </label>
                    </p>
                    <p>
                        <label class="d-flex flex-center-col"> Ваш пароль
                            <input type="password" placeholder="Enter your password" name="password">
                        </label>
                    </p>
                </div>
                <p><label class="d-flex flex-center-col ava-label"><input type="file" name="avatar" required></label></p>
            </div>
            <button class="wrapper btn" type="submit">Зареєструватися</button>
        </form>
    </div>
    
</body>
</html>