<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$messaage = "information as on receiver's id\n
name: $reserver\n
id number: $id\
tel: $tel\n
age: $age\n\n
delivery info\n
date: $date\n
time: $time\n
city: $city\n
street address: $street\n\n
car info\n
name: $carname\n
plate number: $platenumber\n\n
selected payment account: $account";

$email_from = "anthplg12@gmail.com";
$email_subject = "Reserver's\car information";
$email_body = "$message";

$to = "anthplg@gmail.com";
$headers = "From: $email_from . '\r\n'";
$headers = "Reply-To: $visitor_email . '\r\n'";

if (mail($to,$email_subject,$email_body,$headers)){
    echo "hello $reserver your request was succesfully sent. We shall verify and send the account details for deposit of your payment shortly";
}
else{
    echo "An unexpeted error occured";
}
?>