<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'db_rms';


$conn = mysqli_connect(
    $server,
    $user,
    $pass,
    $db
);

if(mysqli_connect_error()){
    echo 'Connection Error' . mysqli_connect_error();
    exit();
}
