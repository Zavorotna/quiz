<?php
    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    require_once 'functions.php';
    if (isset($_POST['login'])) {
        $data = file_read('users');
        $isUser = false;
        $isUserLogin = false;
        foreach ($data as $user) {
            if ($_POST['login'] == $user[0]) { 
                $isUserLogin = true;
                if ($_POST['password'] == $user[1]) {
                    $_SESSION['user']['login'] = $user[0];
                    $_SESSION['user']['userPhone'] = $user[2];
                    $_SESSION['user']['userEmail'] = $user[3];
                    $_SESSION['user']['avatar'] = $user[4];
                    $isUser = true;
                    break;
                }
            }
        }
        if(!$isUserLogin) { ?>
            <div class="d-flex items-center h-100">
                <h2 class="w-50">Користувач з таким логіном не зареєстрований, пройдіть, будь ласка, реєстрацію!</h2>
                <div>
                    <a href="registration.php" class="btn">Зареєструватися</a>
                </div>
            </div>
        <?php } else if(!$isUser) { ?>
            <div class="d-flex items-center h-100">
                <h2 class="w-50">Пароль введено некоректно, введіть коректні дані</h2>
                <div>
                    <a href="enter.php" class="btn">Увійти</a>
                </div>
            </div>
        <?php }
    } 
    if(isset($_SESSION['user']['login'])) {
        $isUser = true;
        $isUserLogin = true;
    }
?>