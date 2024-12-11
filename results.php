<?php 
require_once 'results_check.php'; 
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Тестування студентів за програмою PHP Developer</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="wrapper <?= $_COOKIE['theme'] ?? "" ?>">
    <h1>Результати тестування</h1>
    <div class="results-container mask-blur">
        <?php
         if($correctNumber == 5) { ?>
            <p>Всі відповіді вірні, бал 100%</p>
        <?php } else { ?>
            <p>
                Правильних відповідей: <?= $correctNumber ?>, бал:
                <?= round($correctNumber * 100 / 5, 0); ?>%.
            </p>
        <?php } ?>
        <p>
            Дата та час проходження тесту: <?= date('Y.m.d, h:i:s'); ?>
        </p>
        <div class="flex-between d-flex">
            <p><a class="btn" href="tests.php">Назад до тестування</a></p>
            <p><a class="btn" href="profile.php">Особиста сторінка</a></p>
        </div>
    </div>
</body>
</html>

