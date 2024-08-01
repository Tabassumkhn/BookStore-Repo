<?php
$name = $_POST['name'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$contact = $_POST['contact']; 
//database connection
$conn = new mysqli('localhost','root','','project');
if ($conn->connect_error) {
    die('connection failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(name, lname, email, password, gender, contact) values(?,?,?,?,?,?)");
    $stmt->bind_param("sssssi",$name, $lname, $email, $password, $gender, $contact);
    $stmt->execute();
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
}
?>