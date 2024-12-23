<?php
    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    require_once 'functions.php';
    $errorEnter = "";
    try {
        if($_POST) {
            if (!empty($_POST['login']) && !empty($_POST['password'])) {
                $data = file_read('users');
                foreach ($data as $ind => $user) {
                    if ($_POST['login'] == $user[0] && password_verify($_POST['password'], $user[1])) { 
                        $_SESSION['user']['login'] = $user[0];
                        $_SESSION['user']['userPhone'] = $user[2];
                        $_SESSION['user']['userEmail'] = $user[3];
                        $_SESSION['user']['avatar'] = $user[4] ?? "";
                        header("Location: profile.php");
                        break;
                    } else {
                        if((count($data) - 1) == $ind) {
                            throw new Exception("Пароль або логін введено некоректно, введіть коректні дані");
                        }
                    }
                }
            } else {
                throw new Exception('Заповніть всі поля');
            }
        }
    } catch(Exception $e) {
        $errorEnter = $e->getMessage();

    }
?>