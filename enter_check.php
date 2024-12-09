<?php
    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    require_once 'functions.php';
    if (isset($_POST['login'])) {
        $data = file_read('users');
        foreach ($data as $user) {
            if($_POST['login'] == $user[0] && $_POST['password'] == $user[1]) {
                $_SESSION['user']['login'] = $user[0];
                $_SESSION['user']['userPhone'] = $user[2];
                $_SESSION['user']['userEmail'] = $user[3];
                $_SESSION['user']['avatar'] = $user[4];
            }
        }
    } 
?>