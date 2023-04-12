<?php
// Database credentials
$servername = "localhost";
$uname = "root"; // default username for XAMPP
$password = ""; // default password for XAMPP
$dbname = "moderna_ii";

// Create connection
$conn = mysqli_connect($servername, $uname, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>