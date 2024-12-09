<?php
    require_once 'functions.php';
    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    
    if(isset($_POST['login'])) {
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