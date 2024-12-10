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
<body class="<?= $_COOKIE['theme'] ?? "" ?>">
    <form action="profile.php" method="post">
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
        <button type="submit">Enter</button>
    </form>
    
</body>
</html>