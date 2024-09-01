<?php
$servername = "localhost";
$username = "root"; // your database username
$password = ""; // your database password
$dbname = "addtocart"; // your database name

// Create connection
$conn = new mysqli('localhost', 'root', '', '');

session_start();
header('Content-Type: application/json');

// Check if user is logged in
if (!isset($_SESSION['id'])) {
    http_response_code(401);
    echo json_encode(["error" => "User not authenticated"]);
    exit;
}

$user_id = $_SESSION['id'];
// $data = json_decode(file_get_contents('php://input'), true);
// $product_id = $data['product_id'];
// $product_name = $data['product_name'];
// $product_price = $data['product_price'];


if (isset($_GET['item_id'])) {
    $id = $_GET['item_id'];
    $select = mysqli_query($conn, "SELECT * FROM products WHERE id =$id");
    $row = mysqli_fetch_assoc($select);
}


// // Database connection
// $conn = new mysqli('localhost', 'root', '', 'addtocart');
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }


// Fetch existing cart items
$sql = "SELECT cart_items FROM carts WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($cart_items_json);
$stmt->fetch();
$stmt->close();

$cart_items = $cart_items_json ? json_decode($cart_items_json, true) : [];

// Check if the product is already in the cart
$product_found = false;
foreach ($cart_items as &$item) {
    if ($item['id'] === $product_id) {
       $product_found = true;
        break;
    }
}
if (!$product_found) {
    $cart_items[] = [
        'id' => $product_id,
        'name' => $product_name,
        'price' => $product_price,
        
    ];
}

// Save updated cart items
$cart_items_json = json_encode($cart_items);
$sql = "REPLACE INTO carts (user_id, cart_items) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("is", $user_id, $cart_items_json);
$stmt->execute();
$stmt->close();

$conn->close();

echo json_encode(["success" => true, "cart_items" => $cart_items]);
?>