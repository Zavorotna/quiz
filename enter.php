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
    <div class="mask-blur">
        <form class="wrapper <?= (!$noEnter) ? "d-none" : "" ?>" action="profile.php" method="post">
            <p>
                <label>
                    <input type="text" placeholder="Enter your login" name="login">
                </label>
            </p>
            <p>
                <label>
                    <input type="password" placeholder="Enter your password" name="password">
                </label>
            </p>
            <div class="wrapper d-flex flex-around items-center">
                <button class="btn" type="submit">Увійти</button>
                <a class="btn <?= ($noEnter) ? "d-none" : "" ?>" href="registration.php">Зареєструватися</a>
            </div>
        </form>
    </div>
</body>
</html>