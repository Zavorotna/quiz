<?php
    require_once 'functions.php';
    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $regError = "";
    try {
        if($_POST) {
            if(!empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['userPhone']) && !empty($_POST['userEmail'])) {
                $noEnter = true;
                $dataUsers = file_read('users', 'a+');
                foreach ($dataUsers as $users) {
                    if($_POST['login'] == $users[0]) {
                        $noEnter = false;
                        throw new Exception("Такий login вже зареєстрований"); 
                        break;
                    }
                    if($_POST['userEmail'] == $users[3]) {
                        $noEnter = false;
                        throw new Exception("Такий email вже зареєстрований"); 
                        break;
                    }
                }
                if($noEnter) {
                    $data[] = $_POST['login'];
                    $data[] = password_hash($_POST['password'], PASSWORD_BCRYPT, ['cost' => 12]);
                    $data[] = $_POST['userPhone'];
                    $data[] = $_POST['userEmail'];

                    if(!empty($_FILES['avatar']['name'])) {
                        $pathArr = explode('/', $_FILES['avatar']['type']);
                        $imgName = $_POST['login'] . "." . $pathArr[1];
                        $data[] = $imgName;
                        move_uploaded_file($_FILES['avatar']['tmp_name'], 'img/' . $imgName);
                    }
                    file_rewrite('users', $data);
                    header("Location: enter.php");
                }
                

            } else {
                throw new Exception("Заповніть всі необхідні поля!");
            }
        }
    } catch(Exception $e) {
        $regError = $e->getMessage();
    }
?>