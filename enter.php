<?php
    require_once 'enter_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body class="wrapper <?= $_COOKIE['theme'] ?? "" ?>">
    <h1>Увійти</h1>
    <div class="mask-blur enter-form">
        <form class="wrapper" action="" method="post">
            <p>
                <label>
                    <input type="text" placeholder="Введіть логін" name="login" value="<?= $_POST['login'] ?? '' ?>" required>
                </label>
            </p>
            <p>
                <label>
                    <input type="password" placeholder="Введіть пароль" name="password" required>
                </label>
            </p>
            <span class="error"> <?= $errorEnter ?></span>
            <a href="registration.php">Реєстрація</a>
            <button class="btn" type="submit">Увійти</button>
        </form>
    </div>
</body>
</html>