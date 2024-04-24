<?php

include 'assets/php/client.php';
include 'assets/php/config.php';
if (!$_GET) {
    $primary = '';
} else {
    if ($_GET['detail'] == 'hello') {
        $primary = "?detail=hello";
    } else {
        $primary = '';
    }
}

$primary = '';

if (isset($_SESSION['id'])) {
    $address_name = $firstname = $lastname = $address1 = $address2 = $state = $city = $zip_code = $country =
        $phone = $fax = $email = $company_name = $job_title = $address_type = '';
    $error = array(
        'address_name' => '', 'firstname' => '', 'lastname' => '', 'address1' => '', 'state' => '', 'city' => '',
        'zip_code' => '', 'country' => '', 'phone' => '', 'fax' => '', 'email' => '', 'company_name' => '',
        'job_title' => '', 'address2' => ''
    );
    $decision = '';
    $address_main = "secondary";


    if (isset($_POST['submit'])) {
        if (empty(trim($_POST['address1']))) {
            $error['address1'] = 'Fields required';
        } else {
            $address1 = $_POST['address1'];
        }

        if (empty(trim($_POST['address2']))) {
            $error['address1'] = 'Fields required';
        } else {
            $address2 = $_POST['address2'];
        }

        if (empty(trim($_POST['city']))) {
            $error['city'] = 'Fields required';
        } else {
            $city = $_POST['city'];
        }

        if (!empty(trim($_POST['address_name']))) {
            $address_name = $_POST['address_name'];
        }

        if (!empty(trim($_POST['firstname']))) {
            $firstname = $_POST['firstname'];

            if (!preg_match('/^[a-zA-Z]+$/', $firstname)) {
                $error['firstname'] = "Letters only";
            }
        }

        if (!empty(trim($_POST['lastname']))) {
            $lastname = $_POST['lastname'];

            if (!preg_match('/^[a-zA-Z]+$/', $lastname)) {
                $error['lastname'] = "Letters only";
            }
        }

        if (!empty(trim($_POST['zip_code']))) {
            $zip_code = $_POST['zip_code'];
        }

        if (!empty(trim($_POST['country']))) {
            $country = $_POST['country'];
        }

        if (!empty(trim($_POST['state']))) {
            $state = $_POST['state'];
        }

        if (!empty(trim($_POST['phone']))) {
            $phone = $_POST['phone'];
        }

        if (!empty(trim($_POST['fax']))) {
            $fax = $_POST['fax'];
        }

        if (!empty(trim($_POST['email']))) {
            $email = $_POST['email'];
        }

        if (!empty(trim($_POST['company_name']))) {
            $company_name = $_POST['company_name'];
            $address_type = 'Company';
        }

        if (!empty(trim($_POST['job_title']))) {
            $job_title = $_POST['job_title'];
            $address_type = 'Company';
        }

        if (!array_filter($error)) {
            $user_id = $client['user_id'];
            $address_name = mysqli_real_escape_string($conn, $address_name);
            $firstname = mysqli_real_escape_string($conn, $firstname);
            $lastname = mysqli_real_escape_string($conn, $lastname);
            $address1 = mysqli_real_escape_string($conn, $address1);
            $address2 = mysqli_real_escape_string($conn, $address2);
            $state = mysqli_real_escape_string($conn, $state);
            $city = mysqli_real_escape_string($conn, $city);
            $zip_code = mysqli_real_escape_string($conn, $zip_code);
            $country = mysqli_real_escape_string($conn, $country);
            $phone = mysqli_real_escape_string($conn, $phone);
            $fax = mysqli_real_escape_string($conn, $fax);
            $email = mysqli_real_escape_string($conn, $email);
            $company_name = mysqli_real_escape_string($conn, $company_name);
            $job_title = mysqli_real_escape_string($conn, $job_title);


            $sql = "INSERT INTO `address`(`user_id`, `office_address`, `firstname`, `lastname`, `company_name`,
             `job_title`, `address1`, `address2`, `state`, `city`, `zip_code`, `country`, `phone`, `fax`, `email`,
              `address_type`, `prim`) VALUES ('$user_id','$address_name','$firstname','$lastname','$company_name','$job_title',
              '$address1','$address2','$state','$city','$zip_code','$country','$phone','$fax',
              '$email','$address_type','$address_main')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                if ($address_main == 'primary') {
                    $id = $client['id'];
                    $user_id = $client['user_id'];
                    $firstname = $client['firstname'];
                    $lastname = $client['lastname'];
                    $email = $client['email'];
                    $password = $client['password'];
                    $code = $client['code'];
                    $balance = $client['balance'];
                    $status = $client['status'];
                    $ip = $client['ip'];
                    $address = $address1;
                    $phone = $phone;

                    $update_client = "UPDATE `user` SET `id`='$id',`user_id`='$user_id',`firstname`='$firstname',
                `lastname`='$lastname',`email`='$email',`password`='$password',`code`='$code',`balance`='$balance'
                ,`status`='$status',`ip`='$ip',`address`='$address',`phone`='$phone' WHERE user_id = '{$_SESSION['id']}'";
                    $client_result = mysqli_query($conn, $update_client);

                    if ($client_result) {
                        $decision = 'active';
                    }
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
    <title>Update User Information - OssilHost</title>
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/update.css">
    <link rel="shortcut icon" href="assets/imgs/ossil.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/chatbox.css">
    <link rel="stylesheet" href="assets/css/decision.css">
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
        <form action="update_address.php<?php echo $primary; ?>" class="user-profile" method="POST">
            <div class="user-profile-header">
                <h2>Add New Address</h2>
            </div>
            <div class="user-profile-inromation">
                <div class="user-profile-information-left">
                    <h3>Basic Information</h3>
                </div>
                <div class="user-profile-information-right">
                    <div class="info-details">
                        <label>Address Name</label>
                        <div class="info-edit-container">
                            <input type="text" name="address_name" value="<?php echo htmlspecialchars($address_name); ?>" class="input-info" placeholder="e.g Office address">
                            <div class="error"><?php echo $error['address_name']; ?></div>
                        </div>
                    </div>
                    <div class="info-details">
                        <label>First Name</label>
                        <div class="info-edit-container">
                            <input type="text" name="firstname" value="<?php echo htmlspecialchars($firstname); ?>" class="input-info" placeholder="First name">
                            <div class="error"><?php echo $error['firstname']; ?></div>
                        </div>
                    </div>
                    <div class="info-details">
                        <label>Last Name</label>
                        <div class="info-edit-container">
                            <input type="text" name="lastname" value="<?php echo htmlspecialchars($lastname); ?>" class="input-info" placeholder="Last name">
                            <div class="error"><?php echo $error['lastname']; ?></div>
                        </div>
                    </div>
                    <div class="company-address">
                        <div class="info-details">
                            <label>Company Name</label>
                            <input type="text" name="company_name" value="<?php echo htmlspecialchars($company_name); ?>" class="input-info" placeholder="company name">
                            <div class="error"><?php echo $error['company_name']; ?></div>
                        </div>
                        <div class="info-details">
                            <label>Job Title</label>
                            <input type="text" name="job_title" value="<?php echo htmlspecialchars($job_title); ?>" class="input-info" placeholder="Job title">
                            <div class="error"><?php echo $error['job_title']; ?></div>
                        </div>
                    </div>
                    <div class="check-content-coatiner">
                        <div class="check-container"><img src="assets/imgs/check.png" alt=""></div>
                        <p>This is a company address</p>
                    </div>
                </div>
            </div>
            <div class="user-profile-inromation">
                <div class="user-profile-information-left">
                    <h3>Street information</h3>
                </div>
                <div class="user-profile-information-right">
                    <div class="info-details address-details">
                        <label>Address*</label>
                        <div class="info-edit-container">
                            <div class="address-container">
                                <input type="text" name="address1" value="<?php echo htmlspecialchars($address1); ?>" class="input-info" placeholder="Address line 1">
                                <input type="text" name="address2" value="<?php echo htmlspecialchars($address2); ?>" class="input-info" placeholder="Address line 2">
                            </div>
                            <div class="error"><?php echo $error['address1']; ?></div>
                        </div>
                    </div>
                    <div class="info-details">
                        <label>State/Province</label>
                        <input type="text" class="input-info" name="state" value="<?php echo htmlspecialchars($state); ?>" placeholder="State/Province">
                        <div class="error"><?php echo $error['state'] ?></div>
                    </div>
                    <div class="info-details">
                        <label>City*</label>
                        <div class="info-edit-container">
                            <input type="text" name="city" value="<?php echo htmlspecialchars($city); ?>" class="input-info" placeholder="City">
                            <div class="error"><?php echo $error['city']; ?></div>
                        </div>
                    </div>
                    <div class="info-details">
                        <label>ZIP/Postal Code</label>
                        <input type="text" name="zip_code" value="<?php echo htmlspecialchars($zip_code); ?>" class="input-info" placeholder="ZIP/Postal Code">
                        <div class="error"><?php echo $error['zip_code'] ?></div>
                    </div>
                    <div class="info-details">
                        <label>Country</label>
                        <input type="text" name="country" value="<?php echo htmlspecialchars($country); ?>" class="input-info" placeholder="Country">
                        <div class="error"><?php echo $error['country'] ?></div>
                    </div>
                </div>
            </div>
            <div class="user-profile-inromation">
                <div class="user-profile-information-left">
                    <h3>Street information</h3>
                </div>
                <div class="user-profile-information-right">
                    <div class="info-details">
                        <label>Phone Number</label>
                        <input type="text" name="phone" value="<?php echo htmlspecialchars($phone); ?>" class="input-info" placeholder="Phone Number">
                        <div class="error"><?php echo $error['phone']; ?></div>
                    </div>
                    <div class="info-details">
                        <label>Fax Number</label>
                        <div class="info-edit-container">
                            <input type="text" name="fax" value="<?php echo htmlspecialchars($fax); ?>" class="input-info" placeholder="Fax Number">
                            <div class="error"><?php echo $error['fax']; ?></div>
                        </div>
                    </div>
                    <div class="info-details">
                        <label>Email Address</label>
                        <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>" class="input-info" placeholder="Email Address">
                        <div class="error"><?php echo $error['email']; ?></div>
                    </div>
                </div>
                <div class="auth-code-submit-btn-container">
                    <input type="submit" name="submit" class="auth-submit-btn" value="Save Changes">
                    <p>Cancel</p>
                </div>
            </div>
        </form>
    </section>
    <!--User Ends-->
    <!--Decision Begins-->
    <div id="decisions" class="<?php echo $decision; ?>">
        <div class="decisions">
            <div class="decision-container">
                <p>Your address has been updated successfully.</p>
                <div class="decision-links">
                    <a href="index.php">Home Page</a>
                    <a href="user.php">User Page</a>
                </div>
            </div>
        </div>
    </div>
    <!--Decision Ends-->
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
    <script src="assets/js/update.js"></script>
    <script src="assets/js/general.js"></script>
</body>

</html>