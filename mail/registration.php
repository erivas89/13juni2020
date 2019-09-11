<?php
require_once "Mail.php";

$from = "erika.vastberg@gmail.com";
$to = 'erika.vastberg@gmail.com';

$host = "ssl://smtp.gmail.com";
$port = "465";
$username = 'erika.vastberg@gmail.com';
$password = 'Dinmamaborkel92';

$name = $_POST['name'];
$yesno = $_POST['yesno'];
$guest = $_POST['guest'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$food = $_POST['food'];


$subject = "Här kommer anmälan från $name";


$body = "Namn: $name \n Jag kommer: $yesno \n Gästens namn: $guest \n E-post: $email \n Telefon: $phone \n Specialkost: $food";






$fields = array('name' => 'Name', 'surname' => 'Surname', 'phone' => 'Phone', 'email' => 'Email', 'message' => 'Message'); 

$headers = array ('From' => $from, 'To' => $to,'Subject' => $subject);
$smtp = Mail::factory('smtp',
array ('host' => $host,
'port' => $port,
'auth' => true,
'username' => $username,
'password' => $password));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
echo($mail->getMessage());
} else {
echo("Tack för ditt svar!\n");
}

?>