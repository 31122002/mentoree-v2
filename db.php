<?php
$servername = "localhost";
$username = "root"; // or your MySQL username
$password = "";     // no password
$database = "mentoree";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected to mentoree database successfully!";
