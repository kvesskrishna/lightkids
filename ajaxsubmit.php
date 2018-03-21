<?php
$to="ambofchrist@gmail.com";
	$name=$_POST['subname'];
	$email=$_POST['submail'];
	$subject="Subscription request from Lightkids.org Website";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// Create email headers
$headers .= 'From: '.$email."\r\n".
    'Reply-To: '.$email."\r\n" .
    'X-Mailer: PHP/' . phpversion();
// Compose a simple HTML email message
$message = '<html><body>';
$message .= '<h1 style="color:#f40;">Hi!</h1>';
$message .= '<p style="color:#080;font-size:18px;">There is a subscription request from visitor of Lightkids.org website. Following are the contact Details</p>';
$message .= '<p style="color:#080;font-size:18px;">
Name: '.$name.'<br>
Email: '.$email.'<br>
</p><br><i>Regards,<br>Webmaster Lightkids.org</i>';

$message .= '</body></html>';
// Sending email
if(mail($to, $subject, $message, $headers)){
 echo 'Subscription Successful! Thank you for your interest in our work.';
} else{
    echo 'Unable to request subscription. Please try again.';
}
?>