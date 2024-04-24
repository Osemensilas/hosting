<?php

include 'assets/php/client.php';

include 'assets/php/security.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Security - OssilHost</title>
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/security.css">
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
    <!--Security Begins-->
    <section id="security">
        <div class="security">
            <div class="security-talk-container">
                <h2>Web Security</h2>
                <p>Utilize Our SSL Certificate Security for Optimal Site Protection</p>
            </div>
        </div>
        <div class="compare-our-plans-container">
            <p>Compare our plan</p>
        </div>
        <form action="security.php" class="email-billing-container" method="POST">
            <div class="hosting-plan-payment-method-container">
                <div class="hosting-plan-method-content">
                    <div class="hosting-plan-option">
                        1 year
                    </div>
                    <div class="hosting-plan-option">
                        2 years
                    </div>
                    <div class="hosting-plan-option">
                        3 years
                    </div>
                </div>
            </div>
            <div class="hosting-content active">
                <div class="hosting-card">
                    <div class="hosting-card-header">
                        <h3>PositiveSSL</h3>
                    </div>
                    <div class="hosting-cost">
                        <p><img src="assets/imgs/dollar-symbol.png" alt="">10.50/year</p>
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
                        <h3>EssentialSSL</h3>
                    </div>
                    <div class="hosting-cost">
                        <p><img src="assets/imgs/dollar-symbol.png" alt="">24.00/year</p>
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
                        <h3>InstantSSL</h3>
                    </div>
                    <div class="hosting-cost">
                        <p><img src="assets/imgs/dollar-symbol.png" alt="">35.00/year</p>
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
        <div class="ssl-explanation">
            <div class="ssl-explanation-container">
                <div class="ssl-explanation-header">
                    <h2>What is an SSL?</h2>
                </div>
                <div class="ssl-explanation-container-content">
                    <p>An SSL certificate functions as external validation for a website's security measures. It confirms the effectiveness of the Secure Socket Layer encryption employed during user interactions with the site and associates this encryption
                        with the entity responsible for the website's operation and upkeep. SSL certification and validation represent essential components of web security, especially for businesses engaged in user data collection.</p>
                    <p>Various SSL certificates offer varying degrees of security, tailored to the specific protection and security requirements of your website and its users. While you might recognize visual indicators like Site Seals and the presence of
                        "HTTPS://" in the URL, there are also concealed functionalities that play a role in safeguarding both your website and its visitors.</p>
                    <p>No matter what level of security you choose, your users will recognize that your site is safe, and that leads to greater trust in your brand online.</p>
                </div>
            </div>
        </div>
        <div class="ssl-explanation">
            <div class="ssl-explanation-container">
                <div class="ssl-explanation-header">
                    <h2>What Comes with an SSL?</h2>
                </div>
                <div class="ssl-explanation-container-content">
                    <h3>SSL Site Seal</h3>
                    <p>The site seal serves as a visual representation of the security assurance offered by your website's SSL certificate. Its significance is so pronounced that it has become a primary motivation for numerous website owners and administrators
                        to acquire an SSL certificate, given that a vast majority of web users recognize its presence. The appearance of these seals may differ based on the specific type of SSL certificate issued, yet they universally convey the same
                        message: your users' data is safeguarded.</p>
                </div>
                <div class="ssl-explanation-container-content">
                    <h3>Top-Tier Support</h3>
                    <p>Ossilhost has gained a reputation for delivering exceptional customer service, attributed to our outstanding support team. The professionals at Ossilhost support stand out as among the most courteous and informative individuals in
                        the industry, possessing an extensive understanding of each product and service we provide. With their around-the-clock availability, you can have peace of mind knowing that they are ready to address your inquiries and provide
                        guidance concerning your SSL certificate acquisition.</p>
                </div>
                <div class="ssl-explanation-container-content">
                    <h3>Browser Ubiquity</h3>
                    <p>Ossilhost's specialists have carefully curated our range of SSL certificates to guarantee extensive compatibility with widely-used browsers. Our certificates are endorsed by all major browsers, ensuring that no matter which browser
                        you choose, Ossilhost's SSL verification will be acknowledged, thus ensuring a seamless browsing experience. This eliminates any uncertainty for your users about the authenticity of the certificate issuer or the assurance of protection.</p>
                </div>
                <div class="ssl-explanation-container-content">
                    <h3>Encryption Level</h3>
                    <p>The extent of security offered by an SSL certificate hinges on the bit count utilized to formulate the encryption key, which subsequently plays a role in encrypting the data. In our array of SSL certificates, the encryption predominantly
                        employs either 256-bit or 128-bit encryption, contingent upon the capacities of both the web browser and server. Both 256-bit and 128-bit encryption stand as industry standards for ensuring data security.</p>
                </div>
            </div>
        </div>
    </section>
    <!--Security Ends-->
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
    <script src="assets/js/security.js"></script>
    <script src="assets/js/plan.js"></script>
    <script src="chatbox.js"></script>
</body>

</html>