<?php

session_start();

include 'assets/php/config.php';

if (isset($_SESSION['id'])) {

    $sql = "DELETE FROM `address` WHERE id = '{$_GET['address']}'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location: user.php');
    }
}
