<?php
require_once 'results_check.php';
require_once 'tests_check.php';
// session_destroy();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body class="<?= $_COOKIE['theme'] ?? "" ?>">
<?php if(!$_SESSION['enter']['login']) {
        header('Location: login.php');
} 

?>
<form action="results.php" method="post">
    <?php foreach ($newQuestions as $q) { ?>
        <div>
            <p>
                <?= $q['question']; ?>
            </p>
            <?php foreach ($q['answer'] as $ans) { ?>
                <p>
                    <label>
                        <input type="radio" name="answers[<?= $q['name'] ?>]" value="<?= $ans ?>" required>
                        <?= $ans ?>
                    </label>
                </p>
            <?php } ?>
        </div>
    <?php } ?>
    <button type="submit">Відправити</button>
</form>
</body>
</html>
