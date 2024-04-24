<?php

include 'assets/php/client.php';

include 'assets/php/config.php';

if (isset($_SESSION['id'])) {
    $sql = "SELECT * FROM cart WHERE user_id = '{$_SESSION['id']}' ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);
    $content = '';

    if (mysqli_num_rows($result) > 0) {
        while ($rows = mysqli_fetch_assoc($result)) {
            $remove_item = $rows['cart_id'];
            $content .= '
                <div class="items-content">
                    <div class="item-details">
                        <div class="top-cart-content">
                            <div class="item-img">
                                <p>' . $rows['hosting'] . ' (' . $rows['duration'] . ')</p>
                            </div>
                            <div class="item-price">
                                <p>$<span class="items-cost">' . $rows['cost'] . '</span></p>
                            </div>
                        </div>
                        <div class="bottom-cart-content">
                            <a class="remove-content" href="remove_item.php?cart_id=' . $remove_item . '">
                                <div class="cancel-img"></div>
                                <div class="remove">
                                    <h4>REMOVE</h4>
                                </div>
                            </a>
                            <div class="add-content-number">
                                <div class="time">' . $rows['plan'] . '</div>
                            </div>
                        </div>
                    </div>
                </div>
            ';
        }
    }
} else {
    $sql = "SELECT * FROM cart WHERE ip = '$ip' ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);
    $content = '';

    if (mysqli_num_rows($result) > 0) {
        while ($rows = mysqli_fetch_assoc($result)) {
            $remove_item = $rows['cart_id'];
            $content .= '
                <div class="items-content">
                    <div class="item-details">
                        <div class="top-cart-content">
                            <div class="item-img">
                                <p>' . $rows['hosting'] . ' (' . $rows['duration'] . ')</p>
                            </div>
                            <div class="item-price">
                                <p>$<span class="items-cost">' . $rows['cost'] . '</span></p>
                            </div>
                        </div>
                        <div class="bottom-cart-content">
                            <a class="remove-content" href="remove_item.php?cart_id=' . $remove_item . '">
                                <div class="cancel-img"></div>
                                <div class="remove">
                                    <h4>REMOVE</h4>
                                </div>
                            </a>
                            <div class="add-content-number">
                                <div class="time">' . $rows['plan'] . '</div>
                            </div>
                        </div>
                    </div>
                </div>
            ';
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="shortcut icon" href="assets/imgs/ossil.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/general.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/cart.css">
    <link rel="stylesheet" href="assets/css/footer.css">
</head>

<body>
    <!--Header Begins-->
    <header id="header">
        <div class="header-top">
            <div class="header-left" onclick="window.location='index.php'">
                <img src="assets/imgs/logo-design11.png" alt="" class="logo">
            </div>
            <div class="hamburger-container">
                <div class="hamburger"></div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="header-content">
                <div class="header-link">
                    <div class="header-nav">
                        <ul class="menu">
                            <li class="menu-content"><a href="index.php">Home</a></li>
                            <li class="menu-content"><a href="#">Domains<div class="icon"></div></a>
                                <ul class="sub-menu">
                                    <li class="menu-content"><a href="domain.php">Register a Domain</a></li>
                                    <li class="menu-content"><a href="domain_transfer.php">Transfer to Us</a></li>
                                    <li class="menu-content"><a href="domain_search.php">Domain Name Search</a></li>
                                </ul>
                            </li>
                            <li class="menu-content"><a href="#">Hosting<div class="icon"></div></a>
                                <ul class="sub-menu">
                                    <li class="menu-content"><a href="hosting.php">Shared Hosting</a></li>
                                    <li class="menu-content"><a href="wordpress.php">Wordpress Hosting</a></li>
                                </ul>
                            </li>
                            <li class="menu-content"><a href="email.php">Email</a></li>
                            <li class="menu-content"><a href="#">Security<div class="icon"></div></a>
                                <ul class="sub-menu">
                                    <li class="menu-content"><a href="security.php">SSL Certificate</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="user-container">
                        <p class="user <?php echo $active_client ?>">Hello, <?php echo $client['firstname']; ?>
                        <ul class="menu <?php echo $active_client ?>">
                            <li class="menu-content">
                                <a title="header-user"><img src="assets/imgs/account.png" alt=""></a>
                                <ul class="sub-menu">
                                    <li class="menu-content"><a href="#">Dashboard</a></li>
                                    <li class="menu-content"><a href="user.php">Profile</a></li>
                                    <li class="menu-content"><a href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                        </p>
                        <a class="no-user <?php echo $active_client ?>" href="signin.php">Sign In</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Header Ends-->
    <!--Cart Begins-->
    <section id="cart">
        <div class="cart">
            <div class="cart-content">
                <?php echo $content; ?>
            </div>
            <div class="cart-summary">
                <h2>CART SUMMARY</h2>
                <div class="total">
                    <p>Subtotal:</p>
                    <div class="total-amount">$<span class="money">0</span></div>
                </div>
                <div class="pay-btn">
                    <a href="#" class="pay-deactivated">Pay</a>
                </div>
            </div>
        </div>
    </section>
    <!--Cart Ends-->
    <!--Footer Begins-->
    <?php
    include 'footer.php';
    ?>
    <!--Footer Ends-->
    <script src="assets/js/cart.js"></script>
</body>

</html>