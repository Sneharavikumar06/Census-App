<?php

$username
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login.db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $provided_username = $_POST['username'];
    $provided_password = $_POST['password'];

    // Prepare SQL query to fetch user with provided username
    $sql = "SELECT * FROM users WHERE username = '$provided_username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Username exists, now check if the provided password matches the stored password
        $row = $result->fetch_assoc();
        $stored_password = $row["password"];
        if ($provided_password == $stored_password) { // Assuming passwords are stored in plain text (not recommended)
            // Redirect to index.html
            header("Location: index.html");
            exit;
        } else {
            echo "Incorrect password!";
        }
    } else {
        echo "User not found!";
    }
}

$conn->close();
?>
