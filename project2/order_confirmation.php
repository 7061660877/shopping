<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <style>
        body {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

h2 {
    text-align: center;
    margin-top: 20px;
    color:green;
    height: 100px;
    width: 400px;
    background-color:orange;
    border-color:  blue;
   
   

}

#p1 {
    text-align: center;
    margin-top: 20px;
    font-size: 18px;
    color:green;
}

footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 20px 0;
    margin-top: auto;
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
    <center><h2>Order Confirmation</h2></center>
    <p id="p1">Your order has been placed successfully. Thank you for purchasing!</p>

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
