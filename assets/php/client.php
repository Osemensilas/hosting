<?php

session_start();

include 'config.php';

if (!isset($_SESSION['id'])) {
    include 'ip.php';

    $active_client = '';
    $userPresent = '';
    $client_name = '';
    $startChat = 'active';
    $cart_item_num = 0;

    $getUser = "SELECT * FROM user WHERE ip = '$ip'";
    $getResult = mysqli_query($conn, $getUser);

    if (mysqli_num_rows($getResult) > 0) {
        $client = mysqli_fetch_assoc($getResult);

        $sender_id = $client['id'];
        $bootomChat = '';
        $userPresent = 'active';
        $client_name = $client['firstname'];
        $startChat = '';

        $cart = "SELECT * FROM cart WHERE user_id = '$sender_id'";
        $cart_result = mysqli_query($conn, $cart);

        $cart_item_num = mysqli_num_rows($cart_result);
    } else {

        $getLastUser = "SELECT * FROM user ORDER BY id DESC LIMIT 1";
        $getLastResult = mysqli_query($conn, $getLastUser);

        if (mysqli_num_rows($getLastResult) > 0) {
            $last_row = mysqli_fetch_assoc($getLastResult);

            $sender_id = $last_row['id'] + 1;
            $bootomChat = 'active';
        } else {
            $sender_id = '0';
            $bootomChat = 'active';
        }
    }

    $getAdmin = "SELECT * FROM `user` WHERE status = 'admin'";
    $adminResult = mysqli_query($conn, $getAdmin);

    if (mysqli_num_rows($adminResult) > 0) {
        $admin_row = mysqli_fetch_assoc($adminResult);

        $reciever_id = $admin_row['id'];
    }
} else {
    $userPresent = 'active';
    $startChat = '';
    $noChat = '';

    $getUser = "SELECT * FROM user WHERE user_id = '{$_SESSION['id']}'";
    $getResult = mysqli_query($conn, $getUser);

    if (mysqli_num_rows($getResult) > 0) {
        $client = mysqli_fetch_assoc($getResult);

        $active_client = 'active';
        $sender_id = $client['id'];
        $client_name = $client['firstname'];
    }

    $getAdmin = "SELECT * FROM `user` WHERE status = 'admin'";
    $adminResult = mysqli_query($conn, $getAdmin);

    if (mysqli_num_rows($adminResult) > 0) {
        $admin_row = mysqli_fetch_assoc($adminResult);

        $reciever_id = $admin_row['id'];
    }

    $cart = "SELECT * FROM cart WHERE user_id = '{$_SESSION['id']}'";
    $cart_result = mysqli_query($conn, $cart);

    $cart_item_num = mysqli_num_rows($cart_result);
}
