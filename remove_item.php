<?php

session_start();

include 'assets/php/config.php';

$item = "DELETE FROM cart WHERE user_id = '{$_SESSION['id']}' AND cart_id = '{$_GET['cart_id']}'";
$item_result = mysqli_query($conn, $item);


if ($item_result) {
    header('location: cart.php');
}
