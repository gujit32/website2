<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user inputs
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the password using password_hash
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Connect to the database (replace these values with your database credentials)
    $conn = new mysqli('localhost', 'your_username', 'your_password', 'your_database_name');

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert the user into the database
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashedPassword')";
    
    if ($conn->query($sql) === TRUE) {
        echo "User registered successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
