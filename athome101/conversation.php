<?php

session_start();

include 'assets/php/config.php';

if (!isset($_SESSION['id'])) {
    header('location: error_page.php');
} else {
    $user = "SELECT * FROM user WHERE id = '{$_GET['sender_id']}'";
    $user_result = mysqli_query($conn, $user);

    if (mysqli_num_rows($user_result) > 0) {
        $user_rows = mysqli_fetch_array($user_result);
        $sender_id  = $_SESSION['id'];

        $reciever_id = $_GET['sender_id'];
    }

    $admin = "SELECT * FROM user WHERE user_id = '{$_SESSION['id']}'";
    $admin_result = mysqli_query($conn, $admin);

    if (mysqli_num_rows($admin_result) > 0) {
        $admin_rows = mysqli_fetch_assoc($admin_result);

        $sender_id = $admin_rows['id'];
    }

    $new_message = "SELECT * FROM user_chat WHERE sender_id = '$reciever_id'";
    $new_message_result = mysqli_query($conn, $new_message);

    if (mysqli_num_rows($new_message_result) > 0) {
        while ($new_rows = mysqli_fetch_assoc($new_message_result)) {
            $update_msg = "UPDATE `user_chat` SET `msg_id`='{$new_rows['msg_id']}',`sender_id`='{$new_rows['sender_id']}',
                            `reciever_id`='{$new_rows['reciever_id']}',`msg`='{$new_rows['msg']}',`status`='' WHERE 
                            msg_id = '{$new_rows['msg_id']}'";
            $update_msg_result = mysqli_query($conn, $update_msg);
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Chat</title>
    <link rel="stylesheet" href="assets/css/conversation.css">
    <link rel="shortcut icon" href="imgs/ossil.png" type="image/x-icon">
</head>

<body>
    <!--Header Ends-->
    <header id="header">
        <div class="header">
            <div class="header-left"><img src="assets/imgs/back (2).png" alt=""></div>
            <div class="header-right">
                <p><?php echo $user_rows['firstname'] . " " . $user_rows['lastname'] ?></p><img src="assets/imgs/account.png" alt="">
            </div>
        </div>
    </header>
    <!--Header Ends-->
    <!--Chats Begins-->
    <section id="chats">
        <div class="chats">
            <div class="chats-top">
                <div class="no-message active">
                    <p>No messages yet!</p>
                </div>
                <div class="message active">

                </div>
            </div>
            <form action="#" class="chats-bottom" autocomplete="off">
                <input type="text" name="sender_id" value="<?php echo $sender_id ?>" hidden>
                <input type="text" name="reciever_id" value="<?php echo $reciever_id ?>" hidden>
                <textarea name="message" id="typed-message" class="typed-message" placeholder="Type your message here..."></textarea>
                <input type="submit" class="submit-btn" value="Send">
            </form>
        </div>
    </section>
    <!--Chats Ends-->
    <script src="conversation.js"></script>
</body>

</html>