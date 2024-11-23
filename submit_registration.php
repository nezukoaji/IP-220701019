<?php
// Database connection details
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = "123456789@"; // Your MySQL password
$dbname = "event_registration"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$eventSelect = $_POST['eventSelect'];

// Prepare the SQL query
$sql = "INSERT INTO registrations (full_name, email, phone, event) 
        VALUES ('$fullName', '$email', '$phone', '$eventSelect')";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
