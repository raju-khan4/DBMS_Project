<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include "db.php";

if (!isset($_SESSION['user_id'])) {
    echo "<tr><td colspan='5' class='text-center text-danger'>Login required to see your cart items.</td></tr>";
    exit();
}

$user_id = $_SESSION['user_id'];
$result = mysqli_query($conn, "SELECT * FROM orders WHERE user_id = '$user_id'");

$grandTotal = 0; // Total Bill হিসেব রাখার জন্য

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // প্রতিটি অর্ডারের Total মান যোগ করা
        $grandTotal += $row['total'];

        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['product']) . "</td>";
        echo "<td>$" . $row['price'] . "</td>";
       echo "<td>
    <div style='display:flex; align-items:center; justify-content:center; gap:8px;'>
        <button type='button' class='btn btn-sm btn-secondary' onclick=\"updateQuantity(" . $row['id'] . ", " . ($row['quantity'] - 1) . ")\">-</button>
        <span>" . $row['quantity'] . "</span>
        <button type='button' class='btn btn-sm btn-secondary' onclick=\"updateQuantity(" . $row['id'] . ", " . ($row['quantity'] + 1) . ")\">+</button>
    </div>
</td>";
        echo "<td>$" . $row['total'] . "</td>";
        // ID পাস করে ডিলিট লিংক
        echo "<td><a href='delete.php?id=" . $row['id'] . "' class='btn btn-sm btn-danger'>Delete</a></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5' class='text-center'>Your cart is empty.</td></tr>";
}
?>

<!-- Total Bill আপডেট করার জন্য ছোট JS স্ক্রিপ্ট -->
<script>
    if(document.getElementById('totalBill')) {
        document.getElementById('totalBill').innerText = "<?php echo $grandTotal; ?>";
    }
</script>