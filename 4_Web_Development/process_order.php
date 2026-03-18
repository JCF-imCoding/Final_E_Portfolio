<?php
// Basic form validation and sanitization
$quantity = filter_input(INPUT_POST, "quantity", FILTER_VALIDATE_INT);
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

if (!$quantity || $quantity < 1) {
    die("Invalid quantity. Please go back and enter a valid number.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email address. Please try again.");
}

// Calculate total
$price = 12.99;
$total = $quantity * $price;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Confirmation</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h1>Order Confirmation</h1>

<p>Thank you for your order!</p>
<p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
<p><strong>Quantity Ordered:</strong> <?php echo $quantity; ?></p>
<p><strong>Total Cost:</strong> $<?php echo number_format($total, 2); ?></p>

<p>
    <a href="index.php" class="back-link">Return to Store</a>
</p>

</body>
</html>