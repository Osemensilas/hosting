<?php

session_start();

include 'assets/php/config.php';

$email = $password = '';
$error = '';
$error_present = '';

if (isset($_POST['submit'])) {
    if (empty(trim($_POST['email']))) {
        $error_present = 'active';
        $error = 'Email required';
    } else {
        $email = $_POST['email'];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error_present = 'active';
            $error = 'Invalid Email Address';
        } else {
            if (empty(trim($_POST['password']))) {
                $error_present = 'active';
                $error = 'Password required';
            } else {
                $password = $_POST['password'];

                $user = "SELECT * FROM user WHERE email = '$email' AND status = 'client'";
                $result = mysqli_query($conn, $user);

                if (!mysqli_num_rows($result) > 0) {
                    $error_present = 'active';
                    $error = 'Email does not exist';
                } else {
                    $rows = mysqli_fetch_assoc($result);

                    if ($password != $rows['password']) {
                        $error_present = 'active';
                        $error = 'Incorrect Password';
                    } else {
                        $_SESSION['id'] = $rows['user_id'];
                        header('location: index.php');
                    }
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
    <title>Sign In - OssilHost</title>
    <link rel="stylesheet" href="assets/css/signin.css">
    <link rel="shortcut icon" href="assets/imgs/ossil.png" type="image/x-icon">
</head>

<body>
    <section id="sign-in">
        <form action="signin.php" class="sign-in-form" method="POST">
            <header class="from-header">
                <h2>Sign In</h2>
            </header>
            <div class="error <?php echo $error_present; ?>"><?php echo $error; ?></div>
            <div class="form-content">
                <div class="details">
                    <label for="email">Email Address:</label>
                    <input type="text" class="detail" value="<?php echo htmlspecialchars($email); ?>" name="email" id="email" placeholder="Enter your email address here">
                </div>
                <div class="details">
                    <label for="password">Password:</label>
                    <input type="password" class="detail" value="<?php echo htmlspecialchars($password); ?>" name="password" id="password" placeholder="Enter your password here">
                    <img src="assets/imgs/hidden.png" class="eye-close" alt="">
                    <img src="assets/imgs/eye.png" class="eye-open" alt="">
                </div>
            </div>
            <div class="dont">
                Don't have an account?<a href="signup.php"> Sign Up</a>
            </div>
            <div class="submit-btn-container">
                <input type="submit" name="submit" class="submit-btn" value="Sign In">
            </div>
            <div class="forget">
                <a href="forget_password.php">Forget Password?</a>
            </div>
        </form>
    </section>

    <script src="assets/js/signin.js"></script>
</body>

</html>