<?php 
    if(isset($_POST['logout'])) {
        session_destroy();
        unset($_SESSION['user']);
        setcookie('theme');
        header("Location: index.php");
    }