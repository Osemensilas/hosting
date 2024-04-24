<?php

include 'assets/php/client.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domain Transfer</title>
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/domain_transfer.css">
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
    <!--Domain Transfer Begins-->
    <section id="domain-transfer">
        <div class="domain-transfer">
            <form action="#" class="domain-transfer-content">
                <h2>Simplify the process of transferring your domain.</h2>
                <p>Maximize the benefits of your move while spending less.</p>
                <input type="text" class="domain-name-input" placeholder="Enter your domain name">
                <div class="error"></div>
                <div class="submit-btn-container">
                    <input type="submit" class="submit-btn" value="Search">
                </div>
            </form>
            <div class="domain-price-container">
                <div class="domain-prices">
                    <p>.com @ $ 14</p>
                    <p>.com.ng @ $ 1.8</p>
                    <p>.ng @ $ 13</p>
                    <p>.net @ $ 16</p>
                    <p>.org @ $ 15</p>
                    <p>.xyz @ $ 14.99</p>
                </div>
            </div>
        </div>
    </section>
    <!--Domain Transfer Ends-->
    <!--Why Us Begins-->
    <section id="why-us">
        <div class="why-us">
            <div class="why-us-container">
                <div class="image-container">
                    <img src="assets/imgs/schedule.png" alt="">
                </div>
                <div class="why-header">
                    <h3>There is no Loss of Time</h3>
                </div>
                <div class="why-content">
                    <p>The remaining time will be included in your 1-year renewal period.</p>
                </div>
            </div>
            <div class="why-us-container">
                <div class="image-container">
                    <img src="assets/imgs/online-education.png" alt="">
                </div>
                <div class="why-header">
                    <h3>Remain connected online</h3>
                </div>
                <div class="why-content">
                    <p>During the site transfer, you will encounter no downtime.</p>
                </div>
            </div>
            <div class="why-us-container">
                <div class="image-container">
                    <img src="assets/imgs/privacy.png" alt="">
                </div>
                <div class="why-header">
                    <h3>Enjoy lifelong privacy protection</h3>
                </div>
                <div class="why-content">
                    <p>Experience perpetual free domain privacy protection.</p>
                </div>
            </div>
        </div>
    </section>
    <!--Why Us Ends-->
    <!--How to Bgins-->
    <section id="how-to">
        <div class="how-to">
            <div class="how-header">
                <h2>How to Transfer to Us</h2>
            </div>
            <div class="how-pre-talk-container">
                <div class="how-pre-talk">
                    <p>Before initiating the domain transfer process, your domain name must be registered with your current provider for a minimum of 60 days.</p>
                </div>
            </div>
            <div class="how-content-container">
                <div class="how-card">
                    <div class="how-card-top">
                        <h2>STEP 1</h2>
                    </div>
                    <div class="how-card-header">
                        <h3>Disable Registrar Lock</h3>
                    </div>
                    <div class="how-card-detail">
                        <p>In case your domain is currently locked, you must unlock it at your current registrar. Additionally, the status of your domain name in the WHOIS database should be listed as "OK." If needed, you can request your domain provider
                            to unlock it for you.</p>
                    </div>
                </div>
                <div class="how-card">
                    <div class="how-card-top">
                        <h2>STEP 2</h2>
                    </div>
                    <div class="how-card-header">
                        <h3>Disable Privacy Protection</h3>
                    </div>
                    <div class="how-card-detail">
                        <p>Before initiating the domain transfer, ensure that any privacy protection or WHOIS protection on your domain is disabled. The transfer details will be sent to the administrative contact listed in the WHOIS information, so it's
                            crucial to have accurate and up-to-date contact details. If ID protection is enabled, the transfer might fail, so make sure it's disabled. You can contact your current provider to assist you in disabling these protections if
                            necessary.
                        </p>
                    </div>
                </div>
                <div class="how-card">
                    <div class="how-card-top">
                        <h2>STEP 3</h2>
                    </div>
                    <div class="how-card-header">
                        <h3>EPP/Auth. Code</h3>
                    </div>
                    <div class="how-card-detail">
                        <p>In order to transfer your domain to a new registrar, you will require an EPP code (also known as Authorization code or domain transfer secret code). To obtain this code, you can reach out to your current domain registrar and request
                            your domain's EPP/Auth code.</p>
                    </div>
                </div>
                <div class="how-card">
                    <div class="how-card-top">
                        <h2>STEP 4</h2>
                    </div>
                    <div class="how-card-header">
                        <h3>Place a Domain Transfer order</h3>
                    </div>
                    <div class="how-card-detail">
                        <p>To initiate the domain transfer process, simply visit our Domain Transfer Page and place an order. There, you'll be asked to provide your domain name and the Auth/EPP code given to you by your current registrar. Once the order
                            is confirmed, the domain transfer process will begin.</p>
                    </div>
                </div>
                <div class="how-card">
                    <div class="how-card-top">
                        <h2>STEP 5</h2>
                    </div>
                    <div class="how-card-header">
                        <h3>Approve the transfer request</h3>
                    </div>
                    <div class="how-card-detail">
                        <p>An email containing the domain transfer approval request will now be sent to the email address listed in your domain administrator contact information. To proceed with the domain transfer, you must click on the link provided in
                            that email and approve the request.
                        </p>
                    </div>
                </div>
                <div class="how-card">
                    <div class="how-card-top">
                        <h2>STEP 6</h2>
                    </div>
                    <div class="how-card-header">
                        <h3>Wait for transfer to complete</h3>
                    </div>
                    <div class="how-card-detail">
                        <p>Once you have approved the domain transfer request, your domain will be transferred to us within 5-7 days. If you wish to expedite the process, you can contact your current registrar and request them to approve your domain transfer
                            request.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--How to Ends-->
    <!--Domain Price Begins-->
    <section id="domain-price">
        <div class="domain-price-header">
            <h2>Check Our Prices Below</h2>
        </div>
        <div class="domain-price">
            <table class="price-table">
                <tr>
                    <th>Domain</th>
                    <th>Registration Price/Year</th>
                    <th>Renewal Price/Year</th>
                    <th>Transfer Price/Year</th>
                </tr>
                <tr>
                    <td>.com</td>
                    <td>$14</td>
                    <td>$14</td>
                    <td>$12</td>
                </tr>
                <tr>
                    <td>.com.ng</td>
                    <td>$1.8</td>
                    <td>$1.8</td>
                    <td>$1.2</td>
                </tr>
                <tr>
                    <td>.ng</td>
                    <td>$13</td>
                    <td>$13</td>
                    <td>$11.5</td>
                </tr>
                <tr>
                    <td>.org</td>
                    <td>$15</td>
                    <td>$15</td>
                    <td>$13.47</td>
                </tr>
                <tr>
                    <td>.net</td>
                    <td>$16</td>
                    <td>$16</td>
                    <td>$14</td>
                </tr>
                <tr>
                    <td>.info</td>
                    <td>$9</td>
                    <td>$9</td>
                    <td>$7.12</td>
                </tr>
                <tr>
                    <td>.africa</td>
                    <td>$15</td>
                    <td>$15</td>
                    <td>$14.99</td>
                </tr>
            </table>
        </div>
    </section>
    <!--Domain Price End-->
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
    <script src="assets/js/domain_transfer.js"></script>
    <script src="chatbox.js"></script>
</body>

</html>