<?php

include 'assets/php/client.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page - OssilHost</title>
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/user.css">
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
    <!--User Begins-->
    <section id="user-profile">
        <div class="user-profile">
            <div class="user-profile-header">
                <h2>Perosonal Info</h2>
            </div>
            <div class="user-profile-inromation">
                <div class="user-profile-information-left">
                    <img src="assets/imgs/user.png" alt="">
                </div>
                <div class="user-profile-information-right">
                    <div class="info-details">
                        <p>Name</p>
                        <p><?php echo $client['firstname'] . ' ' . $client['lastname'] ?></p>
                    </div>
                    <div class="info-details">
                        <p>Username</p>
                        <p><?php echo $client['firstname'] . $client['lastname'] ?></p>
                    </div>
                    <div class="info-details">
                        <p>Primary Email</p>
                        <div class="info-edit-container email-container">
                            <p><?php echo $client['email'] ?></p>
                            <p class="edit-info edit-user">EDIT</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="user-profile-inromation">
                <div class="user-profile-information-left">
                    <img src="assets/imgs/address (1).png" alt="">
                </div>
                <div class="user-profile-information-right">
                    <div class="info-details">
                        <p>Primary Address</p>
                        <div class="info-edit-container">
                            <p><?php echo $client['address'] ?></p>
                            <p>tel: <?php echo $client['phone'] ?></p>
                            <p class="edit-info" onclick="window.location='update_address.php?detail=hello'">EDIT</p>
                        </div>
                    </div>
                    <div class="info-details all-info-details">
                        <p>All Addresses</p>
                        <?php

                        $address = "SELECT * FROM address WHERE user_id = '{$_SESSION['id']}' AND prim = 'secondary'";
                        $address_result = mysqli_query($conn, $address);
                        $content = '';

                        if (mysqli_num_rows($address_result) > 0) {
                            while ($address_rows = mysqli_fetch_assoc($address_result)) {
                                $web_address = 'remove_address';
                                $content .= '
                                <div class="info-edit-container">
                                    <p>' . $address_rows['address1'] . '</p>
                                    <p>tel: ' . $address_rows['phone'] . '</p>
                                    <a class="edit-info" href="remove_address.php?address=' . $address_rows['id'] . '">Remove</a>
                                </div>
                                ';
                            }
                        }
                        ?>
                        <?php echo $content; ?>
                    </div>
                    <div class="info-details">
                        <div class="info-edit-container">
                            <p>1 Address</p>
                            <p class="edit-info" onclick="window.location='update_address.php'">Add New</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="auth-code-container">
            <form action="#" class="auth-code-inner-container">
                <div class="auth-code-container-header">
                    <h2>Edit Primary Email</h2>
                    <div class="auth-code-header-cancel">
                        <div class="cancellation"></div>
                    </div>
                </div>
                <div class="auth-code-container-top">
                    <p>We utilize your email address to communicate with you about your Namecheap orders, transactions, and important account-related information. Rest assured, we pledge not to send spam, and we will never share your email address with any
                        third parties.</p>
                </div>
                <div class="auth-code-container-middle">
                    <div class="auth-code-middle-left">
                        <p>Current Email Address</p>
                    </div>
                    <div class="auth-code-middle-right">
                        <p><?php echo $client['email'] ?></p>
                    </div>
                </div>
                <div class="auth-container-bottom">
                    <div class="detail">
                        <label for="email1">New Email*</label>
                        <input type="text" name="update_mail" class="new-input" id="email1" placeholder="Enter your new email address">
                        <div class="error email_error"></div>
                    </div>
                    <div class="detail">
                        <label for="pass">Ossilhost Password*</label>
                        <input type="password" name="update_password" class="new-input" id="pass" placeholder="Enter your ossilhost password">
                        <div class="error password_error"></div>
                    </div>
                </div>
                <div class="auth-code-submit-btn-container">
                    <input type="submit" class="auth-submit-btn" value="Change Email">
                    <p>Cancel</p>
                </div>
            </form>
        </div>
    </section>
    <!--User Ends-->
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
    <script src="chatbox.js"></script>
    <script src="user.js"></script>
</body>

</html>