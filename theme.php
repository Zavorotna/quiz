<?php
    if (isset($_POST['theme'])) {
        setcookie('theme', $_POST['theme'], time() +8600);
        header('Location: profile.php');
    }
?>