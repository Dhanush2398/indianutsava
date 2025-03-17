<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$address= $_POST['address'];
$number = $_POST['phone'];
$package = $_POST['package'];

$to ="";
$subject = "New Package Request from $name";
$txt = "Name = ". $name ."\r\nMobileNumber = " . $number .  "\r\nEmail = " . $email .  "\r\nAddress =" . $address .  "\r\nPackage =" . $package ;
$headers = "From: $name <$email>" . "\r\n" .
"CC:";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
