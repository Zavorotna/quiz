<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body class="wrapper <?= $_COOKIE['theme'] ?? "" ?>">
    <h1>Результати користувача</h1>
    <div class="mask-blur">
        <table>
            <tbody>
                <?php require_once 'result_admin.php' ?>
            </tbody>
        </table>
    </div>
    <div class="flex-between d-flex">
        <p><a class="btn" href="profile.php">Назад</a></p>
    </div>
</body>
</html>