<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include "db.php";

if (!isset($_SESSION['user_id'])) {
    http_response_code(401);
    exit("Login required");
}

$id = (int)($_POST['id'] ?? 0);
$quantity = (int)($_POST['quantity'] ?? 0);
$user_id = $_SESSION['user_id'];

if ($id <= 0 || $quantity <= 0) {
    http_response_code(400);
    exit("Invalid data");
}

$stmt = mysqli_prepare($conn, "UPDATE orders SET quantity = ?, total = price * ? WHERE id = ? AND user_id = ?");
mysqli_stmt_bind_param($stmt, "iiii", $quantity, $quantity, $id, $user_id);

if (mysqli_stmt_execute($stmt)) {
    echo "Success";
} else {
    http_response_code(500);
    echo "Failed to update";
}
mysqli_stmt_close($stmt);
?>