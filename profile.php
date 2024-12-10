<?php
    require_once 'theme.php';
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

<body class="<?= $_COOKIE['theme'] ?? "" ?>">
    <h1>Профіль</h1>
    <div>
        <h2>Данні користувача</h2>
        <p class="name"><?= $_SESSION['user']['login'] ?></p>
        <p class="email"><?= $_SESSION['user']['userEmail'] ?></p>
        <p class="phone"><?= $_SESSION['user']['userPhone'] ?></p>
        <p class="avatar">
            <picture>
                <img src="img/<?= $_SESSION['user']['avatar'] ?>" alt="<?= $_SESSION['user']['avatar'] ?>">
            </picture>
        </p>
    </div>
    <a class="<?= ($_SESSION['user']['login'] != 'admin') ? 'd-block' : 'd-none';?>" href="tests.php">Go to tests</a>
    <form action="profile.php" method="post">
        <button type="submit" name="theme" value="light">Light</button>
        <button type="submit" name="theme" value="dark">Dark</button>
    </form>
    <div class="results">
        <table>
            <thead class="<?= ($_SESSION['user']['login'] != 'admin') ? 'd-block' : 'd-none';?>">
                <tr>
                    <th>К-ть правильних відповідей</th>
                    <th>% правильних відповідей</th>
                    <th>Дата та час </th>
                </tr>
            </thead>
            <thead  class="<?= ($_SESSION['user']['login'] == 'admin') ? 'd-block' : 'd-none';?>">
                <tr>
                    <th>Фото</th>
                    <th>Логін</th>
                    <th>Телефон</th>
                    <th>Емейл</th>
                    <th>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php require_once 'table_check.php'; ?>
            </tbody>
        </table>
    </div>
</body>

</html>