<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = $_POST['password'];

    // Insert user data into the database
    $sql = "INSERT INTO users (name, mobile, email, address, password) VALUES ('$name', '$mobile', '$email', '$address', '$password')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Signup successful";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        #d3 {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        #d1 {
            text-align: center;
            margin-right: 50px;
        }
        .img2 {
            width: 100px;
            height: auto;
        }
        #d2 {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 300px;
            width: 100%;
        }
        .img1 {
            width: 60px;
            height: auto;
            margin-bottom: 20px;
        }
        input[type="text"],
        input[type="password"],
        button {
            width: calc(100% - 40px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        p {
            font-size: 14px;
            margin-top: 10px;
        }
        a {
            color: #4CAF50;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">CREATE AN ACCOUNT TO SHOP</h1>
   
    <div id="d3">
        <div id="d1">
            <img src="images/cart.PNG" class="img2" alt="Shopnest Logo">
            <br>
            <h1>SHOPNEST</h1>
        </div>
        <div id="d2">
            <img src="images/user2.PNG" class="img1" alt="User Icon">
           
            <form action="signup.php" method="post">
                <label for="name">NAME</label>
                <br>
                <input type="text" id="name" name="name" placeholder="ENTER YOUR NAME">
                <br>
                <br>
                <label for="mobile">MOBILE NO</label>
                <br>
                <input type="text" id="mobile" name="mobile" placeholder="ENTER YOUR MOBILE NO">
                <br>
                <br>
                <label for="email">EMAIL ID</label>
                <br>
                <input type="text" id="email" name="email" placeholder="ENTER YOUR EMAIL ID">
                <br>
                <br>
                <label for="address">ADDRESS</label>
                <br>
                <input type="text" id="address" name="address" placeholder="ENTER YOUR ADDRESS">
                <br>
                <br>
                <label for="password">PASSWORD</label>
                <br>
                <input type="password" id="password" name="password" placeholder="ENTER YOUR PASSWORD">
                <button type="submit">SUBMIT</button>
            </form>
            <p><a href="login.php">Already have an account?</a></p>
        </div>
    </div> 
</body>
</html>
