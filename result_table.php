<?php 
    require_once 'table_check.php';
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
    <h1>Результати користувача</h1>
    <div class="mask-blur">
        <table>
            <thead>
                <th>К-ть правильних відповідей</th>
                <th>% правильних відповідей</th>
                <th>Дата та час </th>
            </thead>
            <tbody>
                <?php foreach ($dataRes as $res) { ?>
                    <tr>
                        <?php if ($_GET['userId'] == $res[0]) { ?>
                            <td><?= $res[1] ?></td>
                            <td><?= $res[2] ?></td>
                            <td><?= $res[3] ?></td>
                        <?php }?>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="flex-between d-flex">
        <p><a class="btn" href="profile.php">Назад</a></p>
    </div>
</body>
</html>