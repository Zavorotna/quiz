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
    <a href="index.php">Go to tests</a>
    <form action="profile.php" method="post">
        <button type="submit" name="theme" value="light">Light</button>
        <button type="submit" name="theme" value="dark">Dark</button>
    </form>
    <div class="results">
        <!-- результати тестів таблицею
            2) Всі результати тестів таблицею (дані із файла):
            2.1) Кількість правильних відповідей
            2.2) % правильних відповідей
            2.3) Дата і час проходження тесту
            3) Найкращий результат повинен бути виділеним
            4) Підсумок таблиці - вирахуваний середній результат
            5) Кнопка із функціоналом "Logout"
            6) Кнопка зміни теми (світла-темна) 
            додати можливість редагування профілю
        -->
    </div>
</body>
</html>