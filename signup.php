<?php

session_start();

include 'assets/php/config.php';

include 'assets/php/ip.php';

include 'assets/php/signup.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - OssilHost</title>
    <link rel="stylesheet" href="assets/css/signup.css">
    <link rel="shortcut icon" href="assets/imgs/ossil.png" type="image/x-icon">
</head>

<body>
    <section id="sign-up">
        <div class="sign-up-left">
            <form action="signup.php" class="sign-up-form" method="POST">
                <header class="from-header">
                    <h2>Sign Up</h2>
                </header>
                <div class="genaral-error-conatiner <?php echo $active_error; ?>">
                    <div class="genaral-error"><?php echo $error['general']; ?></div>
                </div>
                <div class="form-content">
                    <div class="details">
                        <label for="firstname">First Name:</label>
                        <input type="text" class="detail" value="<?php echo htmlspecialchars($firstname); ?>" name="firstname" id="firstname" placeholder="Enter your first name here">
                        <div class="error"><?php echo $error['firstname']; ?></div>
                    </div>
                    <div class="details">
                        <label for="lastname">Last Name:</label>
                        <input type="text" class="detail" value="<?php echo htmlspecialchars($lastname); ?>" name="lastname" id="lastname" placeholder="Enter your last name here">
                        <div class="error"><?php echo $error['lastname']; ?></div>
                    </div>
                    <div class="details">
                        <label for="email">Email Address:</label>
                        <input type="text" class="detail" value="<?php echo htmlspecialchars($email); ?>" name="email" id="email" placeholder="Enter your email address here">
                        <div class="error"><?php echo $error['email']; ?></div>
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
                    </div>
                    <div class="error-detail">First name must contain only letters.</div>
                </div>
                <div class="password-validations">
                    <div class="validation-icon">
                        <img class="accept" src="assets/imgs/accept.png" alt="">
                        <img class="cross" src="assets/imgs/cross.png" alt="">
                    </div>
                    <div class="error-detail">Last name must contain only letters.</div>
                </div>
                <div class="password-validations">
                    <div class="validation-icon">
                        <img class="accept" src="assets/imgs/accept.png" alt="">
                        <img class="cross" src="assets/imgs/cross.png" alt="">
                        <img class="more" src="assets/imgs/more.png" alt="">
                    </div>
                    <div class="error-detail">Email must be in a valid format.</div>
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

    <script src="assets/js/signup.js"></script>
</body>

</html>