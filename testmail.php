<?php
require_once "Mail.php";

$from = "erika.vastberg@gmail.com";
$to = 'erika.vastberg@gmail.com';

$host = "ssl://smtp.gmail.com";
$port = "465";
$username = 'erika.vastberg@gmail.com';
$password = 'Dinmamaborkel92';

$subject = "test";
$body = "test";

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
echo("Message successfully sent!\n");
}
?>