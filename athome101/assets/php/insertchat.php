<?php

session_start();

if (isset($_SESSION['id'])) {
    include 'config.php';

    $reciever_id = mysqli_real_escape_string($conn, $_POST['reciever_id']);
    $sender_id = mysqli_real_escape_string($conn, $_POST['sender_id']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    if (!empty($message)) {
        $sql = "INSERT INTO user_chat (sender_id, reciever_id, msg, status) VALUES 
        ('$sender_id', '$reciever_id', '$message', 'New Message')";
        $result = mysqli_query($conn, $sql);
    }
}
