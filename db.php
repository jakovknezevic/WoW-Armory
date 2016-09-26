<?php
$servername = "localhost";
$username = "root";
$password = "";


$conn = new mysqli($servername, $username, $password, 'wow_armory');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>