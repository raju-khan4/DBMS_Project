<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include "db.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $user_id = $_SESSION['user_id'];

    $stmt = mysqli_prepare($conn, "DELETE FROM orders WHERE id = ? AND user_id = ?");
    mysqli_stmt_bind_param($stmt, "ii", $id, $user_id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

header("Location: index.php");
exit();
?>