<?php
session_start();
if (isset($_POST['send'])) {
	# code...
	$to="ambofchrist@gmail.com";
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$usermessage=$_POST['message'];
	$subject="Contact from Lightkids.org Website ContactForm";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// Create email headers
$headers .= 'From: '.$email."\r\n".
    'Reply-To: '.$email."\r\n" .
    'X-Mailer: PHP/' . phpversion();
// Compose a simple HTML email message
$message = '<html><body>';
$message .= '<h1 style="color:#f40;">Hi!</h1>';
$message .= '<p style="color:#080;font-size:18px;">There is a contact from visitor of Lightkids.org website. Following are the contact Details</p>';
$message .= '<p style="color:#080;font-size:18px;">
Name: '.$name.'<br>
Email: '.$email.'<br>
Phone: '.$phone.'<br>
Message: '.$usermessage.'<br>
</p><br><i>Regards,<br>Webmaster Lightkids.org</i>';

$message .= '</body></html>';
// Sending email
if(mail($to, $subject, $message, $headers)){
//    echo 'Your mail has been sent successfully.';
$_SESSION['sendcontact']=1;
header('Location: ' . $_SERVER['HTTP_REFERER']);
} else{
    echo 'Unable to send email. Please try again.';
}
}
?>