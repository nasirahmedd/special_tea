<?php
$name = $_POST["name"];
$Visitoremail = $_POST["email"];
$message = $_POST["message"];


$email_from = "mdn697988@gmail.com";
$email_subject = "new form submition";
$email_body = "User Name: $name.\n".
                "User Email: $Visitoremail.\n".
                "User Message: $message.\n.";


$to = "nasirahmed66@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Repley-to: $Visitoremail \r\n";
mail($to , $email_subject , $email_body ,$headers);

header("Location: index.html")
?>