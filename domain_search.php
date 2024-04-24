<?php

include 'assets/php/client.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domain Name Search</title>
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/domain_search.css">
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
    <!--Domain Search Begins-->
    <section id="domain-search">
        <div class="domain-search">
            <div class="domain-serch-header">
                <a href="#">Get a .FANS account for just $4.67 - that is 41% off! Don't miss out.</a>
            </div>
        </div>
        <div class="domain-searh-container">
            <div class="domain-search-container-header">
                <h2>Explore an extensive range of domain options</h2>
            </div>
            <div class="domain-search-conteiner-content">
                <input type="text" class="domain-search-input" placeholder="Discover new domain names at a lower cost.">
                <input type="submit" class="search-btn" value="Search">
            </div>
            <p>Is your domain name with a different registrar?<br><a href="domain_transfer.html">Tranfer to Us</a></p>
        </div>
    </section>
    <!--Doamin Search Ends-->
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
    <script src="assets/js/domain_search.js"></script>
    <script src="chatbox.js"></script>
</body>

</html>

</html>