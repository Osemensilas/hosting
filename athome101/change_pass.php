<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link rel="stylesheet" href="assets/css/change_pass.css">
    <link rel="shortcut icon" href="assets/imgs/ossil.png" type="image/x-icon">
</head>

<body>
    <!--Header Begins-->
    <header id="header">
        <div class="header">
            <div class="header-left">
                <a href="homepage.php">HomePage</a>
            </div>
            <div class="header-right">
                <h2>Ossil Host</h2>
            </div>
        </div>
    </header>
    <!--Header Ends-->
    <!--User Begins-->
    <section id="user">
        <div class="user">
            <div class="user-left">
                <div class="user-left-content">
                    <a href="user.php">Admin Details</a>
                    <a href="change_pass.php">Change Password</a>
                </div>
            </div>
            <div class="user-right">
                <div class="user-right-header">
                    <h2>Change Password</h2>
                </div>
                <div class="user-right-content">
                    <form action="#" class="chang-pass-form">
                        <div class="form-content">
                            <div class="details">
                                <label for="password">New Password:</label>
                                <input type="password" class="password1" placeholder="Enter new password">
                                <div class="error"></div>
                            </div>
                            <div class="details">
                                <label for="password">Confirm Password:</label>
                                <input type="password" class="password2" placeholder="Enter password again">
                                <div class="error"></div>
                            </div>
                        </div>
                        <div class="submit-btn-container">
                            <input type="submit" class="submit-btn" value="Change Password">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--User Ends-->
</body>

</html>