<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['companyname'])   ||
      
    empty($_POST['country'])   ||
   empty($_POST['state'])   ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   
   
  
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$companyname = strip_tags(htmlspecialchars($_POST['companyname']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));

$country = strip_tags(htmlspecialchars($_POST['country']));
$state = strip_tags(htmlspecialchars($_POST['state']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   

$to = 'example@exaample.com'; 
$email_subject = "Sysco bristow resources (chemical products):  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\ncompany Name: $companyname\n\ncountry: $country\n\nstate: $state\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@exaample.com\n"; 
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>
