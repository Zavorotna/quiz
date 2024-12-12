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
            $max = 0;
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
                                    <td class="avatar-table"><img src="img/<?= $user ?>" alt="<?= $user ?>"></td>
                                <?php } else {?>
                                    <td><?= $user ?></td>
                                    <?php }
                        } ?>
                        <td>
                            <form action="result_table.php" method="post">
                                <input type="hidden" name="userId" value="<?= $userData[0]; ?>">
                                <button type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" height="34px" viewBox="0 -960 960 960" width="34px" fill="#fff"><path d="m576-160-56-56 104-104-104-104 56-56 104 104 104-104 56 56-104 104 104 104-56 56-104-104-104 104Zm79-360L513-662l56-56 85 85 170-170 56 57-225 226ZM80-280v-80h360v80H80Zm0-320v-80h360v80H80Z"/></svg></button>
                            </form>
                        </td>
                        <td>
                            <form action="profile.php" method="post">
                                <input type="hidden" name="delete" value="<?= $userData[0]; ?>">
                                <button type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg>
                                </button>
                            </form>
                        </td>
                <?php } ?>
                </tr> 
            <?php }
        }
    } 
?>