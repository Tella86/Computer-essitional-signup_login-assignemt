<?php

$host = "localhost";
$dbname = "signup_login";
$username = "root";
$password = "Elon2508/*-";

$mysqli = new mysqli(hostname: $host,
                     username: $username,
                     password: $password,
                     database: $dbname);
                     
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;