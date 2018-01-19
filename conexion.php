<?php
$servername = "mysql.hostinger.es";
$username = "u664784038_admin";
$password = "Gomez2017";
$dbname = "u664784038_dbo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 