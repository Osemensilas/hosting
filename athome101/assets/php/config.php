<?php

$server = 'Localhost';
$user = 'Banks';
$password = 'Bank$101';
$database = 'hosting';


$conn = mysqli_connect($server, $user, $password, $database);

if (!$conn) {
    echo 'Error in connection' . mysqli_connect_error();
}
