<?php

$check_visitor = "SELECT * FROM user WHERE ip = '$ip'";
$check_visitor_result = mysqli_query($conn, $check_visitor);

if (mysqli_num_rows($check_visitor_result) > 0) {
    $firstname = $lastname = $email = $password1 = $password2 = '';
    $error = array('firstname' => '', 'lastname' => '', 'email' => '', 'password1' => '', 'password2' => '', 'general' => '');
    $active_error = '';
    $visitor_row = mysqli_fetch_assoc($check_visitor_result);

    $visitor_id = $visitor_row['id'];

    if (isset($_POST['submit'])) {
        if (empty(trim($_POST['firstname']))) {
            $error['firstname'] = "Field required";
        } else {
            $firstname = $_POST['firstname'];

            if (!preg_match('/^[a-zA-Z]+$/', $firstname)) {
                $error['firstname'] = "Letters only";
            }
        }

        if (empty(trim($_POST['lastname']))) {
            $error['lastname'] = "Field required";
        } else {
            $lastname = $_POST['lastname'];

            if (!preg_match('/^[a-zA-Z]+$/', $lastname)) {
                $error['lastname'] = "Letters only";
            }
        }

        if (empty(trim($_POST['email']))) {
            $error['email'] = "Field required";
        } else {
            $email = $_POST['email'];

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error['email'] = 'Invalid email address';
            } else {
                $getUser = "SELECT * FROM user WHERE email = '$email' AND ip != '$ip'";
                $getResult = mysqli_query($conn, $getUser);

                if (mysqli_num_rows($getResult) > 0) {
                    $active_error = 'active';
                    $error['general'] = "Email already exist. Sign in";
                }
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
            $password = mysqli_real_escape_string($conn, $password1);
            $code = '';
            $user_id = '';
            $balance = '0';
            $status = 'client';
            $ip = '4566948';

            $sql = "UPDATE `user` SET `id`='$visitor_id',`user_id`='$user_id',`firstname`='$firstname',`lastname`='$lastname',
                    `email`='$email',`password`='$password',`code`='$code',`balance`='$balance',`status`='$status',
                    `ip`='$ip' WHERE id = '$visitor_id'";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                $getUser = "SELECT * FROM user WHERE email = '$email' AND status = '$status'";
                $getResult = mysqli_query($conn, $getUser);

                if (mysqli_num_rows($getResult) > 0) {
                    $rows = mysqli_fetch_assoc($getResult);

                    $user_id = rand(100000, 999999) . $rows['id'];

                    $update = "UPDATE `user` SET `id`='{$rows['id']}',`user_id`='$user_id',`firstname`='$firstname',
                            `lastname`='$lastname',`email`='$email',`password`='$password',`code`='', `balance`='0', 
                            `status`='$status', `ip`='$ip' WHERE email = '$email' AND status = '$status'";
                    $updateResult = mysqli_query($conn, $update);

                    if ($updateResult) {
                        $getUser = "SELECT * FROM user WHERE email = '$email' AND status = '$status'";
                        $getResult = mysqli_query($conn, $getUser);

                        if (mysqli_num_rows($getResult) > 0) {
                            $rows = mysqli_fetch_assoc($getResult);

                            $_SESSION['id'] = $rows['user_id'];
                            header('location: index.php');
                        }
                    }
                }
            }
        }
    }
} else {
    $firstname = $lastname = $email = $password1 = $password2 = '';
    $error = array('firstname' => '', 'lastname' => '', 'email' => '', 'password1' => '', 'password2' => '', 'general' => '');
    $active_error = '';

    if (isset($_POST['submit'])) {
        if (empty(trim($_POST['firstname']))) {
            $error['firstname'] = "Field required";
        } else {
            $firstname = $_POST['firstname'];

            if (!preg_match('/^[a-zA-Z]+$/', $firstname)) {
                $error['firstname'] = "Letters only";
            }
        }

        if (empty(trim($_POST['lastname']))) {
            $error['lastname'] = "Field required";
        } else {
            $lastname = $_POST['lastname'];

            if (!preg_match('/^[a-zA-Z]+$/', $lastname)) {
                $error['lastname'] = "Letters only";
            }
        }

        if (empty(trim($_POST['email']))) {
            $error['email'] = "Field required";
        } else {
            $email = $_POST['email'];

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error['email'] = 'Invalid email address';
            } else {
                $getUser = "SELECT * FROM user WHERE email = '$email' AND status = 'client'";
                $getResult = mysqli_query($conn, $getUser);

                if (mysqli_num_rows($getResult) > 0) {
                    $active_error = 'active';
                    $error['general'] = "Email already exist. Sign in";
                }
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
            $password = mysqli_real_escape_string($conn, $password1);
            $code = '';
            $user_id = '';
            $balance = '0';
            $status = 'client';
            $ip = '4566948';

            $sql = "INSERT INTO `user`(`user_id`, `firstname`, `lastname`, `email`, `password`, `code`, `balance`, `status`, `ip`)
         VALUES ('$user_id','$firstname','$lastname','$email','$password','$code', '$balance', '$status', '$ip')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                $getUser = "SELECT * FROM user WHERE email = '$email' AND status = '$status'";
                $getResult = mysqli_query($conn, $getUser);

                if (mysqli_num_rows($getResult) > 0) {
                    $rows = mysqli_fetch_assoc($getResult);

                    $user_id = rand(100000, 999999) . $rows['id'];

                    $update = "UPDATE `user` SET `id`='{$rows['id']}',`user_id`='$user_id',`firstname`='$firstname',
                            `lastname`='$lastname',`email`='$email',`password`='$password',`code`='', `balance`='0', 
                            `status`='$status', `ip`='$ip' WHERE email = '$email' AND status = '$status'";
                    $updateResult = mysqli_query($conn, $update);

                    if ($updateResult) {
                        $getUser = "SELECT * FROM user WHERE email = '$email' AND status = '$status'";
                        $getResult = mysqli_query($conn, $getUser);

                        if (mysqli_num_rows($getResult) > 0) {
                            $rows = mysqli_fetch_assoc($getResult);

                            $_SESSION['id'] = $rows['user_id'];
                            header('location: index.php');
                        }
                    }
                }
            }
        }
    }
}
