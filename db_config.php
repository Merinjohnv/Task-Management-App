<?php
$servername = "localhost";
$username = "";
$password = "";
$dbname = "taskmanager";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
