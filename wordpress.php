<?php

include 'assets/php/client.php';

include 'assets/php/wordpress.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wrodpress Hosting - OssilHost</title>
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/wordpress.css">
    <link rel="icon" href="assets/imgs/ossil.png">
    <link rel="stylesheet" href="assets/css/chatbox.css">
    <link rel="stylesheet" href="assets/css/footer.css">

</head>

<body>
    <!--Header Begins-->
    <?php

    include 'header.php';

    ?>
    <!--Header Ends-->
    <!--Hero Begings-->
    <section id="hero">
        <div class="hero">
            <div class="hero-content">
                <h2>Host Your Wordpress Site Easily</h2>
                <p>Select from our our list of plans the one that best sooth your need. We offer quality plans at affordable price.</p>
            </div>
        </div>
    </section>
    <!--Hero Ends-->
    <!--Hosting Begins-->
    <section id="hosting">
        <form action="wordpress.php" class="hosting-form" method="POST">
            <div class="hosting">
                <div class="hosting-header">
                    <p>Select from our option of afordable hosting for your Wordpress Website.</p>
                </div>
                <div class="hosting-content">
                    <div class="hosting-card">
                        <div class="hosting-card-header">
                            <h3>Basic</h3>
                        </div>
                        <div class="hosting-cost">
                            <p>$3.7/month</p>
                        </div>
                        <div class="hosting-details">
                            <p>4GB SSD Space</p>
                            <p>Unmetered Bandwidth</p>
                            <p>Host One Website</p>
                            <p>Suitable for small Blogs</p>
                            <p>24/7 Technical Support</p>
                            <p>Free SSL</p>
                            <p>cPanel Control Panel</p>
                        </div>
                        <div class="hosting-submit-btn-container">
                            <input type="submit" name="basic1" class="basic-submit-btn" value="Add to Cart">
                        </div>
                    </div>
                    <div class="hosting-card">
                        <div class="recommended-container">
                            <h3>Recommended</h3>
                        </div>
                        <div class="hosting-card-header">
                            <h3>Intermidiate</h3>
                        </div>
                        <div class="hosting-cost">
                            <p>$5.7/month</p>
                        </div>
                        <div class="hosting-details">
                            <p>4GB SSD Space</p>
                            <p>Unmetered Bandwidth</p>
                            <p>Host Five Website</p>
                            <p>Up to 2x Faster Websites</p>
                            <p>24/7 Technical Support</p>
                            <p>Free SSL</p>
                            <p>cPanel Control Panel</p>
                        </div>
                        <div class="hosting-submit-btn-container">
                            <input type="submit" name="intermidiate1" class="basic-submit-btn" value="Add to Cart">
                        </div>
                    </div>
                    <div class="hosting-card">
                        <div class="hosting-card-header">
                            <h3>Advanced</h3>
                        </div>
                        <div class="hosting-cost">
                            <p>$8.7/month</p>
                        </div>
                        <div class="hosting-details">
                            <p>4GB SSD Space</p>
                            <p>Unmetered Bandwidth</p>
                            <p>Host Unlimited Website</p>
                            <p>Up to 4x Faster Websites</p>
                            <p>24/7 Technical Support</p>
                            <p>Free SSL</p>
                            <p>cPanel Control Panel</p>
                        </div>
                        <div class="hosting-submit-btn-container">
                            <input type="submit" name="advance1" class="basic-submit-btn" value="Add to Cart">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <!--Hosting Ends-->
    <!--Chat Box Begins-->
    <?php
    include 'chatbox.php';
    ?>
    <!--Chat Box Ends-->
    <!--Footer Begins-->
    <?php
    include 'footer.php';
    ?>
    <!--Footer Ends-->
    <script src="assets/js/wordpress.js"></script>
    <script src="chatbox.js"></script>
</body>

</html>
</body>

</html>