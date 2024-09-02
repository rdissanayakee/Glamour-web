<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "addtocart";

$conn = new mysqli($servername, $username, $password, $dbname);

//$user_id = $_SESSION['id'];

if (isset($_GET['item_id'])) {
    $id = $_GET['item_id'];
    $itemName = $_GET['item_name'];
    $quantity = $_GET['quantity'];
    $price = $_GET['price'];
}else{
    header('location: cart.php?error=request_error');
}

$insert = "INSERT INTO carts(itemId, itemName, quantity, itemPrice) VALUES('$id', '$itemName', '$quantity', '$price');";

if ($conn->query($insert) === false) {
    header('location: cart.php?error=query_failed');

} else {
    header('location: cart.php?error=none');
}
