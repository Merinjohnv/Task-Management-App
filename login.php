<?php
include_once 'db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            echo json_encode(["message" => "Login successful"]);
        } else {
            echo json_encode(["error" => "Invalid credentials"]);
        }
    } else {
        echo json_encode(["error" => "Invalid credentials"]);
    }
}

$conn->close();
?>
