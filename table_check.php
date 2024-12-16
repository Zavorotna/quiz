<?php
    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    require_once "functions.php";
    if (isset($_SESSION['user']['login'])) {
        $data = file_read('results');
        if ($_SESSION['user']['login'] != 'admin') {
            $userResults = [];
            foreach ($data as $result) {
                if ($_SESSION['user']['login'] == $result[0]) {
                    $userResults[] = $result;
                }
            }
            $max = 0;
            foreach ($userResults as $result) {
                // print_r($userResults);
                $sumArr[] = $result[2];
                $sum = round(array_sum($sumArr) / count($sumArr), 0);
                if ($result[2] > $max) {
                    $max = $result[2];
                }
            } 
            
        }
        
        if ($_SESSION['user']['login'] == 'admin') {
            $data = file_read('users');
            if(isset($_GET['userId'])) {
                $dataRes = file_read('results');
            }
        }
    } 
    ?>