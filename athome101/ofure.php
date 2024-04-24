<?php

session_start();

include 'assets/php/config.php';

$firstname = $lastname = $email = $phone = $password1 = $password2 = '';
$error = array('firstname' => '', 'lastname' => '', 'email' => '', 'phone' => '', 'password1' => '', 'password2' => '');


if (isset($_POST['submit'])) {
    if (empty($_POST['firstname'])) {
        $error['firstname'] = "Field required";
    } else {
        $firstname = $_POST['firstname'];
    }

    if (empty($_POST['lastname'])) {
        $error['lastname'] = "Field required";
    } else {
        $lastname = $_POST['lastname'];
    }

    if (empty(trim($_POST['email']))) {
        $error['email'] = "Field required";
    } else {
        $email = $_POST['email'];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error['email'] = 'Invalid email address';
        }
    }

    if (empty(trim($_POST['phone']))) {
        $error['phone'] = 'Field required';
    } else {
        $phone = $_POST['phone'];

        if (!preg_match('/^[0-9]{11}$/', $phone)) {
            $error['phone'] = 'Invalid phone number';
        }
    }

    if (empty(trim($_POST['password1']))) {
        $error['password1'] = 'Field required';
    } else {
        $password1 = $_POST['password1'];

        if (!preg_match('/^[0-9||a-zA-Z||!@#$%^&*()]{8,}$/', $password1)) {
            $error['password1'] = 'Atleast 8 characters required';
        } else {
            if (!preg_match('/(?=.*[A-Z])/', $password1)) {
                $error['password1'] = 'Password must contain an uppercase';
            } else {
                if (!preg_match('/(?=.*[a-z])/', $password1)) {
                    $error['password1'] = 'Password must contain a lowercase';
                } else {
                    if (!preg_match('/(?=.*[0-9])/', $password1)) {
                        $error['password1'] = 'Password must contain a digit';
                    } else {
                        if (!preg_match('/(?=.*[!@#$%^&*()])/', $password1)) {
                            $error['password1'] = 'Password must contain one of !@#$%^&*()';
                        }
                    }
                }
            }
        }
    }

    if (empty(trim($_POST['password2']))) {
        $error['password2'] = 'Field required';
    } else {
        $password2 = $_POST['password2'];

        if ($password2 != $password1) {
            $error['password2'] = 'Passwords do not match';
        }
    }

    if (!array_filter($error)) {
        $firstname = mysqli_real_escape_string($conn, $firstname);
        $lastname = mysqli_real_escape_string($conn, $lastname);
        $email = mysqli_real_escape_string($conn, $email);
        $phone = mysqli_real_escape_string($conn, $phone);
        $password = mysqli_real_escape_string($conn, $password);
        $status = 'admin';
        $address = '';
        $code = '';
        $balance = '';
        $user_id = '';
        $ip = '';

        $sql = "INSERT INTO `user`(`user_id`, `firstname`, `lastname`, `email`, `password`, `code`, `balance`,
                `status`, `ip`, `address`, `phone`) VALUES ('$user_id','$firstname','$lastname','$email',
                '$password','$code','$balance','$status','$ip','$address','$phone')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $user = "SELECT * FROM user WHERE email = '$email' AND status = 'admin'";
            $user_result = mysqli_query($conn, $user);

            if ($user_result) {
                $user_rows = mysqli_fetch_assoc($user_result);

                $user_id = rand(100000, 999999) . $user_rows['id'];
                $id = $user_rows['id'];

                $update = "UPDATE `user` SET `id`='$id',`user_id`='$user_id',`firstname`='$firstname',
                            `lastname`='$lastname',`email`='$email',`password`='$password',`code`='$code',
                            `balance`='$balance',`status`='$status',`ip`='$ip',`address`='$address',
                            `phone`='$phone' WHERE id = '$id'";
                $update_result = mysqli_query($conn, $update);

                if ($update_result) {
                    $_SESSION['id'] = $user_id;
                    header('location: homepage.php');
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
    <title>Sign Up</title>
    <link rel="stylesheet" href="assets/css/ofure.css">
    <link rel="shortcut icon" href="assets/imgs/ossil.png" type="image/x-icon">
</head>

<body>
    <section id="signup">
        <div class="signup">
            <form action="ofure.php" method="POST" class="signup-form">
                <header class="signup-header">
                    <h2>Sign Up</h2>
                </header>
                <div class="form-content">
                    <div class="details">
                        <label>First Name:</label>
                        <input title="firstname" name="firstname" value="<?php echo htmlspecialchars($firstname); ?>" type="text">
                        <div class="error"><?php echo $error['firstname'] ?? '' ?></div>
                    </div>
                    <div class="details">
                        <label>Last Name:</label>
                        <input title="lastname" name="lastname" value="<?php echo htmlspecialchars($lastname); ?>" type="text">
                        <div class="error"><?php echo $error['lastname'] ?? '' ?></div>
                    </div>
                    <div class="details">
                        <label>Email:</label>
                        <input title="email" name="email" value="<?php echo htmlspecialchars($email); ?>" type="text">
                        <div class="error"><?php echo $error['email'] ?? '' ?></div>
                    </div>
                    <div class="details">
                        <label>Phone No.:</label>
                        <input title="phone" name="phone" value="<?php echo htmlspecialchars($phone); ?>" type="text">
                        <div class="error"><?php echo $error['phone'] ?? '' ?></div>
                    </div>
                    <div class="details">
                        <label>Password:</label>
                        <input title="password1" name="password1" value="<?php echo htmlspecialchars($password1); ?>" type="password">
                        <div class="error"><?php echo $error['password1'] ?? '' ?></div>
                    </div>
                    <div class="details">
                        <label>Confirm Password:</label>
                        <input title="password2" name="password2" value="<?php echo htmlspecialchars($password2); ?>" type="password">
                        <div class="error"><?php echo $error['password2'] ?? '' ?></div>
                    </div>
                </div>
                <div class="signup-btn-container">
                    <input type="submit" name="submit" class="submit-btn" value="Sign Up">
                </div>
            </form>
        </div>
    </section>
</body>

</html>