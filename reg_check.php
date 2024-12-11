<?php
    require_once 'functions.php';
    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $noEnter = true;
    if(isset($_POST['login'])) {
        if(file_exists('csv/users.csv')) {
            $dataUsers = file_read('users');
            foreach ($dataUsers as $users) {
                if($_POST['userEmail'] == $users[3] && $_POST['login'] == $users[0]) {
                    $noEnter = false;
                    echo "Такий користувач вже зареєстрований";
                } else {
                    $noEnter = true;
                }
            }
        }
        $data[] = $_POST['login'];
        $data[] = $_POST['password'];
        $data[] = $_POST['userPhone'];
        $data[] = $_POST['userEmail'];
        $pathArr = explode('/', $_FILES['avatar']['type']);
        $imgName = $_POST['login'] . "." . $pathArr[1];

        $data[] = $imgName;
        
        file_rewrite('users', $data);
        move_uploaded_file($_FILES['avatar']['tmp_name'], 'img/' . $imgName);
        

    }
?>