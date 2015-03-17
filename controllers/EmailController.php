<?php
//EmailController.php
class EmailController {

	public $uri;
	
	public function __construct() {
		
	}
		
	public function send_action() {

		if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
		    // do post
		    header("Location: /pages/404");
			exit;
		} 
		
		$subject = $_REQUEST['subject'] . ' Programista; Website: Form Submission '; // Subject of your email
		$to = 'office@programista.pro';  //Recipient's E-mail

		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= "From: " . $_REQUEST['email'] . "\r\n"; // Sender's E-mail
		$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

		$message .= 'Name: ' . $_REQUEST['name'] . "<br>";
		$message .= $_REQUEST['message'];

		if (@mail($to, $subject, $message, $headers))
		{
			// Transfer the value 'sent' to ajax function for showing success message.
			echo 'sent';
		}
		else
		{
			// Transfer the value 'failed' to ajax function for showing error message.
			echo 'failed';
		}

	}
}
