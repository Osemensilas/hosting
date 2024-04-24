<?php

session_start();

include 'assets/php/config.php';

if (!isset($_SESSION['id'])) {
    header('location: error_page.php');
} else {

    $chats = "SELECT * FROM user_chat ORDER BY msg_id DESC";
    $result = mysqli_query($conn, $chats);
    $output = '';


    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            while ($chats_rows = mysqli_fetch_assoc($result)) {
                $user = "SELECT * FROM user WHERE id = '{$chats_rows['sender_id']}'";
                $user_result = mysqli_query($conn, $user);

                if (mysqli_num_rows($user_result) > 0) {
                    $user_rows = mysqli_fetch_assoc($user_result);
                }


                $output .= '
                            <a href="conversation.php?sender_id=' . $chats_rows['sender_id'] . '" class="user-msg-container">
                                <div class="user-msg-container-top">
                                    <div class="msg-container-left">
                                        ' . $user_rows['firstname'] . '
                                        ' . $user_rows['lastname'] . '
                                    </div>
                                    <div class="msg-container-right">
                                        ' . $chats_rows['status'] . '
                                    </div>
                                </div>
                                <div class="message-container-bottom">
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing eliaccusamutium, sequi etur porro ex laborum voluptat...</p>
                                </div>
                            </a>
                            ';
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat List</title>
    <link rel="stylesheet" href="assets/css/chat.css">
    <link rel="shortcut icon" href="assets/imgs/ossil.png" type="image/x-icon">
</head>

<body>
    <!--Header Begins-->
    <?php
    include 'header.php';
    ?>
    <!--Header Ends-->
    <!--Chats Begins-->
    <section id="chats">
        <div class="chats">
            <div class="chats-container">
                <?php
                echo $output;
                ?>
            </div>
        </div>
    </section>
    <!--Chas Ends-->
</body>

</html>