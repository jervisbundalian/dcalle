<?php

//get data from form
$name = $_POST['name'];
$email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];

$to = "a30046109@30046109.2021.labnet.nz";

$txt ="
    Name = ". $name . "\r\n
    Email = " . $email . "\r\n
    Message =" . $message
;

$headers = "From: " . $name;
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

//redirect
header("Location:../index.php?action=sent");

?>