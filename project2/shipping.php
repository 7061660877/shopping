<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shipping Address</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        h2 {
            text-align: center;
            margin-top: 20px;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: auto; /* Keep footer at the bottom */
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
    <!-- Shipping Address Form -->
    <h2>Shipping Address</h2>
    <form action="order_confirmation.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>

        <label for="mobile">Mobile No:</label>
        <input type="text" id="mobile" name="mobile" required>

        <button type="submit" name="submit">Place Order</button>
    </form>

    <!-- Footer -->
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
