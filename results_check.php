<?php
require_once 'functions.php';
require_once 'enter_check.php';
if(session_status() == PHP_SESSION_NONE) {
    session_start();
}

if($_POST) {
    $correctNumber = 0;
    $resultsData = [];
    foreach ($_SESSION['questionArr'] as $ind => $q) {

        foreach ($_POST['answers'] as $name => $ans) {
            
            if($q['name'] == $name) {
                if ($q['correct'] == $_POST['answers'][$name]) {
                    $correctNumber++;
                }
            }
        }
        
    }
    $resultsData[] = $_SESSION['user']['login'];
    $resultsData[] = $correctNumber;
    $resultsData[] = round($correctNumber * 100 / 5, 0);
    $resultsData[] = date('Y.m.d, h:i:s');
    // print_r($resultsData);
    file_rewrite('results', $resultsData);
    
}
