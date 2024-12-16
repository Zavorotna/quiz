<?php 
    require_once "change_data_check.php";
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
    <h1>Особиста інформація</h1>
    <form action="profile.php" method="post" enctype="multipart/form-data">
        <div class="flex-center-col items-center">
            <p>
                <label class="d-flex flex-center-col"> Ваш телефон
                    <input type="tel" placeholder="Enter your phone number" name="userPhone" value="<?= $_SESSION['user']['userPhone'] ?>">
                </label>
            </p>
            <p>
                <label class="d-flex flex-center-col"> Ваш email
                    <input type="email" placeholder="Enter your email" name="userEmail" value="<?= $_SESSION['user']['userEmail'] ?>" required>
                </label>
            </p>
            <div class="d-flex">
                <p class="avatar">
                    <picture>
                        <img src="img/<?= $_SESSION['user']['avatar'] ? $_SESSION['user']['avatar'] : "ava.svg" ?>" alt="<?= $_SESSION['user']['avatar'] ?>">
                    </picture>
                </p>
                <p><label class="d-flex flex-center-col ava-label"><input type="file" name="avatar"></label></p>
            </div>
        </div>
        <div class="flex-between-col items-center">
            <button class="wrapper btn" type="submit">Оновити</button>
        </div>
    </form>
</body>
</html>