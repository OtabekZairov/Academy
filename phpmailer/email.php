<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	require 'vendor/src/Exception.php';
	require 'vendor/src/PHPMailer.php';
	require 'vendor/src/SMTP.php';

	// Instantiation and passing `true` enables exceptions
	$mail = new PHPMailer(true);

	try {
	    //Server settings
	    $mail->SMTPDebug = 0;                      // Enable verbose debug output
	    $mail->isSMTP();                                            // Send using SMTP
	    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
	    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
	    $mail->Username   = 'example@gmail.com';                     // SMTP username
	    $mail->Password   = 'YourPassword';                               // SMTP password
	    $mail->SMTPSecure = "tls";         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
	    $mail->Port       = 587;                                    // TCP port to connect to
	    $mail->CharSet = "UTF-8";

	    //Recipients
	    $mail->setFrom($email, $name);
	    $mail->addAddress('recipient@gmail.com', 'name');     // Add a recipient

	    // Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = 'My Message';                        // Your Subject
	    $mail->Body    = $message;

	    $mail->send();
	    echo 'Message has been sent';
	} catch (Exception $e) {
	    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
}else{
	echo "Email didn't sent";
}

