<?php
    require_once 'reg_check.php';
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
        <form class="wrapper" action="profile.php" method="post">
            <p>
                <label>
                    <input type="text" placeholder="Введіть логін" name="login" required>
                </label>
            </p>
            <p>
                <label>
                    <input type="password" placeholder="Введіть пароль" name="password" required>
                </label>
            </p>
            <div class="d-flex flex-around items-center">
                <button class="btn" type="submit">Увійти</button>
            </div>
        </form>
    </div>
</body>
</html>