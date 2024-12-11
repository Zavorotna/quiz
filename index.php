<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Тестування студентів за програмою PHP Developer</title>
</head>
<body class="wrapper <?= $_COOKIE['theme'] ?? "" ?>">
    <div class="flex-center items-center d-flex h-100 main-page">
        <h1 class="w-50">Вітаю! Зареєструйтеся або увійдіть в аккаунт для проходження тестування</h1>
        <div class="w-50">
            <p><a class="btn" href="registration.php">Зареєструватися</a></p>
            <p><a class="btn" href="enter.php">Увійти в аккаунт</a></p>
        </div>
    </div>
</body>
</html>