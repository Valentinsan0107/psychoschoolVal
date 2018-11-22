<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

include_once('oldpage.php');

if(isset($_POST['submit'])){
	$nom = $_POST['nom'];
	$sujet = $_POST['sujet'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$secret = "6LfF13sUAAAAAL3wwmHDqJUA688U-pQNlf42FHr8";
	$response = $_POST['g-recaptcha-response'];
	$remoteip = $_SERVER['REMOTE_ADDR'];
	
	$api_url = "https://www.google.com/recaptcha/api/siteverify?secret=" 
	    . $secret
	    . "&response=" . $response
	    . "&remoteip=" . $remoteip ;
	
	$decode = json_decode(file_get_contents($api_url), true);
	
	if ($decode['success'] != true) {
		header("Location: ".$nompagesuite."formulaire=captcha");
		exit();
	}else{

		$mail = new PHPMailer;
		$mail->isSMTP();
		$mail->SMTPDebug = 0;
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 587;
		$mail->SMTPSecure = 'tls';
		$mail->SMTPAuth = true;
		$mail->Username = "testphpvalvic@gmail.com";
		$mail->Password = "lolmdrptdr";
		$mail->setFrom($email, $nom);
		$mail->addReplyTo($email, $nom);
		$mail->addAddress('testphpvalvic@gmail.com', 'First Last');
		$mail->Subject = $sujet;
		$mail->msgHTML($message, __DIR__);
		
		if (!$mail->send()) {
		    header("Location: ".$nompagesuite."formulaire=mailprobleme");
		    exit();
		}else{
			header("Location: ".$nompagesuite."formulaire=sucess");
		    exit();
		}
	}
}else{
	header("Location: ".$nompagesuite."formulaire=error");
	exit();
}