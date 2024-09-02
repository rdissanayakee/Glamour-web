<?php
// Check if the form was submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve and trim form data
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Check if all fields are not empty
    if (empty($name)) {
        die('Name field cannot be empty.');
    }
    if (empty($email)) {
        die('Email field cannot be empty.');
    }
    if (empty($message)) {
        die('Message field cannot be empty.');
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('Invalid email format.');
    }

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'contact');

    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    } else {
        // Insert the new contact message into the database
        $stmt = $conn->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message);

        if ($stmt->execute()) {
            // Redirect to index page after successful signup
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }
} else {
    die('Invalid request method. Please submit the form correctly.');
}
?>
