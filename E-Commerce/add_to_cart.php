<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include "db.php";

if (!isset($_SESSION['user_id'])) {
    http_response_code(401);
    exit("Login required");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product  = trim($_POST['product'] ?? '');
    $price    = (int)($_POST['price'] ?? 0);
    $quantity = (int)($_POST['quantity'] ?? 1);
    $total    = $price * $quantity;
    $user_id  = $_SESSION['user_id'];

    if (empty($product) || $price <= 0) {
        http_response_code(400);
        exit("Invalid order details.");
    }

    $stmt = mysqli_prepare($conn, "INSERT INTO orders (product, price, quantity, total, user_id) VALUES (?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "siiii", $product, $price, $quantity, $total, $user_id);

    if (mysqli_stmt_execute($stmt)) {
        echo "Success";
    } else {
        http_response_code(500);
        echo "Failed to add to cart";
    }
    mysqli_stmt_close($stmt);
}
?>