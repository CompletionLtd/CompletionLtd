<?php
// Define database connection variables
$servername = "your-server-name";
$username = "your-username";
$password = "your-password";
$dbname = "your-database-name";

// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if (isset($_POST['submit'])) {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Prepare SQL statement
    $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";
    
    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        // If message is sent successfully, redirect to thank you page
        header('Location: thank-you.php');
        exit;
    } else {
        // If there is an error with the database, display an error message
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close database connection
$conn->close();

?>
