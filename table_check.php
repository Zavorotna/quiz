<?php
    if (isset($_SESSION['user']['login'])) {
        $data = file_read('results');
        if ($_SESSION['user']['login'] != 'admin') {
            $userResults = [];
            foreach ($data as $result) {
                if ($_SESSION['user']['login'] == $result[0]) {
                    $userResults[] = $result;
                }
            }
            $max = 100;
            foreach ($userResults as $result) {
                // print_r($userResults);
                $sumArr[] = $result[2];
                $sum = round(array_sum($sumArr) / count($sumArr), 0);
                if ($result[2] > $max) {
                    $max = $result[2];
                }
            }
            foreach ($userResults as $result) { ?>
                <tr class="<?= ($result[2] == $max) ? 'max_result' : ''; ?>">
                    <?php
                    foreach ($result as $key => $res) {
                        if ($res != $result[0]) {?>
                            <td><?= $res ?></td>
                            
                        <?php }
                    } ?>
                </tr>
            <?php }
        }
        
        if ($_SESSION['user']['login'] == 'admin') {
            $data = file_read('users');
            foreach ($data as $keyData => $userData) { ?>
                <?php if($keyData != 0) { ?>
                    <tr>
                        <?php 
                            foreach ($userData as $key => $user) { 
                                if ($key == 4) { ?>
                                    <td><img src="img/<?= $user ?>" alt="<?= $user ?>"></td>
                                <?php } else {?>
                                    <td><?= $user ?></td>
                                    <?php }
                        } ?>
                        <td>
                            <form action="result_table.php" method="post">
                                <input type="hidden" name="userId" value="<?= $userData[0]; ?>">
                                <button type="submit">Result user</button>
                            </form>
                        </td>
                <?php } ?>
                </tr> 
            <?php }
        }
    } 
?>