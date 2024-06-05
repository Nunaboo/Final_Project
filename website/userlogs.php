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

// Handle login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login_submit'])) {
    // Check if username and password are set
    if(isset($_POST['username']) && isset($_POST['password'])) {
        // Retrieve username and password from the form
        $username = $_POST['username'];
        $password = $_POST['password']; // Assuming this is already hashed
        
        // Prepare SQL statement to check if the username and password match a record in the database
        $stmt = $conn->prepare("SELECT * FROM accounts WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
        
        // Execute the statement
        $stmt->execute();
        
        // Get the result
        $result = $stmt->get_result();
        
        // Check if there is a row with matching credentials
        if ($result->num_rows == 1) {
            // Login successful
            echo "<script>alert('Login successful. Redirecting to homepage...');</script>"; // Display login success message
            echo "<script>hideJoinButton();</script>"; // Call function to hide the "Join Now" button
            echo "<script>window.location.href = 'index.php';</script>"; // Redirect to homepage
            exit; // Ensure no further output is sent
        } else {
            // Login failed
            echo "<script>alert('Invalid username or password. Please try again.');</script>"; // Display login failure message
        }
        
        // Close the statement
        $stmt->close();
    } else {
        // Handle case where username or password is not set
        echo "Error: Username or password not set.";
    }
}

// Close database connection
$conn->close();
?>