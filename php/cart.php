<?php
$cardholder = $_POST['cardholder'];
$cardnumber = $_POST['cardnumber'];
$cvv = $_POST['cvv'];
if (strlen($cardnumber) != 16 || strlen($cvv) != 3) {
    echo '<script>alert("Please enter a 16-digit card number and a 3-digit CVV.");</script>';
} else
{
    $conn = new mysqli('localhost','root','','project');
if ($conn->connect_error) {
    die('connection failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into debitcard(cardholder, cardnumber, cvv) values(?,?,?)");
    $stmt->bind_param("sii", $cardholder, $cardnumber, $cvv);
    $stmt->execute();
    //echo "<h1>Thank you for perchase...</h1>";
    $stmt->close();
    $conn->close();
}
//database connection

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Order Placed Successfully</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    .popup {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        padding: 20px;
        border: 1px solid #ccc;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        text-align: center;
    }
    h2 {
        color: maroon;
    }
    p {
        color: #666;
    }
    button {
        background-color: goldenrod;
        color: #fff;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        font-size: 16px;
        margin-top: 10px;
    }
</style>
</head>
<body>
<div class="popup">
    <h2><b>Order Placed Successfully!</h2></b>
    <p><b>Thank you for your purchase. Your order has been successfully placed.</p></b>
    <button onclick="closePopup()">Close</button>
</div>

<script>
    function closePopup() {
        window.close(); // This will close the popup window/tab
    }
</script>
</body>
</html>
