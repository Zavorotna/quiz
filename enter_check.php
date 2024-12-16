<?php
    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    require_once 'functions.php';
    $errorEnter = "";
    if (isset($_POST['login'])) {
        $data = file_read('users');
        $isUser = false;
        foreach ($data as $user) {
            if ($_POST['login'] == $user[0] && $_POST['password'] == $user[1]) { 
                $_SESSION['user']['login'] = $user[0];
                $_SESSION['user']['userPhone'] = $user[2];
                $_SESSION['user']['userEmail'] = $user[3];
                $_SESSION['user']['avatar'] = $user[4] ?? "";
                $isUser = true;
                header("Location: profile.php");
                break;
            } else {
                $errorEnter = "Пароль введено некоректно, введіть коректні дані";
            }
        }
        
    } 
    if(isset($_SESSION['user']['login'])) {
        $isUser = true;
    }
?>