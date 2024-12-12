<?php 
    if(isset($_POST['logout'])) {
        session_start();
        unset($_SESSION['user']);
        setcookie('theme');
        session_destroy();
    }