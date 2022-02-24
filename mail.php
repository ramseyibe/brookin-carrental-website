<?php
$message_sent = false;
if(isset($_POST['email']) && $_POST['email'] ){
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
       
        $userName = $_POST("name");
        $userEmail = $_POST("Email");
        $message = $_POST("message");
        
        $to = "anthplg12@gmail.com";
        $body = "";
        $body ="From:".$userName. "\r\n";
        $body ="Email:".$userEmail. "\r\n";
        $body ="message:".$message. "\r\n";
        mail($to,$message,$body);
        $message_sent = true;
    }
}
?>

