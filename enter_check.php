<?php
    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    require_once 'functions.php';
    if (isset($_POST['login'])) {
        $data = file_read('users');
        $isUser = false;
        foreach ($data as $user) {
            if($_POST['login'] == $user[0] && $_POST['password'] == $user[1]) {
                $_SESSION['user']['login'] = $user[0];
                $_SESSION['user']['userPhone'] = $user[2];
                $_SESSION['user']['userEmail'] = $user[3];
                $_SESSION['user']['avatar'] = $user[4];
                $isUser = true;
                break;
            }
            // var_dump($_SESSION['user']['login']);
        }
        if(!$isUser) { ?>
            <div class="d-flex items-center h-100">
                <h2 class="w-50">Користувач з такими даними не зареєстрований, пройдіть, будь ласка, реєстрацію!</h2>
                <a href="registration.php" class="btn">Зареєструватися</a>
            </div>
        <?php }
    } 
?>