<?php

include 'config.php';

if (!isset($_SESSION['id'])) {
    $incoming_msg = mysqli_real_escape_string($conn, $_POST['reciever_id']);
    $out_going_msg = mysqli_real_escape_string($conn, $_POST['sender_id']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    $output = '';
    $chat_history = '';

    $sql = "SELECT * FROM user_chat LEFT JOIN user ON user.id = reciever_id
                    WHERE (sender_id = {$out_going_msg} AND reciever_id = {$incoming_msg}) 
                    OR (sender_id = {$incoming_msg} AND reciever_id = {$out_going_msg}) ORDER BY msg_id ASC";
    $result = mysqli_query($conn, $sql);


    if (mysqli_num_rows($result) > 0) {
        while ($rows = mysqli_fetch_assoc($result)) {
            if ($rows['sender_id'] > 0) {
                $chat_history = 'active';
            }
            if ($rows['reciever_id'] > 0) {
                $chat_history = 'active';
            }
            if ($rows['sender_id'] == $out_going_msg) {
                $output .= '
                        <div class="sender-column">
                            <div class="message-container">
                                <p>' . $rows['msg'] . '</p>
                            </div>
                        </div>
                                    ';
            } else {
                $output .= '
                        <div class="reciever-column">
                            <div class="message-container">
                                <img src="assets/imgs/account.png" alt="">
                                <p>' . $rows['msg'] . '</p>
                            </div>
                        </div>
                                    ';
            }
        }
        echo $output;
    }
}
