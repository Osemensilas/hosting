<?php

include 'assets/php/client.php';

$email = $message = '';
$error = array('email' => '', 'message' => '');
$decision = '';

if (isset($_SESSION['id'])) {
    $email = $client['email'];

    if (isset($_POST['submit'])) {
        if (empty(trim($_POST['email']))) {
            $error['email'] = 'Field required';
        } else {
            $email = $_POST['email'];

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error['email'] = "Invalid email address";
            }
        }

        if (empty(trim($_POST['message']))) {
            $error['message'] = "Field required";
        }

        if (!array_filter($error)) {
            $email = mysqli_real_escape_string($conn, $email);
            $message = mysqli_real_escape_string($conn, $message);
            $reciever = 'osemensilas@gmail.com';
            $subject = 'Message from Client';

            if (!mail($reciever, $subject, $message, $email)) {
                $error['message'] = "Message not sent. Check network connection.";
            } else {
                $decision = 'active';
            }
        }
    } else {
        if (isset($_POST['submit'])) {
            if (empty(trim($_POST['email']))) {
                $error['email'] = 'Field required';
            } else {
                $email = $_POST['email'];

                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $error['email'] = "Invalid email address";
                }
            }

            if (empty(trim($_POST['message']))) {
                $error['message'] = "Field required";
            }

            if (!array_filter($error)) {
                $email = 'Sender: ' . mysqli_real_escape_string($conn, $email);
                $message = mysqli_real_escape_string($conn, $message);
                $reciever = 'osemensilas@gmail.com';
                $subject = 'Message from visitor';

                if (!mail($reciever, $subject, $message, $email)) {
                    $error['message'] = "Message not sent. Check network connection.";
                } else {
                    $decision = 'active';
                }
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - OssilHost</title>
    <link rel="stylesheet" href="assets/css/general.css">
    <link rel="shortcut icon" href="assets/imgs/ossil.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/decision.css">
</head>

<body>
    <!--Header Begins-->
    <?php

    include 'header.php';

    ?>
    <!--Header Ends-->
    <!--Contact Us Begins-->
    <section id="contact-us">
        <div class="contact-us">
            <div class="contact-us-right">
                <div class="contact-right-header">
                    <h2>Contact Us</h2>
                </div>
                <ul class="conact-us-right-content">
                    <li>Address:</li>
                    <li> No. 10 Lord Shepherd Street Dutse Bupma, Dutse, FCT Abuja.</li>
                    <li>Phone No.:</li>
                    <li> +2349 0540 60454</li>
                    <li>Email Address:</li>
                    <li> contactus@ossilhost.com</li>
                </ul>
            </div>
            <div class="contact-us-left">
                <form action="contact.php" class="contact-form" method="POST">
                    <div class="form-header">
                        <h3>Send Us Mail</h3>
                    </div>
                    <div class="form-content">
                        <div class="details">
                            <label for="email">Email:</label>
                            <input name="email" value="<?php echo htmlspecialchars($email); ?>" type="text" id="email" placeholder="Enter your email address">
                            <div class="error"><?php echo $error['email']; ?></div>
                        </div>
                        <div class="details">
                            <label for="message">Message</label>
                            <textarea name="message" value="<?php echo htmlspecialchars($message); ?>" id="message" placeholder="Type your message..."></textarea>
                            <div class="error"><?php echo $error['message']; ?></div>
                        </div>
                    </div>
                    <div class="submit-btn-container">
                        <input type="submit" name="submit" class="submit-btn" value="submit">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--Contact Us Ends-->
    <!--Decision Begins-->
    <div id="decisions" class="<?php echo $decision; ?>">
        <div class="decisions">
            <div class="decision-container">
                <p>Your message has been sent successfully.</p>
                <div class="decision-links">
                    <a href="index.php">Home Page</a>
                    <a href="contact.php">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!--Decision Ends-->
    <!--Footer Begins-->
    <?php
    include 'footer.php';
    ?>
    <!--Footer Ends-->
</body>

</html>