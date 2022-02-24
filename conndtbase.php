<?php
$fullname = $_POST['fullname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

$conn = new mysqli('localhost','root','','carrentalproject');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into signup(fullname, username, email, password, cpassword)
       values(?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss",$fullname, $username, $email, $password, $cpassword);
    $stmt->execute();
   //this header is used to redirect the user to login page after account creation
    header("Location: login.php? SIGN UP SUCCESSFUL");
    exit();
    $stmt->close();
    $conn->close();
}

