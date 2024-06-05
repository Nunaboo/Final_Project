<?php
// Start the session
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitnessexpert";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle sign up form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['sign-upsubmit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password']; // Hash the password
    
    // Prepare SQL statement to insert user details into the database using prepared statements
    $stmt = $conn->prepare("INSERT INTO accounts (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);
    
    if ($stmt->execute()) {
        // Close the prepared statement
        $stmt->close();
        
        // Display alert
        echo '<script>alert("Sign up successful. You can now login.");</script>';
        
        // Redirect to login form
        header("Location: loginform.php");
        exit; // Ensure that no further output is sent
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}

// Close database connection
$conn->close();
?>
