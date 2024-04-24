<header id="header">
    <div class="header-top">
        <div class="header-left" onclick="window.location='index.php'">
            <img src="assets/imgs/logo-design11.png" alt="" class="logo">
        </div>
        <div class="hamburger-container">
            <div class="hamburger"></div>
        </div>
        <div class="shopping-cart-container">
            <p class="<?php echo $active_client ?>"></p>
            <a href="cart.php" class="shopping-cart" title="shopping-cart"><img src="assets/imgs/shopping-cart (1).png" alt="">
                <div class="item-num"><?php echo $cart_item_num; ?></div>
            </a>
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
                    <div class="user <?php echo $active_client ?>">Hello, <?php echo $client['firstname']; ?>
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
                    </div>
                    <a class="no-user <?php echo $active_client ?>" href="signin.php">Sign In</a>
                </div>
            </div>
        </div>
    </div>
</header>