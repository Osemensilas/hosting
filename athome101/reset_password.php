<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="shortcut icon" href="imgs/ossil.png" type="image/x-icon">
</head>

<body>
    <section id="sign-up">
        <div class="sign-up-left">
            <form action="#" class="sign-up-form">
                <header class="from-header">
                    <h2>Reset Password</h2>
                </header>
                <div class="code-info">
                    A 6 digit code was sent to your mail.
                </div>
                <div class="form-content">
                    <div class="details">
                        <label for="email">Code:</label>
                        <input type="text" class="detail" id="email" placeholder="Enter the 6 digit code">
                        <div class="error">Incorrect Password</div>
                    </div>
                    <div class="details">
                        <label for="password">Password:</label>
                        <input type="password" class="detail" id="password1" placeholder="Enter your password here">
                    </div>
                    <div class="details">
                        <label for="password2">Confirm Password:</label>
                        <input type="password" class="detail" id="password2" placeholder="Enter your password here again">
                        <div class="error">Password don't match!</div>
                    </div>
                </div>
                <div class="dont">
                    Already have an account?<a href="signin.html">  Sign In</a>
                </div>
                <div class="submit-btn-container">
                    <input type="submit" class="submit-btn" value="Sign Up">
                </div>
            </form>
        </div>
        <div class="sign-up-right">
            <div class="sign-up-right-container">
                <div class="password-validations">
                    <div class="validation-icon">
                        <img class="accept" src="imgs/accept.png" alt="">
                        <img class="cross" src="imgs/cross.png" alt="">
                        <img class="more" src="imgs/more.png" alt="">
                    </div>
                    <div class="error-detail">Enter 6 digit code sent to your mail.</div>
                </div>
                <div class="password-validations">
                    <div class="validation-icon">
                        <img class="accept" src="imgs/accept.png" alt="">
                        <img class="cross" src="imgs/cross.png" alt="">
                        <img class="more" src="imgs/more.png" alt="">
                    </div>
                    <div class="error-detail">Password must be at least 8 charcters.</div>
                </div>
                <div class="password-validations">
                    <div class="validation-icon">
                        <img class="accept" src="imgs/accept.png" alt="">
                        <img class="cross" src="imgs/cross.png" alt="">
                        <img class="more" src="imgs/more.png" alt="">
                    </div>
                    <div class="error-detail">Password must contain at least one uppercase letter.</div>
                </div>
                <div class="password-validations">
                    <div class="validation-icon">
                        <img class="accept" src="imgs/accept.png" alt="">
                        <img class="cross" src="imgs/cross.png" alt="">
                        <img class="more" src="imgs/more.png" alt="">
                    </div>
                    <div class="error-detail">Password must contain at least one lowercase letter.</div>
                </div>
                <div class="password-validations">
                    <div class="validation-icon">
                        <img class="accept" src="imgs/accept.png" alt="">
                        <img class="cross" src="imgs/cross.png" alt="">
                        <img class="more" src="imgs/more.png" alt="">
                    </div>
                    <div class="error-detail">Password must contain at least one digit.</div>
                </div>
                <div class="password-validations">
                    <div class="validation-icon">
                        <img class="accept" src="imgs/accept.png" alt="">
                        <img class="cross" src="imgs/cross.png" alt="">
                        <img class="more" src="imgs/more.png" alt="">
                    </div>
                    <div class="error-detail">Password must contain at least one of -+_!@#$%^&*., ?</div>
                </div>
                <div class="password-validations">
                    <div class="validation-icon">
                        <img class="accept" src="imgs/accept.png" alt="">
                        <img class="cross" src="imgs/cross.png" alt="">
                        <img class="more" src="imgs/more.png" alt="">
                    </div>
                    <div class="error-detail">Passwords must match.</div>
                </div>
            </div>
        </div>
    </section>

    <script src="reset.js"></script>
</body>

</html>