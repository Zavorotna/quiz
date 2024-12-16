<?php
    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    require_once "functions.php";
    if (isset($_POST['delete'])) {
        $deleteValue = $_POST['delete'];
        file_rewrite_del('users', function($row) use ($deleteValue) {
            return isset($row[0]) && $row[0] === $deleteValue;
        });
        file_rewrite_del('results', function($row) use ($deleteValue) {
            return isset($row[0]) && $row[0] === $deleteValue;
        });
    }
?>