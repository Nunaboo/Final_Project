<?php
session_start(); // Start session

// Your existing PHP code continues here...

include 'conn.php';

// Check if a session variable is set
if(isset($_SESSION['username'])) {
    // Session variable is set, user is logged in
    echo 'Logged in as: ' . $_SESSION['username'];
} else {
    // Session variable is not set, user is not logged in
    echo 'Not logged in.';
}

// Set a cookie (optional)
setcookie("user", "John", time()+3600, "/");

// Your existing PHP code continues here...

if(isset($_POST['delete_client_btn'])) {
    // Check if delete_client value is set
    if(isset($_POST['delete_client'])) {
        $client_id = mysqli_real_escape_string($conn, $_POST['delete_client']);

        // Delete query
        $delete_query = "DELETE FROM accounts WHERE id='$client_id'";
        
        // Execute the query
        if(mysqli_query($conn, $delete_query)) {
            // Redirect to the same page to refresh the data
            header("Location: ".$_SERVER['PHP_SELF']);
            exit();
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    } else {
        echo "Client ID not provided for deletion.";
    }
}

// Initialize variables for search query and prepared statement
$search_query = "";
$stmt = null;
$sql_query = "SELECT * FROM accounts"; // Define $sql_query outside the conditional block

// Check if a search query is submitted
if(isset($_GET['search'])) {
    $search_query = $_GET['search'];

    // Prepare SQL query with placeholders
    $sql_query = "SELECT * FROM accounts WHERE name LIKE ? OR username LIKE ? OR 
                  email LIKE ? OR password LIKE ?";
    $stmt = mysqli_prepare($conn, $sql_query);

    if (!$stmt) {
        echo "Failed to prepare statement: " . mysqli_error($conn);
        exit();
    }

    // Bind parameters
    $search_term = "%" . $search_query . "%"; // Add wildcards for like search
    mysqli_stmt_bind_param($stmt, "ssssssss", $search_term, $search_term, $search_term, 
                        $search_term, $search_term, $search_term, $search_term, $search_term);

    // Execute the statement
    if (!mysqli_stmt_execute($stmt)) {
        echo "Error executing statement: " . mysqli_stmt_error($stmt);
        exit();
    }

    // Get the result
    $result = mysqli_stmt_get_result($stmt);
} else {
    // Execute the default query
    $result = mysqli_query($conn, $sql_query);
    if (!$result) {
        echo "Error executing query: " . mysqli_error($conn);
        exit();
    }
}
?>
