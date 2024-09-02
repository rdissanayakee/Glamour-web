<?php
// Check if the form was submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve and trim form data
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    // Check if both username and password are not empty
    if (empty($username)) {
        die('Username field cannot be empty.');
    }
    if (empty($password)) {
        die('Password field cannot be empty.');
    }

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'logglamour');

    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    } else {
        // Check if the username already exists
        $check_stmt = $conn->prepare("SELECT username FROM log WHERE username = ?");
        $check_stmt->bind_param("s", $username);
        $check_stmt->execute();
        $check_stmt->store_result();

        if ($check_stmt->num_rows > 0) {
            echo "Username already exists. Please choose a different username.";
        } else {
            // Hash the password before storing it
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Insert the new user into the database
            $stmt = $conn->prepare("INSERT INTO log (username, password) VALUES (?, ?)");
            $stmt->bind_param("ss", $username, $hashed_password);

            if ($stmt->execute()) {
                // Redirect to index page after successful signup
                header("Location: index.php");
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        }

        $check_stmt->close();
        $conn->close();
    }
} else {
    die('Invalid request method. Please submit the form correctly.');
}
?>
