<?php
    require_once 'theme.php';
    require_once 'enter_check.php';
    require_once 'delete_user.php';
    require_once 'table_check.php'; 
    require_once "change_data_check.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
    <link rel="stylesheet" href="css/style.css">
    <title>Тестування студентів за програмою PHP Developer</title>
</head>
<body class="wrapper <?= $_COOKIE['theme'] ?? "" ?>">
    <div>
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
                                <img src="img/<?= $_SESSION['user']['avatar'] ? $_SESSION['user']['avatar'] : "ava.svg" ?>" alt="<?= $_SESSION['user']['avatar'] ?>">
                            </picture>
                        </p>
                        <div class="profile-info">
                            <p class="name d-flex items-center">
                                <span>Ім'я</span> 
                                <span><?= $_SESSION['user']['login'] ?></span>

                            </p>
                            <p class="email d-flex items-center"> 
                                <span>Email</span> 
                                <span><?= $_SESSION['user']['userEmail'] ?></span>
                            </p>
                            <p class="phone d-flex items-center"> 
                                <span>Телефон</span> 
                                <span><?= $_SESSION['user']['userPhone'] ?></span>
                            </p>
                        </div>
                        <a href="change_data.php">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/></svg>
                        </a>
                    </div>
                    <p><a class="btn btn-test <?= ($_SESSION['user']['login'] != 'admin') ? 'd-block' : 'd-none';?>"
                            href="tests.php">Пройти тестування</a></p>
                </div>
                <div class="results w-50">
                    <?php if ($_SESSION['user']['login'] != 'admin') { ?>
                        <table>
                            <thead>
                                <tr>
                                    <th>К-ть правильних відповідей</th>
                                    <th>% правильних відповідей</th>
                                    <th>Дата та час </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($userResults as $res) { ?>
                                    <tr class="<?= ($res[2] == $max) ? 'max_result' : ''; ?>">
                                        <td><?= $res[1] ?></td>
                                        <td><?= $res[2] ?></td>
                                        <td><?= $res[3] ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <?php if (isset($sum)) { ?>
                                        <th colspan="3">Середній результат у %: <?= $sum ?></th>
                                    <?php } ?>
                                </tr>
                            </tfoot>
                        </table>
                    <?php } else { ?>
                        <table>
                            <thead>
                                <tr>
                                    <th>Фото</th>
                                    <th>Логін</th>
                                    <th>Телефон</th>
                                    <th>Емейл</th>
                                    <th>Результати</th>
                                    <th>Видалити</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $keyData => $user) { ?>
                                    <?php if($user[0] != "admin") { ?>
                                        <tr>
                                            <td class="avatar-table"><img src="img/<?= $user[4] ?? 'ava.svg' ?>" alt="<?= $user[4] ?? 'ava.svg' ?>"></td>
                                            <td><?= $user[0] ?></td>
                                            <td><?= $user[2] ?></td>
                                            <td><?= $user[3] ?></td>
                                            <td>
                                                <form action="result_table.php" method="get">
                                                    <input type="hidden" name="userId" value="<?= $user[0]; ?>">
                                                    <button type="submit">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="34px" viewBox="0 -960 960 960" width="34px" fill="#fff"><path d="m576-160-56-56 104-104-104-104 56-56 104 104 104-104 56 56-104 104 104 104-56 56-104-104-104 104Zm79-360L513-662l56-56 85 85 170-170 56 57-225 226ZM80-280v-80h360v80H80Zm0-320v-80h360v80H80Z"/></svg></button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="profile.php" method="post">
                                                    <input type="hidden" name="delete" value="<?= $user[0]; ?>">
                                                    <button type="submit">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr> 
                                    <?php } ?>
                                <?php } ?>
                            </tbody>
                            
                        </table>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<!-- додати редагування данних користувача -->