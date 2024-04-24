<?php

if (!isset($_SESSION['id'])) {
    include 'ip.php';
} else {
    $ip = '';
}

if (isset($_POST['basic1'])) {
    $hosting_price = 3.7;
    $hosting_duration = 'Monthly';
    $hosting_name = 'Basic';
    $hosting_type = 'Wordpress Hosting';
    $cart_id = rand(100, 999) . $_SESSION['id'];

    $sql = "INSERT INTO `cart`(`user_id`, `cart_id`, `plan`, `duration`, `cost`, `hosting`, `ip`) VALUES
            ('{$_SESSION['id']}','$cart_id','$hosting_type','$hosting_duration','$hosting_price','$hosting_name', '$ip')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location: cart.php');
    }
}



if (isset($_POST['intermidiate1'])) {
    $hosting_price = 5.7;
    $hosting_duration = 'Monthly';
    $hosting_name = 'Intermidiate';
    $hosting_type = 'Wordpress Hosting';
    $cart_id = rand(100, 999) . $_SESSION['id'];

    $sql = "INSERT INTO `cart`(`user_id`, `cart_id`, `plan`, `duration`, `cost`, `hosting`, `ip`) VALUES
            ('{$_SESSION['id']}','$cart_id','$hosting_type','$hosting_duration','$hosting_price','$hosting_name', '$ip')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location: cart.php');
    }
}




if (isset($_POST['advance1'])) {
    $hosting_price = 8.7;
    $hosting_duration = 'Monthly';
    $hosting_name = 'Advance';
    $hosting_type = 'Wordpress Hosting';
    $cart_id = rand(100, 999) . $_SESSION['id'];

    $sql = "INSERT INTO `cart`(`user_id`, `cart_id`, `plan`, `duration`, `cost`, `hosting`, `ip`) VALUES
            ('{$_SESSION['id']}','$cart_id','$hosting_type','$hosting_duration','$hosting_price','$hosting_name', '$ip')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location: cart.php');
    }
}
