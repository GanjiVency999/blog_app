<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "blog";

$conn = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>