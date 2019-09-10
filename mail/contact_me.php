<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['yesno'])     ||
   empty($_POST['guest'])     ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['food'])      ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$yesno = strip_tags(htmlspecialchars($_POST['yesno']));
$guest = strip_tags(htmlspecialchars($_POST['guest']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$food = strip_tags(htmlspecialchars($_POST['food']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
$to = 'erika.vastberg@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "OSA från:  $name";
$email_body = "Anmälningsinformation.\n\n"."Here are the details:\n\nName: $namen\n\nJag kan komma: $yesno\n\nEv gäst: $guest\n\nE-post: $email_address\n\nTelefon: $\n\nSpecialkost: $food\n\nÖvrigt:\n$message";
$headers = "Från: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>
