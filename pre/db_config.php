<?php

// for localhost ********************************************************************
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio_naresh";

// Global configuration file
date_default_timezone_set('Asia/Kolkata');

// Database timezone configuration
function setDatabaseTimezone($conn)
{
    $timezone_query = "SET time_zone = '+05:30'";
    $conn->query($timezone_query);
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Set timezone for this connection
setDatabaseTimezone($conn);

// echo "Connected successfully";

?>