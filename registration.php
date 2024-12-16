<?php
    require_once 'reg_check.php';
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
        <form class="wrapper d-flex flex-center-col"action="" method="post" class="enter_form" enctype="multipart/form-data">
            <div class="flex-center-col items-center">
                <p>
                    <label class="d-flex flex-center-col">
                        Ваше імя
                        <input type="text" placeholder="Enter your login" name="login" value="<?= $_POST['login'] ?? '' ?>">
                    </label>
                </p>
                <p>
                    <label class="d-flex flex-center-col"> Ваш телефон
                        <input type="tel" placeholder="Enter your phone number" name="userPhone" value="<?= $_POST['userPhone'] ?? '' ?>">
                    </label>
                </p>
                <p>
                    <label class="d-flex flex-center-col"> Ваш email
                        <input type="email" placeholder="Enter your email" name="userEmail" value="<?= $_POST['userEmail'] ?? '' ?>" required>
                    </label>
                </p>
                <p>
                    <label class="d-flex flex-center-col"> Ваш пароль
                        <input type="password" placeholder="Enter your password" name="password">
                    </label>
                </p>
                <p><label class="d-flex flex-center-col ava-label"><input type="file" name="avatar"></label></p>
            </div>
            <span><?= $regError ?></span>
            <div class="flex-between-col items-center">
                <a href="enter.php">Увійти</a>
                <button class="wrapper btn" type="submit">Зареєструватися</button>
            </div>
        </form>
    </div>
    
</body>
</html>