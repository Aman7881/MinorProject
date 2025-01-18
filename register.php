<?php
session_start();
include 'db_connect.php'; // Include the database connection file

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $Name = trim($_POST['Name']);
    $gender = $_POST['gender'];
    $email = trim($_POST['email']);
    $phonenumber = trim($_POST['phonenumber']);
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // Basic validations
    if (empty($Name) || empty($gender) || empty($email) || empty($phonenumber) || empty($password)) {
        echo "Error: All fields are required.";
        exit();
    }

    // Validate that passwords match
    if ($password !== $confirmPassword) {
        echo "Error: Passwords do not match.";
        exit();
    }

    // Additional validation: Check if email already exists
    $checkEmailStmt = $conn->prepare("SELECT id FROM registration WHERE email = ?");
    $checkEmailStmt->bind_param("s", $email);
    $checkEmailStmt->execute();
    $checkEmailStmt->store_result();

    if ($checkEmailStmt->num_rows > 0) {
        echo "Error: An account with this email already exists.";
        $checkEmailStmt->close();
        $conn->close();
        exit();
    }
    $checkEmailStmt->close();

    // Store password as plain text (not recommended)
    $plain_password = $password;

    // Prepare and execute the SQL statement
    $stmt = $conn->prepare("INSERT INTO registration (Name, gender, email, phonenumber, password) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $Name, $gender, $email, $phonenumber, $plain_password);

    // Check for successful execution
    if ($stmt->execute()) {
        // Redirect to login page with a success message
        header("Location: login.html");

        exit(); // Make sure to exit after the header redirection
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
