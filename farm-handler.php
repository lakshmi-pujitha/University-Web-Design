<?php

$name=$-POST['name'];
$visitor-email=$-POST['email'];
$subject=$-POST['subject'];
$message=$-POST['message'];

$email_from='info@yourwebsite.com';

$email_subject='New form Submission';

$email_body="User Name: $name.\n".
             "User Email:$visitor-email.\n".
             "Subject:$subject.\n".
             "User Message:$message";

$to = 'peddireddylakshmi14@gmail.com' ;
  
$headers="Form:$email_from \r\n"  ;

$headers.="Reply-To:$visitor-email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location:contact.html");

?>