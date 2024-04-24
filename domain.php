<?php

include 'assets/php/client.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/domain.css">
    <link rel="icon" href="assets/imgs/ossil.png">
    <link rel="stylesheet" href="assets/css/footer.css">
</head>

<body>
    <!--Header Begins-->
    <?php

    include 'header.php';

    ?>
    <!--Header Ends-->
    <!--Domain Begins-->
    <section id="domain">
        <div class="domain">
            <div class="domain-header">
                <h2>Register Your Domain Name</h2>
            </div>
            <div class="domain-talk">
                <p>Your domain need to be registered with the best domain name registrar. Register your domain with us at an affordable price.</p>
            </div>
        </div>
        <form action="#" class="home-form">
            <div class="domain-content">
                <input type="text" class="domain-search" placeholder="Search for a domain name">
                <div class="error"></div>
                <div class="domain-submit-btn-container">
                    <input type="submit" class="domain-submit" value="Search">
                </div>
                <div class="domain-prices">
                    <p>.com @ $ 14</p>
                    <p>.com.ng @ $ 1.8</p>
                    <p>.ng @ $ 13</p>
                    <p>.net @ $ 16</p>
                    <p>.org @ $ 15</p>
                    <p>.xyz @ $ 14.99</p>
                </div>
            </div>
        </form>
        <div class="domain-transfer-container">
            <a href="domain_transfer.html" class="domain-transfer">Transfer Domain</a>
        </div>
    </section>
    <!--Domains Ends-->
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
    <script src="assets/js/domain.js"></script>
    <script src="chatbox.js"></script>
</body>

</html>