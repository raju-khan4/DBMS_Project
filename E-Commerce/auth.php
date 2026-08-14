<?php
// Safely check session status
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include "db.php";

$email    = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// Prepared statement to prevent SQL Injection
$stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE email = ?");
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if($user = mysqli_fetch_assoc($result)){
    

    if($password === $user['password']){
        
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];

        header("Location: index.php");
        exit();

    } else {
        echo "Wrong Password";
    }

} else {
    echo "User not found";
}

mysqli_stmt_close($stmt);
?>