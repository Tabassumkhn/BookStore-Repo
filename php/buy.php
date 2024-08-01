<!DOCTYPE html>
<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$pincode = $_POST['pincode'];
//$contact = $_POST['contact'];
//database connection
$conn = new mysqli('localhost','root','','project');
if ($conn->connect_error) { 
    die('connection failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into perchaseinfo(firstname, lastname, address, contact, pincode) values(?, ?, ?, ?, ?)");
    $stmt->bind_param("sssii", $firstname, $lastname, $address, $contact, $pincode);
    $stmt->execute();
    //echo "Registration successfully...";
    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Methods in India</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #8B0000; /* Maroon color */
        }
        .payment-method {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .payment-method a {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #333;
            font-size: 18px;
        }
        .payment-method img {
            width: 40px;
            margin-right: 20px;
        }
        .payment-method i {
            margin-right: 10px;
            font-size: 24px;
        }
        .payment-method .active {
            color: #8B0000; /* Maroon color */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Select Payment Method</h2>
        <div class="payment-method">
            <a href="debitcard.html" id="debitcard" class="active" onclick="toggleActive(this)">
                <i class="fab fa-cc-visa"></i> Debit/Credit Card
            </a>
        </div>
        <div class="payment-method">
            <a href="upi.html" id="upi" class="active"  onclick="toggleActive(this)">
                <i class="fab fa-google-wallet"></i> UPI (Unified Payments Interface)
            </a>
        </div>
        <div class="payment-method">
            <a href="#" id="netbanking" onclick="toggleActive(this)">
                <i class="fas fa-university"></i> Net Banking
            </a>
        </div>
        <div class="payment-method">
            <a href="wallet.html" id="wallet" class="active"  onclick="toggleActive(this)">
                <i class="fab fa-paypal"></i> Wallet
            </a>
        </div>
        <div class="payment-method">
            <a href="cashondelivery.html" id="cod" class="active"  onclick="toggleActive(this)" >
                <i class="fas fa-money-bill"></i> Cash on Delivery
            </a>
        </div>
    </div>

    <script>
        function toggleActive(link) {
            document.querySelectorAll('.payment-method a').forEach(function(item) {
                item.classList.remove('active');
            });
            link.classList.add('active');
        }
    </script>
</body>
</html>
