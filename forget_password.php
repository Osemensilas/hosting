<?php

include 'assets/php/config.php';

$email = '';
$password = '';
$active = '';

if (isset($_POST['submit'])) {
    if (empty(trim($_POST['email']))) {
        $error = "Field required";
        $active = 'active';
    } else {
        $email = $_POST['email'];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = 'Invalid email address';
            $active = 'active';
        } else {
            $getUser = "SELECT * FROM user WHERE email = '$email'";
            $getResult = mysqli_query($conn, $getUser);

            if (!mysqli_num_rows($getResult) > 0) {
                $error = "User do not exist";
                $active = 'active';
            } else {
                $subject = "Password Reset Code";
                $message = 'Your password reset code is' . ' ' . rand(100000, 999999);
                if (!mail($email, $subject, $message)) {
                    $error = 'Message not sent. Check your internet connection';
                    $active = 'active';
                } else {
                    header('reset_password.php');
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
    <title>Forget Password - OssilHost</title>
    <link rel="stylesheet" href="assets/css/forget.css">
    <link rel="shortcut icon" href="assets/imgs/ossil.png" type="image/x-icon">
</head>

<body>
    <section id="forget">
        <form action="forget_password.php" class="forget-pass-form" method="POST">
            <header class="form-header">
                <h2>Forget Password</h2>
            </header>
            <div class="form-content">
                <label for="email">Email Address:</label>
                <input type="text" class="detail" value="<?php echo htmlspecialchars($email); ?>" name="email" id="email" placeholder="Enter your email address here!">
                <div class="error <?php echo $active; ?>"><?php echo $error; ?></div>
            </div>
            <div class="submit-btn-container">
                <input type="submit" name="submit" class="submit-btn" value="submit">
            </div>
        </form>
    </section>
</body>

</html>