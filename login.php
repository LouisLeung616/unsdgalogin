<?php
// Sample user credentials (replace with database check in a real application)
$valid_username = "your_username";
$valid_password = "your_password";

// Get form data
$username = $_POST['username'];
$password = $_POST['password'];

// Check credentials
if ($username === $valid_username && $password === $valid_password) {
    // Redirect to Microsoft Form
    header("Location: https://forms.office.com/r/L6dzJLQ5jk");
    exit();
} else {
    echo "Login Failed. Please check your username and password.";
}
?>