<?php
/*the mail() function cannot be used on localhost for now*/
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = nl2br($_POST['message']);

$content = "<i>This message is from <b>" . $name . "</b> with the email <b>" . $email . "</b> and the phone number <b>" . $phone . "</b><br>The message is as below:</i><br><br>" . $message;

$to = "lim1227december@gmail.com";
$subject = "Message from " . $name;

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

mail($to, $subject, $content, implode("\r\n", $headers));

/*Success message*/
echo "<p style='font-weight: normal;'><b>Thank you for getting in touch!</b><br>
We appreciate you contacting us. One of our colleagues will get back in touch with you soon!<br>Have a great day!</p>";