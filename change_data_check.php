<?php
require_once "functions.php";
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$data = file_read('users');

foreach ($data as $ind => $user) {
    if ($_SESSION['user']['login'] == $user[0]) {

        $data[$ind][2] = isset($_POST['userPhone']) ? $_POST['userPhone'] : $user[2];
        $_SESSION['user']['userPhone'] = $data[$ind][2];

        $data[$ind][3] = isset($_POST['userEmail']) ? $_POST['userEmail'] : $user[3];
        $_SESSION['user']['userEmail'] = $data[$ind][3];

        if(!empty($_FILES['avatar']['name'])) {
            $pathArr = explode('/', $_FILES['avatar']['type']);
            $imgName = $_SESSION['user']['login'] . "." . $pathArr[1];
            $data[$ind][4] = $imgName;
            unlink("img/" . $data[$ind][4]);
            move_uploaded_file($_FILES['avatar']['tmp_name'], 'img/' . $imgName);
        }
    }
}

file_rewrite('users', $data, 'w');
?>
