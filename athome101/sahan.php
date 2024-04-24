<?php

session_start();

include 'assets/php/config.php';

$email = $password = '';
$error = array('email' => '', 'password' => '');
$error_present = '';

if (isset($_POST['submit'])) {
    if (empty(trim($_POST['email']))) {
        $error_present = 'active';
        $error['email'] = 'Email required';
    } else {
        $email = $_POST['email'];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error_present = 'active';
            $error['email'] = 'Invalid Email Address';
        } else {
            if (empty(trim($_POST['password']))) {
                $error_present = 'active';
                $error['password'] = 'Password required';
            } else {
                $password = $_POST['password'];

                $user = "SELECT * FROM user WHERE email = '$email' AND status = 'admin'";
                $result = mysqli_query($conn, $user);

                if (!mysqli_num_rows($result) > 0) {
                    $error_present = 'active';
                    $error['email'] = 'Email does not exist';
                } else {
                    $rows = mysqli_fetch_assoc($result);

                    if ($password != $rows['password']) {
                        $error_present = 'active';
                        $error['password'] = 'Incorrect Password';
                    } else {
                        $_SESSION['id'] = $rows['user_id'];
                        header('location: homepage.php');
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="assets/css/sahan.css">
    <link rel="shortcut icon" href="../imgs/ossil.png" type="image/x-icon">
</head>

<body>
    <section id="signin">
        <div class="signin">
            <form action="sahan.php" class="signin-form" method="POST">
                <header class="signin-header">
                    <h2>Sign In</h2>
                </header>
                <div class="form-content">
                    <div class="details">
                        <label>Email:</label>
                        <input type="text" value="<?php echo htmlspecialchars($email); ?>" name="email" placeholder="Enter your email address">
                        <div class="error"><?php echo $error['email']; ?></div>
                    </div>
                    <div class="details">
                        <label>Password:</label>
                        <input type="password" value="<?php echo htmlspecialchars($password); ?>" name="password" placeholder="Enter your email address">
                        <div class="error"><?php echo $error['password']; ?></div>
                    </div>
                    <div class="dont">
                        Don't have an account? <a href="signup.php">Sign Up</a>
                    </div>
                </div>
                <div class="signin-btn-container">
                    <input type="submit" name="submit" class="submit-btn" value="Sign In">
                </div>
                <div class="forget">
                    <a href="forget.html">Forget password?</a>
                </div>
            </form>
        </div>
    </section>
</body>

</html>