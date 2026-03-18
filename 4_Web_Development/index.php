<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Product Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h1>Welcome to JCF Tech Store</h1>

<div class="product-card">
    <img src="images/usb_c_cable.png" alt="USB-C Cable" />

    <h2>USB-C Charging Cable</h2>
    <p>High-quality braided USB‑C cable, 6 ft length, supports fast charging.</p>
    <p class="price">$12.99</p>

    <form action="process_order.php" method="POST" class="order-form">
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" min="1" value="1" required>

        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" required>

        <button type="submit">Place Order</button>
    </form>
</div>

</body>
</html>