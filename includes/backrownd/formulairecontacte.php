<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

include_once('oldpage.php');

if(isset($_GET['submit'])){
	$nom = $_GET['nom'];
	$sujet = $_GET['sujet'];
	$email = $_GET['email'];
	$message = $_GET['message'];



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
	    header("Location: ".$nompage."?formulaire=mailprobleme");
	    exit();
	}else{
		header("Location: ".$nompage."?formulaire=sucess");
	    exit();
	} 
}else{
	header("Location: ".$nompagesuite."formulaire=error");
	exit();
}