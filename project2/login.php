
<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Fetch user data from the database
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Set session variables
        $_SESSION['email'] = $email;
        
        // Redirect to index.html upon successful login
        header("Location: index.php");
        exit();
    } else {
        // Display alert in toast for incorrect email or password
        echo " <script>
               alert('Incorrect email or password');
               window.location.href = 'login.php';
              </script>";
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
    <h1 style="text-align: center;">LOGIN HERE</h1>
   
    <div id="d3">
        <div id="d1">
            <img src="images/cart.PNG" class="img2" alt="Shopnest Logo">
            <br>
            <h1>SHOPNEST</h1>
        </div>
        <div id="d2">
            <img src="images/user2.PNG" class="img1" alt="User Icon">
           
            <!-- Form submits data to login.php -->
            <form action="login.php" method="post">
                <label for="email">EMAIL ID</label>
                <br>
                <input type="text" id="email" name="email" placeholder="ENTER YOUR EMAIL ID">
                <br>
                <br>
                <label for="password">PASSWORD</label>
                <br>
                <input type="password" id="password" name="password" placeholder="ENTER YOUR PASSWORD">
                <button type="submit">SUBMIT</button>
            </form>
            <p><a href="signup.php">Don't have an account?</a></p>
        </div>
    </div> 
</body>
</html>
