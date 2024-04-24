<?php

include 'assets/php/client.php';

include 'assets/php/email.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Email - OssilHost</title>
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/email.css">
    <link rel="shortcut icon" href="assets/imgs/ossil.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/chatbox.css">
    <link rel="stylesheet" href="assets/css/footer.css">
</head>

<body>
    <!--Header Begins-->
    <?php

    include 'header.php';

    ?>
    <!--Header Ends-->
    <!--Email Hero Begins-->
    <section id="hero">
        <div class="hero">
            <div class="hero-header">
                <h2>Professional Business Email</h2>
                <p>Get your professional business email at low cost</p>
            </div>
        </div>
        <form action="email.php" class="email-billing-container" method="POST">
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
                        <p><img src="assets/imgs/dollar-symbol.png" alt="">1.96/month</p>
                    </div>
                    <div class="hosting-submit-btn-container">
                        <input type="submit" name="basic1" class="basic-submit-btn" value="Add to Cart">
                    </div>
                    <div class="hosting-details">
                        <p>1 Mail Box</p>
                        <p>5GB for emails</p>
                    </div>
                </div>
                <div class="hosting-card">
                    <div class="hosting-card-header">
                        <h3>Intermidiate</h3>
                    </div>
                    <div class="hosting-cost">
                        <p><img src="assets/imgs/dollar-symbol.png" alt="">3.76/month</p>
                    </div>
                    <div class="hosting-submit-btn-container">
                        <input type="submit" name="intermidiate1" class="basic-submit-btn" value="Add to Cart">
                    </div>
                    <div class="hosting-details">
                        <p>3 Mail boxes</p>
                        <p>30GB for emails</p>
                        <p>Full mobile sync support</p>
                    </div>
                </div>
                <div class="hosting-card">
                    <div class="hosting-card-header">
                        <h3>Advanced</h3>
                    </div>
                    <div class="hosting-cost">
                        <p><img src="assets/imgs/dollar-symbol.png" alt="">6.76/month</p>
                    </div>
                    <div class="hosting-submit-btn-container">
                        <input type="submit" name="advance1" class="basic-submit-btn" value="Add to Cart">
                    </div>
                    <div class="hosting-details">
                        <p>3 Mail boxes</p>
                        <p>30GB for emails</p>
                        <p>Full mobile sync support</p>
                        <p>Docs, Sheets, and Presentation</p>
                        <p>Premium Email Dellivery</p>
                    </div>
                </div>
            </div>
            <div class="hosting-content">
                <div class="hosting-card">
                    <div class="hosting-card-header">
                        <h3>Basic</h3>
                    </div>
                    <div class="hosting-cost">
                        <p><img src="assets/imgs/dollar-symbol.png" alt="">2/month</p>
                    </div>
                    <p class="former-price"><img src="assets/imgs/dollar-symbol.png" alt="">2.76</p>
                    <div class="hosting-submit-btn-container">
                        <input type="submit" name="basic2" class="basic-submit-btn" value="Add to Cart">
                    </div>
                    <div class="hosting-details">
                        <p>1 Mail Box</p>
                        <p>5GB for emails</p>
                    </div>
                </div>
                <div class="hosting-card">
                    <div class="hosting-card-header">
                        <h3>Intermidiate</h3>
                    </div>
                    <div class="hosting-cost">
                        <p><img src="assets/imgs/dollar-symbol.png" alt="">4/Quarter</p>
                    </div>
                    <p class="former-price"><img src="assets/imgs/dollar-symbol.png" alt="">4.76</p>
                    <div class="hosting-submit-btn-container">
                        <input type="submit" name="intermidiate2" class="basic-submit-btn" value="Add to Cart">
                    </div>
                    <div class="hosting-details">
                        <p>3 Mail boxes</p>
                        <p>30GB for emails</p>
                        <p>Full mobile sync support</p>
                    </div>
                </div>
                <div class="hosting-card">
                    <div class="hosting-card-header">
                        <h3>Advanced</h3>
                    </div>
                    <div class="hosting-cost">
                        <p><img src="assets/imgs/dollar-symbol.png" alt="">6/Quarter</p>
                    </div>
                    <p class="former-price"><img src="assets/imgs/dollar-symbol.png" alt="">6.76</p>
                    <div class="hosting-submit-btn-container">
                        <input type="submit" name="advance2" class="basic-submit-btn" value="Add to Cart">
                    </div>
                    <div class="hosting-details">
                        <p>3 Mail boxes</p>
                        <p>30GB for emails</p>
                        <p>Full mobile sync support</p>
                        <p>Docs, Sheets, and Presentation</p>
                        <p>Premium Email Dellivery</p>
                    </div>
                </div>
            </div>
            <div class="hosting-content">
                <div class="hosting-card">
                    <div class="hosting-card-header">
                        <h3>Basic</h3>
                    </div>
                    <div class="hosting-cost">
                        <p><img src="assets/imgs/dollar-symbol.png" alt="">1.3/month</p>
                    </div>
                    <p class="former-price"><img src="assets/imgs/dollar-symbol.png" alt="">2.76</p>
                    <div class="hosting-submit-btn-container">
                        <input type="submit" name="basic3" class="basic-submit-btn" value="Add to Cart">
                    </div>
                    <div class="hosting-details">
                        <p>1 Mail Box</p>
                        <p>5GB for emails</p>
                    </div>
                </div>
                <div class="hosting-card">
                    <div class="hosting-card-header">
                        <h3>Intermidiate</h3>
                    </div>
                    <div class="hosting-cost">
                        <p><img src="assets/imgs/dollar-symbol.png" alt="">3.2/month</p>
                    </div>
                    <p class="former-price"><img src="assets/imgs/dollar-symbol.png" alt="">4.76</p>
                    <div class="hosting-submit-btn-container">
                        <input type="submit" name="intermidiate3" class="basic-submit-btn" value="Add to Cart">
                    </div>
                    <div class="hosting-details">
                        <p>3 Mail boxes</p>
                        <p>30GB for emails</p>
                        <p>Full mobile sync support</p>
                    </div>
                </div>
                <div class="hosting-card">
                    <div class="hosting-card-header">
                        <h3>Advanced</h3>
                    </div>
                    <div class="hosting-cost">
                        <p><img src="assets/imgs/dollar-symbol.png" alt="">5.2/month</p>
                    </div>
                    <p class="former-price"><img src="assets/imgs/dollar-symbol.png" alt="">6.76</p>
                    <div class="hosting-submit-btn-container">
                        <input type="submit" name="advance3" class="basic-submit-btn" value="Add to Cart">
                    </div>
                    <div class="hosting-details">
                        <p>3 Mail boxes</p>
                        <p>30GB for emails</p>
                        <p>Full mobile sync support</p>
                        <p>Docs, Sheets, and Presentation</p>
                        <p>Premium Email Dellivery</p>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <!--Email Hero Ends-->
    <!--Email Talks Begins-->
    <div id="email-talk">
        <div class="email-talk-header">
            <h2>Enhance your professionalism and make your brand a favorite in everyone's inbox</h2>
        </div>
        <div class="email-talk-top-container">
            <div class="email-talk-top-cards">
                <div class="email-top-card">
                    <div class="email-card-top">
                        <img src="assets/imgs/envelope.png" alt="">
                    </div>
                    <div class="email-card-bottom">
                        <h3>Establish trust and personalize your experience</h3>
                        <p>Begin on the right path by aligning your business email address with your website brand.</p>
                    </div>
                </div>
                <div class="email-top-card">
                    <div class="email-card-top">
                        <img src="assets/imgs/flow.png" alt="">
                    </div>
                    <div class="email-card-bottom">
                        <h3>Efficiently manage your email flow like a pro</h3>
                        <p>Consolidate all your personal and professional email accounts into one unified inbox. No more switching between accounts to send or receive emails.</p>
                    </div>
                </div>
                <div class="email-top-card">
                    <div class="email-card-top">
                        <img src="assets/imgs/completed-task.png" alt="">
                    </div>
                    <div class="email-card-bottom">
                        <h3>Experience seamless control</h3>
                        <p>Tailor your email hosting to align with your business goals. Share and synchronize emails, appointments, calendars, and tasks with your contacts for better organization and collaboration.</p>
                    </div>
                </div>
                <div class="email-top-card">
                    <div class="email-card-top">
                        <img src="assets/imgs/operational-system.png" alt="">
                    </div>
                    <div class="email-card-bottom">
                        <h3>Stay productive on the move with our mobile-friendly solutions for business</h3>
                        <p>Access all your professional and personal email accounts in a unified portal view. Stay updated with social feeds, news, emails, and your busy schedule from any Windows, Android, or Apple device.</p>
                    </div>
                </div>
                <div class="email-top-card">
                    <div class="email-card-top">
                        <img src="assets/imgs/partners.png" alt="">
                    </div>
                    <div class="email-card-bottom">
                        <h3>Ignite your team's potential</h3>
                        <p>Expand your capabilities with comprehensive support for sharing emails, documents, spreadsheets, calendars, tasks, and more through our Pro and Ultimate plans.</p>
                    </div>
                </div>
                <div class="email-top-card">
                    <div class="email-card-top">
                        <img src="assets/imgs/member-card.png" alt="">
                    </div>
                    <div class="email-card-bottom">
                        <h3>Experience a sense of belonging</h3>
                        <p>We don't just offer our Professional Business Email service; we also use it ourselves. Our Ossilhost staff members across various territories are happily connected through it.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="email-talk-continue">
            <div class="email-talk-continue-header">
                <h2>Broaden your horizons</h2>
                <p>Operate your business with a growth mindset. All email hosting plans come with these invaluable tools to enhance security, ensure data safety, and promote expansion.</p>
            </div>
            <div class="email-talk-continue-content">
                <div class="email-talk-continue-card">
                    <div class="continue-card-left">
                        <img src="assets/imgs/password.png" alt="">
                    </div>
                    <div class="continue-card-right">
                        <h3>Safe Two-Factor Authentication (2FA)</h3>
                        <p>ePrivate Email offers support for TOTP (Time-based One-Time Password) Two-Factor Authentication (2FA).</p>
                    </div>
                </div>
                <div class="email-talk-continue-card">
                    <div class="continue-card-left">
                        <img src="assets/imgs/security.png" alt="">
                    </div>
                    <div class="continue-card-right">
                        <h3>Enhanced application security</h3>
                        <p>Benefit from enhanced account protection and privacy. You can set additional secure passwords for apps to safeguard your main password from compromise.</p>
                    </div>
                </div>
                <div class="email-talk-continue-card">
                    <div class="continue-card-left">
                        <img src="assets/imgs/email (2).png" alt="">
                    </div>
                    <div class="continue-card-right">
                        <h3>Robust protection against spam</h3>
                        <p>Delight in super-secure email hosting, which includes free anti-spam protection to safeguard every message.</p>
                    </div>
                </div>
                <div class="email-talk-continue-card">
                    <div class="continue-card-left">
                        <img src="assets/imgs/astrazeneca.png" alt="">
                    </div>
                    <div class="continue-card-right">
                        <h3>Brand impact</h3>
                        <p>Enhance your brand presence with social media links and personalized logos, along with handwritten and HTML signatures. Craft your email with images, colors, styles, and shapes that match your brand's identity.</p>
                    </div>
                </div>
                <div class="email-talk-continue-card">
                    <div class="continue-card-left">
                        <img src="assets/imgs/address.png" alt="">
                    </div>
                    <div class="continue-card-right">
                        <h3>Free forwarding addresses</h3>
                        <p>Appear even more credible by utilizing your professional email address to create aliases such as sales@yourbusiness.com, accounts@yourbusiness.com, all of which feed into one unified inbox.</p>
                    </div>
                </div>
                <div class="email-talk-continue-card">
                    <div class="continue-card-left">
                        <img src="assets/imgs/role-model.png" alt="">
                    </div>
                    <div class="continue-card-right">
                        <h3>Growth with confidence</h3>
                        <p>Achieve scalable growth with our Pro and Ultimate plans, which offer extra mailboxes, increased storage, ActiveSync, CalDav, and CardDav. Moreover, all additional mailboxes are available at half the subscription prices.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Email Talks Ends-->
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
    <script src="assets/js/email.js"></script>
    <script src="chatbox.js"></script>
</body>

</html>