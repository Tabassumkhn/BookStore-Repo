<?php
$username = $_POST['username'];
$password = $_POST['password'];

// database connection
$conn = new mysqli("localhost","root","","project");
if ($conn->connect_error) {
    die("failed to connect:". $conn->connect_error);
}else{ 
    $stmt= $conn->prepare("select * from login where username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if ($stmt_result->num_rows > 0){ 
        $data = $stmt_result->fetch_assoc(); 
        if ($data['password'] === $password){
            echo "login successfully!";
        }
    }else{
        //echo"<h2> Invalid Email or Password  again</h2>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Book shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color:maroon;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        h1 {
            margin: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f5f5f5;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .cart {
            background-color: maroon;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 20px;
        }


        /* Style for book images */
        .book-image {
            max-width: 50px;
            max-height: 70px;
            margin-right: 10px;
        }

        /* Style for the personal information and payment form */
        .personal-info-form {
            margin-top: 20px;
        }

        .personal-info-form label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
        }

        .personal-info-form input, .personal-info-form select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        /* Style for payment options */
        .payment-options {
            margin-top: 10px;
        }

        .payment-option {
            display: flex;
            align-items: center;
            margin-right: 20px;
            cursor: pointer;
        }

        .payment-icon {
            font-size: 24px;
            margin-right: 10px;
        }

        /* Style for the payment page */
        .payment-page {
            display: none;
            text-align: center;
        }

        .payment-page.active {
            display: block;
        }
        .btn-container {
            text-align: center;
        }

        .btn {
            background-color: maroon;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <h1>BookShop</h1>
    </header>
    <div class="container">
        <div class="cart" id="cart">
            <!-- Cart will be dynamically populated here -->
            <h2 class="text-light">Your Cart</h2>
            <ul id="cart-items">
            </ul>
        </div>
        <div>
            <!-- Message to fill out information and Buy Now button -->
            <p>Fill out your information to complete the purchase:</p>
            <form action="buy.php" method="post">
                <div class="personal-info-form">
                <label for="first-name">First Name:</label>
                <input type="text" id="firstname" name="firstname" required>

                <label for="last-name">Last Name:</label>
                <input type="text" id="lastname" name="lastname" required>

                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>

                <label for="contact-number">Contact Number:</label>
                <input type="tel" id="contact" name="contact" required>

                <label for="pincode">PIN Code:</label>
                <input type="text" id="pincode" name="pincode" required>

                <div class="btn-container mt-3">
                    <button type="submit" class="btn rounded-5">submit</button>
                </div>
            </form>
        </div>
        
    </div>
</div>

   
</body>

</html>
