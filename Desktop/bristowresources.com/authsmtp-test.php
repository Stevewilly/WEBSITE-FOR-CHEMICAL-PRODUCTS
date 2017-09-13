<html><body>
<?php
include('Mail.php');
$recipients = 'sysco@syscobristowresources.com'; //CHANGE
$headers['From']= 'sysco@syscobristowresources.com'; //CHANGE
$headers['To']= 'sysco@syscobristowresources.com'; //CHANGE
$headers['Subject'] = 'Test message';
$body = 'Test message'; // Define SMTP Parameters
$params['host'] = 'mail.authsmtp.com';
$params['port'] = '25';
$params['auth'] = 'PLAIN';
$params['username'] = 'Terry'; //CHANGE
$params['password'] = 'maximesysco1001#'; //CHANGE

/* The following option enables SMTP debugging and will print the SMTP conversation to the page, it will only help with authentication issues, if PEAR::Mail is not installed you won't get this far. */

$params['debug'] = 'true'; // Create the mail object using the Mail::factory method
$mail_object =& Mail::factory('smtp', $params); // Print the parameters you are using to the page

foreach ($params as $p){
 echo "$p<br />";
}

// Send the message
$mail_object->send($recipients, $headers, $body);

?>
</body></html>