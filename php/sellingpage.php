<?php
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "bookselling";
    $conn = mysqli_connect($host, $username, $password, $database);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    } 
}
?>   
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell Your Book</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            
            background-image: url('bgi4.jpg');
            background-size: cover;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 30px;
           background-color: whitesmoke;
            background-size: cover;
            color: #000; /* Text color for the form content */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);



        }

        .header {
            background-color:maroon; /* Maroon background color for the header */
            color: #efe9e9;
            padding: 13px;
            text-align: center;
        }

        label, input {
            display: block;
            margin-bottom: 20px;
        }

        .error {
            color: red;
        }

        input[type="file"] {
            margin-top: 10px;
        }

        .btn-container {
            text-align: center;
        }

        .btn {
            background-color: maroon; /* Darker maroon color for the button */
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        /* Media query for smaller screens */
        @media (max-width: 600px) {
            .container {
                max-width: 100%;
            }
        }

        .textbox-label {
            display: inline-block;
            width: 40%;
            padding: 0.3rem;
            text-align: right;
        }

        .textbox-input {
            display: inline-block;
            width: 55%;
            padding: 0.3rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Fill information to sell book</h1>
        </div>
        <form id="book-sell-form" action="#" method="POST">
            <div class="textbox-label">
                <label for="first-name">First Name:</label>
            </div>
            
            <div class="textbox-input">
                <input type="text" id="first-name" name="first-name" required>
            </div>

            <div class="textbox-label">
                <label for="last-name">Last Name:</label>
            </div>
            <div class="textbox-input">
                <input type="text" id="last-name" name="last-name" required>
            </div>

            <div class="textbox-label">
                <label for="book-title">Book Title:</label>
            </div>
            <div class="textbox-input">
                <input type="text" id="book-title" name="book-title" required>
            </div>

            <div class="textbox-label">
                <label for="book-price">Price (in Rupees):</label>
            </div>
            <div class="textbox-input">
                <input type="number" id="book-price" name="book-price" required>
            </div>

            <div class="textbox-label">
                <label for="address">Address:</label>
            </div>
            <div class="textbox-input">
                <textarea id="address" name="address" required></textarea>
            </div>

            <div class="textbox-label">
                <label for="mobile-no">Mobile Number:</label>
            </div>
            <div class="textbox-input">
                <input type="tel" id="mobile-no" name="mobile-no" required>
            </div>

            <div class="textbox-label">
                <label for="book-image">Upload Book Image:</label>
            </div>
            <div class="textbox-input">
                <input type="file" id="book-image" name="book-image" accept="image/*" required>
            </div>

            <div class="textbox-label">
                <label for="seller-email">Seller Email:</label>
            </div>
            <div class="textbox-input">
                <input type="email" id="seller-email" name="seller-email" required>
            </div>


            <div class="btn-container">
                <button class="btn" type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
