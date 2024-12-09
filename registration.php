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
    <title>Document</title>
</head>
<body class="<?= $_COOKIE['theme'] ?? "" ?>">
    <form action="enter.php" method="post" class="enter_form" enctype="multipart/form-data">
        <p>
            <label>
                <input type="text" placeholder="Enter your login" name="login">
            </label>
        </p>
        <p>
            <label>
                <input type="tel" placeholder="Enter your phone number" name="userPhone">
            </label>
        </p>
        <p>
            <label>
                <input type="email" placeholder="Enter your email" name="userEmail">
            </label>
        </p>
        <p>
            <label>
                <input type="password" placeholder="Enter your password" name="password">
            </label>
        </p>
        <p><label><input type="file" name="avatar"></label></p>
        <button type="submit">Registr</button>
    </form>
    <a href="enter.php">Enter</a>
</body>
</html>