<?php
    require_once 'theme.php';
    require_once 'enter_check.php';
    require_once 'delete_user.php';
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Тестування студентів за програмою PHP Developer</title>
</head>
<body class="wrapper <?= $_COOKIE['theme'] ?? "" ?>">
    <div class=" <?= (!$isUser) ? "d-none" : "d-block" ?> ">
        <div class="flex-between items-center">
            <h1>Профіль</h1>
            <form class="theme-btn" action="profile.php" method="post">
                <button type="submit" name="theme" value="light">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                        <path
                            d="M480-360q50 0 85-35t35-85q0-50-35-85t-85-35q-50 0-85 35t-35 85q0 50 35 85t85 35Zm0 80q-83 0-141.5-58.5T280-480q0-83 58.5-141.5T480-680q83 0 141.5 58.5T680-480q0 83-58.5 141.5T480-280ZM200-440H40v-80h160v80Zm720 0H760v-80h160v80ZM440-760v-160h80v160h-80Zm0 720v-160h80v160h-80ZM256-650l-101-97 57-59 96 100-52 56Zm492 496-97-101 53-55 101 97-57 59Zm-98-550 97-101 59 57-100 96-56-52ZM154-212l101-97 55 53-97 101-59-57Zm326-268Z" />
                    </svg></button>
                <button type="submit" name="theme" value="dark">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#fff">
                        <path
                            d="M480-120q-150 0-255-105T120-480q0-150 105-255t255-105q14 0 27.5 1t26.5 3q-41 29-65.5 75.5T444-660q0 90 63 153t153 63q55 0 101-24.5t75-65.5q2 13 3 26.5t1 27.5q0 150-105 255T480-120Zm0-80q88 0 158-48.5T740-375q-20 5-40 8t-40 3q-123 0-209.5-86.5T364-660q0-20 3-40t8-40q-78 32-126.5 102T200-480q0 116 82 198t198 82Zm-10-270Z" />
                        </svg>
                </button>
            </form>
            <form action="index.php" method='post'>
                <button type="submit" name="logout" value="logout" title="Вийти">
                    <svg xmlns="http://www.w3.org/2000/svg" height="34px" viewBox="0 -960 960 960" width="34px"
                        fill="#a92861">
                        <path
                            d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z" />
                    </svg>
                </button>
            </form>
        </div>
        <div class="mask-blur">
            <h2>Данні користувача</h2>
            <div class="profile d-flex flex-between items-center <?= ($_SESSION['user']['login'] == 'admin') ? "column" : "" ?>">
                <div>
                    <div class="d-flex items-center">
                        <p class="avatar">
                            <picture>
                                <img src="img/<?= $_SESSION['user']['avatar'] ?>" alt="<?= $_SESSION['user']['avatar'] ?>">
                            </picture>
                        </p>
                        <div class="profile-info">
                            <p class="name d-flex items-center"> <span>Ім'я</span> <span><?= $_SESSION['user']['login'] ?></span></p>
                            <p class="email d-flex items-center"> <span>Email</span> <span><?= $_SESSION['user']['userEmail'] ?></span>
                            </p>
                            <p class="phone d-flex items-center"> <span>Телефон</span> <span><?= $_SESSION['user']['userPhone'] ?></span></p>
                        </div>
                    </div>
                    <p><a class="btn btn-test <?= ($_SESSION['user']['login'] != 'admin') ? 'd-block' : 'd-none';?>"
                            href="tests.php">Go to tests</a></p>
                </div>
                <div class="results w-50">
                    <table>
                        <thead class="<?= ($_SESSION['user']['login'] != 'admin') ? 'd-table' : 'd-none';?>">
                            <tr>
                                <th>К-ть правильних відповідей</th>
                                <th>% правильних відповідей</th>
                                <th>Дата та час </th>
                            </tr>
                        </thead>
                        <thead class="<?= ($_SESSION['user']['login'] == 'admin') ? 'd-table' : 'd-none';?>">
                            <tr>
                                <th>Фото</th>
                                <th>Логін</th>
                                <th>Телефон</th>
                                <th>Емейл</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php require_once 'table_check.php'; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <?php if (isset($sum)) { ?>
                                    <th colspan="3">Середній результат у % <?= $sum ?></th>
                                <?php } ?>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>