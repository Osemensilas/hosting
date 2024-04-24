<?php

include 'assets/php/client.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage - OssilHost</title>
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="icon" href="assets/imgs/ossil.png">
    <link rel="stylesheet" href="assets/css/chatbox.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/developer.css">
</head>

<body>
    <!--Header Begins-->
    <?php

    include 'header.php';

    ?>
    <!--Header Ends-->
    <!--Hero Begins-->
    <section id="hero">
        <img src="assets/imgs/hostig.jpg" class="system_img" alt="">
        <img src="#" class="phone_img" alt="">
        <div class="hero">
            <div class="hero-content">
                <h1>Fast, Reliable, and Secure</h1>
                <p>Join the thousands of Website owners who depend on Ossil Host to get their businesses noticed online.</p>
            </div>
        </div>
    </section>
    <!--Hero Ends-->
    <!--Domain Begins-->
    <!--Form Begins-->
    <section id="domain">
        <form action="#" class="home-form">
            <div class="domain">
                <div class="domain-content">
                    <input type="text" class="domain-search" placeholder="Search for a domain name">
                    <div class="error"></div>
                    <div class="domain-submit-btn-container">
                        <input type="submit" class="domain-submit">
                    </div>
                </div>
            </div>
        </form>
        <div class="domain-description">
            <div class="domain-description-content">
                <p>.com @ $ 14</p>
                <p>.com.ng @ $ 1.8</p>
                <p>.ng @ $ 13</p>
                <p>.net @ $ 16</p>
                <p>.org @ $ 15</p>
                <p>.xyz @ $ 14.99</p>
            </div>
        </div>
    </section>
    <!--Form Ends-->
    <!--Domain Ends-->
    <!--Hosting Begins-->
    <section id="hosting">
        <div class="hosting">
            <div class="hosting-header">
                <p>Select from our option of afordable hosting for your Website.</p>
            </div>
            <div class="hosting-content">
                <div class="hosting-card">
                    <div class="hosting-card-header">
                        <h3>Shared Hosting</h3>
                    </div>
                    <div class="hosting-details">
                        <p>Host your website with our</p>
                        <p>4x faster and affordable plans.</p>
                        <p>We also offer</p>
                        <p>24/7 Technical Support</p>
                        <p>Free SSL</p>
                        <p>cPanel Control Panel</p>
                    </div>
                    <div class="hosting-cost">
                        <p>Starts @ $1.2/month</p>
                    </div>
                    <div class="hosting-submit-btn-container">
                        <a href="hosting.php" class="hosting-link">Get Web Hosting</a>
                    </div>
                </div>
                <div class="hosting-card">
                    <div class="hosting-card-header">
                        <h3>Wordpress Hosting</h3>
                    </div>
                    <div class="hosting-details">
                        <p>Host your wordpress site</p>
                        <p>on our super fast SSD server</p>
                        <p>For best performance.</p>
                        <p>Get 5x faster loading</p>
                        <p>with our wordpress hostng.</p>
                        <p>Free SSL</p>
                        <p>cPanel Control Panel</p>
                    </div>
                    <div class="hosting-cost">
                        <p>Starts @ $3.7/month</p>
                    </div>
                    <div class="hosting-submit-btn-container">
                        <a href="wordpress.php" class="hosting-link">Get Wordpress Hosting</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Hosting Ends-->
    <!--Contact us begins-->
    <section id="contact-us">
        <div class="contact-us">
            <div class="contact-us-header">
                <h2>Do you need an assistance? Start a chat with us.</h2>
                <p>Our team are available to assist you.</p>
            </div>
            <div class="chat-btn">
                <a href="chat.php" class="start-chatting">Start Live Chat</a>
            </div>
        </div>
    </section>
    <!--Contact us ends-->
    <!--About Us Begins-->
    <section id="about-us">
        <div class="about-us">
            <div class="about-us-top">
                <div class="about-us-top-header">
                    <h2>Why Ossilhost?</h2>
                </div>
            </div>
            <div class="about-us-bottom">
                <div class="bottom-container">
                    <div class="bottom-container-img-container">
                        <img src="assets/imgs/value.png" alt="">
                    </div>
                    <div class="bottom-container-header">
                        <h3>Value for Money</h3>
                    </div>
                    <div class="bottom-container-content">
                        <p>We offer the best Industry prices with services to the value of ₦10,000 included for Free with every domain name you register with us: DNS Management, 2 Free Email Forwarders.</p>
                    </div>
                </div>
                <div class="bottom-container">
                    <div class="bottom-container-img-container">
                        <img src="assets/imgs/data-security.png" alt="">
                    </div>
                    <div class="bottom-container-header">
                        <h3>Privacy & Security</h3>
                    </div>
                    <div class="bottom-container-content">
                        <p>At Ossilhost, we prioritize the security and privacy of your website above all else. We are dedicated to upholding the rights of individuals and consumers on the internet. Our mission is to ensure an open, free, and safe online
                            environment for everyone.</p>
                    </div>
                </div>
                <div class="bottom-container">
                    <div class="bottom-container-img-container">
                        <img src="assets/imgs/live-chat.png" alt="">
                    </div>
                    <div class="bottom-container-header">
                        <h3>24x7 Premium Customer Support</h3>
                    </div>
                    <div class="bottom-container-content">
                        <p>We are proud to provide the best & the fastest customer support in the Industry. Get Premium Support from our highly trained staff with low wait times on chat support and response times for all tickets and emails being less than
                            10 minutes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Us Ends-->
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
    <script src="assets/js/index.js"></script>
    <script src="chatbox.js"></script>
    <script src="assets/js/developer.js"></script>
</body>

</html>