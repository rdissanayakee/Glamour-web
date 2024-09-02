<?php
// Check if the form was submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve and trim form data
    $firstName = trim($_POST['first_name'] ?? '');
    $lastName = trim($_POST['last_name'] ?? '');
    $shippingAddress = trim($_POST['shipping_address'] ?? '');
    $city = trim($_POST['city'] ?? '');
    $state = trim($_POST['state'] ?? '');
    $zipcode = trim($_POST['zipcode'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');

    // Check if all fields are not empty
    if (empty($firstName)) {
        die('First name field cannot be empty.');
    }
    if (empty($lastName)) {
        die('Last name field cannot be empty.');
    }
    if (empty($shippingAddress)) {
        die('Shipping address field cannot be empty.');
    }
    if (empty($city)) {
        die('City field cannot be empty.');
    }
    if (empty($state)) {
        die('State field cannot be empty.');
    }
    if (empty($zipcode)) {
        die('Zipcode field cannot be empty.');
    }
    if (empty($email)) {
        die('Email field cannot be empty.');
    }
    if (empty($phone)) {
        die('Phone number field cannot be empty.');
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('Invalid email format.');
    }

    // Optional: Validate phone number format (basic example)
    if (!preg_match('/^\d{10}$/', $phone)) {
        die('Invalid phone number format. Please enter a 10-digit phone number.');
    }

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'contact');

    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    } else {
        // Insert the new contact message into the database
        $stmt = $conn->prepare("INSERT INTO messages (first_name, last_name, shipping_address, city, state, zipcode, email, phone) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $firstName, $lastName, $shippingAddress, $city, $state, $zipcode, $email, $phone);

        if ($stmt->execute()) {
            // Redirect to index page after successful submission
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
