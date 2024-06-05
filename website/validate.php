<?php

include 'conn.php';

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);

    if ($conn){
        $stmt = $conn->prepare("SELECT * FROM adminlog WHERE username = ?");

        if ($stmt){
            $stmt->execute([$username]);
            $user = $stmt->fetch(); // Using FETCH_ASSOC for associative array

            if($user){
                if($user['password'] == $password){
                    header("Location: admin.php");
                    exit();
                }
                else{
                    echo "<script language='javascript'>";
                    echo "alert('WRONG INFORMATION')";
                    echo "</script>";
                }
            }else{
                echo "No user found with this username.";
            }

            $stmt->close(); // Close the statement
        } else{
            echo "Failed to prepare statement: " . $conn->error;
        }
    } else{
        echo "Failed to connect to database: " . $conn->connect_error;
    }
}
?>
