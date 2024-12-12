<?php

    //дозапис та перезапис
    function file_rewrite($filename, $data, $mode = 'a') {
        $file = 'csv/' . $filename . '.csv';
        $is2Darr = true;
        $result = false;
        $stream = fopen($file, $mode);
        if($stream) {
            foreach ($data as $row) {
                if(is_array($row)) {
                    fputcsv($stream, $row); 
                } else {
                    $is2Darr = false;
                    break;
                }
            }
            if(!$is2Darr) fputcsv($stream, $data);
            $result = true;
        }
        fclose($stream);
        return $result;
    }

    // читання файлу

    function file_read($filename, $mode = 'r') {
        $data = [];
        $file = 'csv/' . $filename . '.csv';
        $stream = fopen($file, $mode);
        while (($row = fgetcsv($stream)) !== false) {
           $data[] = $row;
        }
        fclose($stream);
        return $data;
    }
  
    //видалення
    function file_rewrite_del($filename, $filterCallback) {
        $file = 'csv/' . $filename . '.csv';
        $tempFile = 'csv/' . $filename . '_temp.csv';
        $result = false;
    
        $allUsers = fopen($file, 'r');
        $afterDelUsers = fopen($tempFile, 'w');
    
        if ($allUsers && $afterDelUsers) {
            while (($row = fgetcsv($allUsers)) !== false) {
                if (!$filterCallback($row)) {
                    fputcsv($afterDelUsers, $row);
                }
            }
            fclose($allUsers);
            fclose($afterDelUsers);
            rename($tempFile, $file);
            $result = true;
        }
    
        return $result;
    }
    
?>