<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['email'])) {
    // Redirect to the login page
    header("Location: login.php");
    exit(); // Stop further execution
}

// User is logged in, continue displaying the page
include 'config.php';

// Handle removing a product from the cart
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['remove_product'])) {
    $index = $_POST['index'];
    // Retrieve cart items from session
    $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
    // Remove the product from the cart array
    unset($cart[$index]);
    // Reset array keys to avoid gaps in numeric keys
    $cart = array_values($cart);
    // Update the cart session variable
    $_SESSION['cart'] = $cart;
    // Refresh the page to reflect the changes
    header("Location: cart.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <style>
        /* Your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            background-color: #333;
            overflow: hidden;
        }
        nav ul li {
            float: left;
        }
        nav ul li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        nav ul li a:hover {
            background-color: #111;
        }
        h2 {
            text-align: center;
            margin-top: 20px;
        }
        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            border: 1px solid #ddd;
            background-color: white;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .message {
            text-align: center;
            margin-top: 20px;
            color: red;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        @media screen and (max-width: 600px) {
            table {
                width: 100%;
            }
        }

        footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 50px 0;
}

.footer-content {
    display: flex;
    justify-content: space-around;
}

.footer-column {
    flex: 1;
    padding: 0 20px;
}

.footer-column h3 {
    margin-bottom: 10px;
    font-size: 18px;
}

.footer-column p {
    margin: 0;
    font-size: 14px;
}

    </style>
</head>
<body>
    <!-- Navbar -->
    <!-- Your navigation menu here -->

    <!-- Content -->
    <div class="container">
        <?php
        // Retrieve cart items from session
        $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();

        if (!empty($cart)): ?>
            <h2>Shopping Cart</h2>
            <table>
                <!-- Table header -->
                <tr>
                    <th>Product ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
                <!-- Table rows for cart items -->
                <?php foreach ($cart as $index => $item): ?>
                    <tr>
                        <td><?php echo $item['id']; ?></td>
                        <td><?php echo $item['name']; ?></td>
                        <td><?php echo $item['description']; ?></td>
                        <td><?php echo $item['price']; ?></td>
                        <!-- Form for removing a product -->
                        <td>
                            <form method="post">
                                <input type="hidden" name="index" value="<?php echo $index; ?>">
                                <button type="submit" name="remove_product">Remove</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <!-- Table row for total amount -->
                <tr>
                    <td colspan="3">Total</td>
                    <td>
                        <?php 
                        // Calculate total amount
                        $total_amount = 0;
                        foreach ($cart as $item) {
                            $total_amount += $item['price'];
                        }
                        echo $total_amount;
                        ?>
                    </td>
                    <td></td> <!-- Empty column for action -->
                </tr>
            </table>
            <!-- Place Order Button -->
            <form action="shipping.php" method="post">
                <button type="submit" name="place_order">Place Order</button>
            </form>
        <?php else: ?>
            <p>Your shopping cart is empty.</p>
        <?php endif; ?>
    </div>

    <!-- Footer -->
    <!-- Your footer content here -->

    <footer>
    <div class="footer-content">
        <div class="footer-column">
            <h3>ABOUT US</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tristique libero id.</p>
        </div>
        <div class="footer-column">
            <h3>CONTACT US</h3>
            <p>Email: info@example.com</p>
            <p>Phone: +1234567890</p>
        </div>
        <div class="footer-column">
            <h3>ADDRESS</h3>
            <p>123 Street Name</p>
            <p>City, Country</p>
        </div>
    </div>
</footer>

</body>
</html>
