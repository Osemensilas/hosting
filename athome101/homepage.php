<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin HomePage</title>
    <link rel="stylesheet" href="assets/css/homepage.css">
    <link rel="shortcut icon" href="assets/imgs/ossil.png" type="image/x-icon">
</head>

<body>
    <!--Header Begins-->
    <?php
    include 'header.php';
    ?>
    <!--Header Ends-->
    <!--Homepage Begins-->
    <section id="homepage">
        <div class="homepage">
            <div class="hompage-left">
                <div class="homepage-left-anchor">
                    <a href="homepage.php" class="homepage-anchor">Subscribers</a>
                    <a href="registered.php" class="homepage-anchor">Registered</a>
                    <a href="visitors.php" class="homepage-anchor">Visitors</a>
                    <a href="message.php" class="homepage-anchor">Message Visitors</a>
                </div>
            </div>
            <div class="homepage-right">
                <div class="homepage-right-header">
                    <h2>Subscribers</h2>
                </div>
                <div class="homepage-right-content-top">
                    <p>30 Subscribers</p>
                </div>
                <div class="hompage-right-content">
                    <div class="subscriber-container">
                        <a href="subscribee.php" class="subscriber">
                            <div class="subcriber-left">
                                Name: Osemen Silas
                            </div>
                            <div class="subscriber-right paid">
                                Paid
                            </div>
                        </a>
                        <a href="subscribee.php" class="subscriber">
                            <div class="subcriber-left">
                                Name: Osemen Silas
                            </div>
                            <div class="subscriber-right not-paid">
                                Not Paid
                            </div>
                        </a>
                        <a href="#" class="subscriber">
                            <div class="subcriber-left">
                                Name: Osemen Silas
                            </div>
                            <div class="subscriber-right not-paid">
                                Not Paid
                            </div>
                        </a>
                        <a href="#" class="subscriber">
                            <div class="subcriber-left">
                                Name: Osemen Silas
                            </div>
                            <div class="subscriber-right not-paid">
                                Not Paid
                            </div>
                        </a>
                        <a href="#" class="subscriber">
                            <div class="subcriber-left">
                                Name: Osemen Silas
                            </div>
                            <div class="subscriber-right not-paid">
                                Not Paid
                            </div>
                        </a>
                        <a href="#" class="subscriber">
                            <div class="subcriber-left">
                                Name: Osemen Silas
                            </div>
                            <div class="subscriber-right not-paid">
                                Not Paid
                            </div>
                        </a>
                        <a href="#" class="subscriber">
                            <div class="subcriber-left">
                                Name: Osemen Silas
                            </div>
                            <div class="subscriber-right not-paid">
                                Not Paid
                            </div>
                        </a>
                        <a href="#" class="subscriber">
                            <div class="subcriber-left">
                                Name: Osemen Silas
                            </div>
                            <div class="subscriber-right not-paid">
                                Not Paid
                            </div>
                        </a>
                        <a href="#" class="subscriber">
                            <div class="subcriber-left">
                                Name: Osemen Silas
                            </div>
                            <div class="subscriber-right not-paid">
                                Not Paid
                            </div>
                        </a>
                        <a href="#" class="subscriber">
                            <div class="subcriber-left">
                                Name: Osemen Silas
                            </div>
                            <div class="subscriber-right not-paid">
                                Not Paid
                            </div>
                        </a>
                        <a href="#" class="subscriber">
                            <div class="subcriber-left">
                                Name: Osemen Silas
                            </div>
                            <div class="subscriber-right paid">
                                Paid
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Homepage Ends-->
</body>

</html>