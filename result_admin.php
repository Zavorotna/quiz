<?php
    require_once 'functions.php';
    if(isset($_POST['userId'])) {
        $data = file_read('results');
        foreach ($data as $result) { ?>
            <tr>
            <?php 
                if($_POST['userId'] == $result[0]) {
                    foreach($result as $key => $res) {?>
                        <td><?= $res ?></td>
                    <?php }
                }?>
            </tr>
        <?php }
    }