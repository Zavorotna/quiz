<?php
if(session_status() == PHP_SESSION_NONE) {
    session_start();
}

if($_POST) {
    $correctNumber = 0;
    foreach ($_SESSION['questionArr'] as $ind => $q) {

        foreach ($_POST['answers'] as $name => $ans) {
            if($q['name'] == $name) {
                if ($q['correct'] == $_POST['answers'][$name]) {
                    $correctNumber++;
                }
            }

        }
    }
}
