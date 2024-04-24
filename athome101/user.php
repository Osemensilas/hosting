<?php

session_start();

include 'assets/php/config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="shortcut icon" href="assets/imgs/ossil.png" type="image/x-icon">
</head>

<body>
    <!--Header Begins-->
    <header id="header">
        <div class="header">
            <div class="header-left">
                <a href="homepage.php">HomePage</a>
            </div>
            <div class="header-right">
                <a href="logout.php" class="logout-btn">Logout</a>
            </div>
        </div>
    </header>
    <!--Header Ends-->
    <!--User Begins-->
    <section id="user">
        <div class="user">
            <div class="user-left">
                <div class="user-left-content">
                    <a href="user.php">Admin Details</a>
                    <a href="change_pass.php">Change Password</a>
                </div>
            </div>
            <div class="user-right">
                <div class="user-right-header">
                    <h2>Admin Detail</h2>
                </div>
                <div class="user-right-content">
                    <div class="admin">
                        <p>Name: Osemen Silas Oseobonoite</p>
                        <p>Email: Osemensilas@gmail.com</p>
                        <p>Phone No.: 09054060454</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--User Ends-->
</body>

</html>