<?php
session_start();
include "db.php";

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}

$product = $_POST['product'];
$price = $_POST['price'];
$quantity = 1;
$total = $price;
$user_id = $_SESSION['user_id'];

$sql = "INSERT INTO orders(product,price,quantity,total,user_id)
VALUES('$product','$price','$quantity','$total','$user_id')";

mysqli_query($conn,$sql);

header("Location:index.php");
?>