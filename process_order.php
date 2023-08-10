<?php
// Replace 'your_database_host', 'your_username', 'your_password', and 'your_database_name' with your database credentials.
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'jhola';
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the product details from the form
    $productName = $_POST['product_name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $subtotal = $_POST['subtotal'];

    // Prepare the SQL query to insert the product details into the database
    $sql = "INSERT INTO orders (product_name, price, quantity, subtotal) VALUES ('$productName', $price, $quantity, $subtotal)";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Order placed successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
