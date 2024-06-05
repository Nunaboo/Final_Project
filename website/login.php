<?php
// Include database connection
include 'conn.php';

// Check if the database connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve email and password from form data
    $username = isset($_POST["login_username"]) ? $_POST["login_usernameInput"] : "";
    $password = isset($_POST["logInPassInput"]) ? $_POST["logInPassInput"] : "";

    // Validate email and password (you might want to perform additional validation)
    if (empty($email) || empty($password)) {
        // If email or password is empty, display error message as popup
        echo '<script>alert("Email and password are required."); window.location = "signup.php";</script>';
    } else {
        // Prepare and execute SQL statement to fetch user details
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $conn->prepare($sql);

        // Check if the statement preparation was successful
        if ($stmt) {
            // Bind parameter and execute the statement
            $stmt->bind_param("s", $username);
            $stmt->execute();

            // Get the result
            $result = $stmt->get_result();

            // Check if user exists
            if ($result->num_rows == 1) {
                // Fetch user details
                $user = $result->fetch_assoc();

                // Compare passwords
                if ($password === $user['password']) {
                    // Password is correct, authentication successful

                    // Insert login details into userslog database
                    $insertSql = "INSERT INTO userslog (username, password, login_time) VALUES (?, ?, NOW())";
                    $insertStmt = $conn->prepare($insertSql);
                    $insertStmt->bind_param("ss", $username, $password); // Binding email and password
                    $insertStmt->execute(); // Execute the insert statement
                    $insertStmt->close();


                    // Redirect to index.php
                    header("Location: index.php");
                    exit();
                } else {
                    // Display error message as popup if password is incorrect
                    echo '<script>alert("Incorrect password."); window.location = "SignUp.php";</script>';
                    exit();
                }
            } else {
                // Display error message as popup if user does not exist
                echo '<script>alert("User does not exist."); window.location = "SignUp.php";</script>';
                exit();
            }

            // Close the statement
            $stmt->close();

        } else {
            // Statement preparation failed
            echo '<script>alert("Failed to prepare SQL statement."); window.location = "SignUp.php";</script>';
            exit();
        }
    }
}

// Close database
$conn->close();
?>