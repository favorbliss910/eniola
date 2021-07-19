<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "favorbliss910@yahoo.com";
$subject = "Mail From Website";

$headers "From: ".$name. "\r\n" .
"CC: ";

$txt = "You have received an e-mail from ".$name ."\r\nEmail: " .$email ."\r\n
 Message: ".message;

 if($email!=NULL){
     mail($to, $subject, $txt, $headers);
 }

header('Location:pop.html');
