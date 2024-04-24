<?php

include 'assets/php/client.php';
include 'assets/php/hosting.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shared Web Hosting - OssilHost</title>
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/hosting.css">
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
                <h2>Web Hosting Plans for You</h2>
                <p>Select from our our list of plans the one that best sooth your need. We offer quality plans at affordable price.</p>
            </div>
        </div>
    </section>
    <!--Hero Ends-->
    <!--Hosting Begins-->
    <section id="hosting">
        <form action="hosting.php" class="hosting-form" method="POST">
            <div class="hosting">
                <div class="hosting-header">
                    <p>Select from our option of afordable hosting for your Website.</p>
                </div>
                <div class="hosting-plan-payment-method-container">
                    <div class="hosting-plan-method-content">
                        <div class="hosting-plan-option">
                            Monthly
                        </div>
                        <div class="hosting-plan-option">
                            Quarterly
                        </div>
                        <div class="hosting-plan-option">
                            Yearly
                        </div>
                    </div>
                </div>
                <div class="hosting-content active">
                    <div class="hosting-card">
                        <div class="hosting-card-header">
                            <h3>Basic</h3>
                        </div>
                        <div class="hosting-cost">
                            <p>$1.2/month</p>
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
                        <div class="hosting-card-header">
                            <h3>Intermidiate</h3>
                        </div>
                        <div class="hosting-cost">
                            <p>$3.76/month</p>
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
                            <p>$6.76/month</p>
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
                <div class="hosting-content">
                    <div class="hosting-card">
                        <div class="hosting-card-header">
                            <h3>Basic</h3>
                        </div>
                        <div class="hosting-cost">
                            <p>$1.1/month</p>
                        </div>
                        <p class="former-price">$1.2</p>
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
                            <input type="submit" name="basic2" class="basic-submit-btn" value="Add to Cart">
                        </div>
                    </div>
                    <div class="hosting-card">
                        <div class="hosting-card-header">
                            <h3>Intermidiate</h3>
                        </div>
                        <div class="hosting-cost">
                            <p>$3.5/Quarter</p>
                        </div>
                        <p class="former-price">$3.76</p>
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
                            <input type="submit" name="intermidiate2" class="basic-submit-btn" value="Add to Cart">
                        </div>
                    </div>
                    <div class="hosting-card">
                        <div class="hosting-card-header">
                            <h3>Advanced</h3>
                        </div>
                        <div class="hosting-cost">
                            <p>$6.5/Quarter</p>
                        </div>
                        <p class="former-price">$6.76</p>
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
                            <input type="submit" name="advance2" class="basic-submit-btn" value="Add to Cart">
                        </div>
                    </div>
                </div>
                <div class="hosting-content">
                    <div class="hosting-card">
                        <div class="hosting-card-header">
                            <h3>Basic</h3>
                        </div>
                        <div class="hosting-cost">
                            <p>$0.95/month</p>
                        </div>
                        <p class="former-price">$1.2</p>
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
                            <input type="submit" name="basic3" class="basic-submit-btn" value="Add to Cart">
                        </div>
                    </div>
                    <div class="hosting-card">
                        <div class="hosting-card-header">
                            <h3>Intermidiate</h3>
                        </div>
                        <div class="hosting-cost">
                            <p>$3/month</p>
                        </div>
                        <p class="former-price">$3.76</p>
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
                            <input type="submit" name="intermidiate3" class="basic-submit-btn" value="Add to Cart">
                        </div>
                    </div>
                    <div class="hosting-card">
                        <div class="hosting-card-header">
                            <h3>Advanced</h3>
                        </div>
                        <div class="hosting-cost">
                            <p>$6/month</p>
                        </div>
                        <p class="former-price">$6.76</p>
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
                            <input type="submit" name="advance3" class="basic-submit-btn" value="Add to Cart">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <!--Hosting Ends-->
    <!--Features Begins-->
    <section id="features">
        <div class="features">
            <div class="features-header">
                <h1>Shared Hosting Features</h1>
            </div>
            <div class="featoures-contents">
                <div class="feature-card">
                    <div class="feature-card-header">
                        <h3>Free SSL Certificate</h3>
                    </div>
                    <div class="feature-card-content">
                        <div class="feature-card-content-left">
                            <img src="assets/imgs/ssl-certificate.png" alt="">
                        </div>
                        <div class="feature-card-content-right">
                            <p>Despite the mandatory requirement of SSL certificates, rest assured that we have you covered. In fact, with all Shared Hosting plans, you will receive 50 free PositiveSSL certificates for one year, and they will be automatically
                                set up for you.</p>
                        </div>
                    </div>
                </div>
                <div class="feature-card">
                    <div class="feature-card-header">
                        <h3>Round-the-clock Live Support</h3>
                    </div>
                    <div class="feature-card-content">
                        <div class="feature-card-content-left">
                            <img src="assets/imgs/live-chat.png" alt="">
                        </div>
                        <div class="feature-card-content-right">
                            <p>Require assistance? Our dedicated team of hosting specialists is at your service, available through Live Chat. Whether you're a beginner or facing an issue that requires resolution, we are here to cater to all your Shared Hosting
                                requirements.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="feature-card">
                    <div class="feature-card-header">
                        <h3>WordPress and cPanel</h3>
                    </div>
                    <div class="feature-card-content">
                        <div class="feature-card-content-left">
                            <img src="assets/imgs/add (1).png" alt="">
                        </div>
                        <div class="feature-card-content-right">
                            <p>With the Softaculous app installer, you can deploy WordPress within seconds, making the updating and maintenance of your open-source applications effortless. cPanel, renowned globally as the best control panel, offers complete
                                website control through your web browser.</p>
                        </div>
                    </div>
                </div>
                <div class="feature-card">
                    <div class="feature-card-header">
                        <h3>Tailored Email Service</h3>
                    </div>
                    <div class="feature-card-content">
                        <div class="feature-card-content-left">
                            <img src="assets/imgs/email (1).png" alt="">
                        </div>
                        <div class="feature-card-content-right">
                            <p>Experience the convenience of having a domain-based email address that reflects your business and simplifies communication management. With us, you can easily add email accounts, set up forwarders, enable auto-responses, create
                                mailing lists, and aliases. Rest assured, our Jellyfish Spam Protection keeps your emails secure by safeguarding against any email threats or viruses.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Features Ends-->
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
    <script src="assets/js/plan.js"></script>
    <script src="assets/js/hosting.js"></script>
    <script src="chatbox.js"></script>
</body>

</html>
</body>

</html>