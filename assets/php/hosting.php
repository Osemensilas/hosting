<?php

if (!isset($_SESSION['id'])) {
    include 'ip.php';
} else {
    $ip = '';
}

if (isset($_POST['basic1'])) {
    $hosting_price = 1.2;
    $hosting_duration = 'Monthly';
    $hosting_name = 'Basic';
    $hosting_type = 'Shared Hosting';
    $cart_id = rand(100, 999) . $_SESSION['id'];

    $sql = "INSERT INTO `cart`(`user_id`, `cart_id`, `plan`, `duration`, `cost`, `hosting`, `ip`) VALUES
            ('{$_SESSION['id']}','$cart_id','$hosting_type','$hosting_duration','$hosting_price','$hosting_name', '$ip')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location: cart.php');
    }
}

if (isset($_POST['basic2'])) {
    $hosting_price = 1.1 * 3;
    $hosting_duration = 'Quarterly';
    $hosting_name = 'Basic';
    $hosting_type = 'Shared Hosting';
    $cart_id = rand(100, 999) . $_SESSION['id'];

    $sql = "INSERT INTO `cart`(`user_id`, `cart_id`, `plan`, `duration`, `cost`, `hosting`, `ip`) VALUES
    ('{$_SESSION['id']}','$cart_id','$hosting_type','$hosting_duration','$hosting_price','$hosting_name', '$ip')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location: cart.php');
    }
}

if (isset($_POST['basic3'])) {
    $hosting_price = 0.95 * 12;
    $hosting_duration = 'Yearly';
    $hosting_name = 'Basic';
    $hosting_type = 'Shared Hosting';
    $cart_id = rand(100, 999) . $_SESSION['id'];

    $sql = "INSERT INTO `cart`(`user_id`, `cart_id`, `plan`, `duration`, `cost`, `hosting`, `ip`) VALUES
    ('{$_SESSION['id']}','$cart_id','$hosting_type','$hosting_duration','$hosting_price','$hosting_name', '$ip')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location: cart.php');
    }
}

if (isset($_POST['intermidiate1'])) {
    $hosting_price = 3.67;
    $hosting_duration = 'Monthly';
    $hosting_name = 'Intermidiate';
    $hosting_type = 'Shared Hosting';
    $cart_id = rand(100, 999) . $_SESSION['id'];

    $sql = "INSERT INTO `cart`(`user_id`, `cart_id`, `plan`, `duration`, `cost`, `hosting`, `ip`) VALUES
            ('{$_SESSION['id']}','$cart_id','$hosting_type','$hosting_duration','$hosting_price','$hosting_name', '$ip')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location: cart.php');
    }
}

if (isset($_POST['intermidiate2'])) {
    $hosting_price = 3.5 * 3;
    $hosting_duration = 'Quarterly';
    $hosting_name = 'Intermidiate';
    $hosting_type = 'Shared Hosting';
    $cart_id = rand(100, 999) . $_SESSION['id'];

    $sql = "INSERT INTO `cart`(`user_id`, `cart_id`, `plan`, `duration`, `cost`, `hosting`, `ip`) VALUES
            ('{$_SESSION['id']}','$cart_id','$hosting_type','$hosting_duration','$hosting_price','$hosting_name', '$ip')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location: cart.php');
    }
}

if (isset($_POST['intermidiate3'])) {
    $hosting_price = 3 * 12;
    $hosting_duration = 'Yearly';
    $hosting_name = 'Intermidiate';
    $hosting_type = 'Shared Hosting';
    $cart_id = rand(100, 999) . $_SESSION['id'];

    $sql = "INSERT INTO `cart`(`user_id`, `cart_id`, `plan`, `duration`, `cost`, `hosting`, `ip`) VALUES
            ('{$_SESSION['id']}','$cart_id','$hosting_type','$hosting_duration','$hosting_price','$hosting_name', '$ip')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location: cart.php');
    }
}


if (isset($_POST['advance1'])) {
    $hosting_price = 6.76;
    $hosting_duration = 'Monthly';
    $hosting_name = 'Advance';
    $hosting_type = 'Shared Hosting';
    $cart_id = rand(100, 999) . $_SESSION['id'];

    $sql = "INSERT INTO `cart`(`user_id`, `cart_id`, `plan`, `duration`, `cost`, `hosting`, `ip`) VALUES
            ('{$_SESSION['id']}','$cart_id','$hosting_type','$hosting_duration','$hosting_price','$hosting_name', '$ip')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location: cart.php');
    }
}

if (isset($_POST['advance2'])) {
    $hosting_price = 6.5 * 3;
    $hosting_duration = 'Quarterly';
    $hosting_name = 'Advance';
    $hosting_type = 'Shared Hosting';
    $cart_id = rand(100, 999) . $_SESSION['id'];

    $sql = "INSERT INTO `cart`(`user_id`, `cart_id`, `plan`, `duration`, `cost`, `hosting`, `ip`) VALUES
            ('{$_SESSION['id']}','$cart_id','$hosting_type','$hosting_duration','$hosting_price','$hosting_name', '$ip')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location: cart.php');
    }
}

if (isset($_POST['advance3'])) {
    $hosting_price = 6 * 12;
    $hosting_duration = 'Yearly';
    $hosting_name = 'Advance';
    $hosting_type = 'Shared Hosting';
    $cart_id = rand(100, 999) . $_SESSION['id'];

    $sql = "INSERT INTO `cart`(`user_id`, `cart_id`, `plan`, `duration`, `cost`, `hosting`, `ip`) VALUES
            ('{$_SESSION['id']}','$cart_id','$hosting_type','$hosting_duration','$hosting_price','$hosting_name', '$ip')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location: cart.php');
    }
}
