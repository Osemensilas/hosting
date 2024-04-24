<?php

session_start();

include 'assets/php/config.php';

$code = $password1 = $password2 = '';
$error = array('code' => '', 'password1' => '', 'password2' => '');

if (isset($_POST['submit'])) {
    if (empty(trim($_POST['code']))) {
        $error['code'] = 'Field Required';
        $active = 'active';
    } else {
        $code = $_POST['code'];

        $sql = "SELECT * FROM user WHERE code = '$code'";
        $result = mysqli_query($conn, $sql);

        if (!mysqli_num_rows($result) > 0) {
            $error['code'] = 'Invalid Code';
            $active = 'active';
        }
    }

    if (empty(trim($_POST['password1']))) {
        $error['password1'] = 'Field required';
        $active = 'active';
    } else {
        $password1 = $_POST['password1'];

        if (!preg_match('/^[0-9||a-zA-Z||!@#$%^&*()]{8,}$/', $password1)) {
            $error['password1'] = 'Atleast 8 characters required';
            $active = 'active';
        } else {
            if (!preg_match('/(?=.*[A-Z])/', $password1)) {
                $error['password1'] = 'Password must contain an uppercase';
                $active = 'active';
            } else {
                if (!preg_match('/(?=.*[a-z])/', $password1)) {
                    $error['password1'] = 'Password must contain a lowercase';
                    $active = 'active';
                } else {
                    if (!preg_match('/(?=.*[0-9])/', $password1)) {
                        $error['password1'] = 'Password must contain a digit';
                        $active = 'active';
                    } else {
                        if (!preg_match('/(?=.*[!@#$%^&*()])/', $password1)) {
                            $error['password1'] = 'Password must contain one of !@#$%^&*()';
                            $active = 'active';
                        }
                    }
                }
            }
        }
    }

    if (empty(trim($_POST['password2']))) {
        $error['password2'] = 'Field required';
        $active = 'active';
    } else {
        $password2 = $_POST['password2'];

        if ($password2 != $password1) {
            $error['password2'] = 'Passwords do not match';
            $active = 'active';
        }
    }

    if (!array_filter($error)) {
        $user = "SELECT * FROM user WHERE code = '$code'";
        $user_result = mysqli_query($conn, $user);

        if (mysqli_num_rows($user_result) > 0) {
            $user_rows  = mysqli_fetch_assoc($user_result);

            $id = $user_rows['id'];
            $user_id = $user_rows['user_id'];
            $firstname = $user_rows['firstname'];
            $lastname = $user_rows['lastname'];
            $email = $user_rows['email'];
            $password = mysqli_real_escape_string($conn, $password1);
            $code = mysqli_real_escape_string($conn, $code);
            $balance = $user_rows['balance'];
            $status = $user_rows['status'];
            $ip = $user_rows['ip'];
            $address = $user_rows['address'];
            $phone = $user_rows['phone'];

            $update_user = "UPDATE `user` SET `id`='$id',`user_id`='$user_id',`firstname`='$firstname',
                        `lastname`='$lastname',`email`='$email',`password`='$password',`code`='$code',
                        `balance`='$balance',`status`='$status',`ip`='$ip',`address`='$address',`phone`='$phone'
                         WHERE code = '$code'";
            $update_user_result = mysqli_query($conn, $update_user);

            if ($update_user_result) {
                $_SESSION['id'] = $user_rows['user_id'];
                header('location: index.php');
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
    <title>Reset Password - OssilHost</title>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="shortcut icon" href="assets/imgs/ossil.png" type="image/x-icon">
</head>

<body>
    <section id="sign-up">
        <div class="sign-up-left">
            <form action="reset_password.php" class="sign-up-form" method="POST">
                <header class="from-header">
                    <h2>Reset Password</h2>
                </header>
                <div class="code-info">
                    A 6 digit code was sent to your mail.
                </div>
                <div class="form-content">
                    <div class="details">
                        <label for="email">Code:</label>
                        <input type="text" class="detail" value="<?php echo htmlspecialchars($code); ?>" name="code" id="email" placeholder="Enter the 6 digit code">
                        <div class="error"><?php echo $error['code']; ?></div>
                    </div>
                    <div class="details">
                        <label for="password">Password:</label>
                        <input type="password" class="detail" value="<?php echo htmlspecialchars($password1); ?>" name="password1" id="password1" placeholder="Enter your password here">
                        <div class="error"><?php echo $error['password1']; ?></div>
                    </div>
                    <div class="details">
                        <label for="password2">Confirm Password:</label>
                        <input type="password" class="detail" value="<?php echo htmlspecialchars($password2); ?>" name="password2" id="password2" placeholder="Enter your password here again">
                        <div class="error"><?php echo $error['password2']; ?></div>
                    </div>
                </div>
                <div class="dont">
                    Already have an account?<a href="signin.php"> Sign In</a>
                </div>
                <div class="submit-btn-container">
                    <input type="submit" name="submit" class="submit-btn" value="Sign Up">
                </div>
            </form>
        </div>
        <div class="sign-up-right">
            <div class="sign-up-right-container">
                <div class="password-validations">
                    <div class="validation-icon">
                        <img class="accept" src="assets/imgs/accept.png" alt="">
                        <img class="cross" src="assets/imgs/cross.png" alt="">
                        <img class="more" src="assets/imgs/more.png" alt="">
                    </div>
                    <div class="error-detail">Enter 6 digit code sent to your mail.</div>
                </div>
                <div class="password-validations">
                    <div class="validation-icon">
                        <img class="accept" src="assets/imgs/accept.png" alt="">
                        <img class="cross" src="assets/imgs/cross.png" alt="">
                        <img class="more" src="assets/imgs/more.png" alt="">
                    </div>
                    <div class="error-detail">Password must be at least 8 charcters.</div>
                </div>
                <div class="password-validations">
                    <div class="validation-icon">
                        <img class="accept" src="assets/imgs/accept.png" alt="">
                        <img class="cross" src="assets/imgs/cross.png" alt="">
                        <img class="more" src="assets/imgs/more.png" alt="">
                    </div>
                    <div class="error-detail">Password must contain at least one uppercase letter.</div>
                </div>
                <div class="password-validations">
                    <div class="validation-icon">
                        <img class="accept" src="assets/imgs/accept.png" alt="">
                        <img class="cross" src="assets/imgs/cross.png" alt="">
                        <img class="more" src="assets/imgs/more.png" alt="">
                    </div>
                    <div class="error-detail">Password must contain at least one lowercase letter.</div>
                </div>
                <div class="password-validations">
                    <div class="validation-icon">
                        <img class="accept" src="assets/imgs/accept.png" alt="">
                        <img class="cross" src="assets/imgs/cross.png" alt="">
                        <img class="more" src="assets/imgs/more.png" alt="">
                    </div>
                    <div class="error-detail">Password must contain at least one digit.</div>
                </div>
                <div class="password-validations">
                    <div class="validation-icon">
                        <img class="accept" src="assets/imgs/accept.png" alt="">
                        <img class="cross" src="assets/imgs/cross.png" alt="">
                        <img class="more" src="assets/imgs/more.png" alt="">
                    </div>
                    <div class="error-detail">Password must contain at least one of -+_!@#$%^&*., ?</div>
                </div>
                <div class="password-validations">
                    <div class="validation-icon">
                        <img class="accept" src="assets/imgs/accept.png" alt="">
                        <img class="cross" src="assets/imgs/cross.png" alt="">
                        <img class="more" src="assets/imgs/more.png" alt="">
                    </div>
                    <div class="error-detail">Passwords must match.</div>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/js/reset.js"></script>
</body>

</html>