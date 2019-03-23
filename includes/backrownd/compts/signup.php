<?php



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';



include_once('../oldpage.php');

if(!isset($_POST['submit'])){
	header("Location: ../../../log-in.php?loginsignup=errorsignup");
	exit();
}else{
	
	include_once('../dph.php');
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pseudo = mysqli_real_escape_string($conn, $_POST['pseudo']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	$pwd2 = mysqli_real_escape_string($conn, $_POST['pwd2']);

	$secret = "6LfF13sUAAAAAL3wwmHDqJUA688U-pQNlf42FHr8";
	$response = $_POST['g-recaptcha-response'];
	$remoteip = $_SERVER['REMOTE_ADDR'];
	
	$api_url = "https://www.google.com/recaptcha/api/siteverify?secret=" 
	    . $secret
	    . "&response=" . $response
	    . "&remoteip=" . $remoteip ;
	
	$decode = json_decode(file_get_contents($api_url), true);
	
	if ($decode['success'] != true) {
		header("Location: ../../../log-in.php?loginsignup=capcha");
	}else{
		if ($pwd != $pwd2) {
			header("Location: ../../../log-in.php?loginsignup=nomatch");
			exit();

		} else {
			$uidmin = strtolower($pseudo);
			if (strpos($uidmin, "admin") !== FALSE) {
				header("Location: ../../../log-in.php?loginsignup=admin");        
				exit(); 

			}else{
				$sql = "SELECT * FROM users WHERE user_pseudo='$pseudo'";
				$result = mysqli_query($conn, $sql);
				$resultChek = mysqli_num_rows($result);
				if ($resultChek >0) {
					header("Location: ../../../log-in.php?loginsignup=usertaken");
					exit();

				} else {
					$sql = "SELECT * FROM users WHERE user_email='$email'";
					$result = mysqli_query($conn, $sql);
					$resultChek = mysqli_num_rows($result);
					if ($resultChek >0) {
						header("Location: ../../../log-in.php?loginsignup=emailtaken");
						exit();

					}else{
						$hasedmail = password_hash($email, PASSWORD_DEFAULT);
							
						$pos = strpos($nompage, "psychoschoolVal");
						$longeur = strlen($nompage);
						$pref = substr($nompage, 0, $pos+15-$longeur);


						$lien = $pref."/emailsent.php"."?confirmed&mail=".$hasedmail;

						$content = str_replace(
						    array('%pseudo%', '%lienconf%'),
						    array($pseudo, $lien),
						    file_get_contents('mailconfirm.html')
						);

						$mail = new PHPMailer;
						$mail->isSMTP();
						$mail->SMTPDebug = 0;
						$mail->Host = 'smtp.gmail.com';
						$mail->Port = 587;
						$mail->SMTPSecure = 'tls';
						$mail->SMTPAuth = true;
						$mail->Username = "youtubtips.fr@gmail.com";
						$mail->Password = "NeS9vh74G";
						$mail->setFrom('youtubtips.fr@gmail.com', 'youtubtips');
						$mail->addReplyTo('youtubtips.fr@gmail.com', 'youtubtips');
						$mail->addAddress($email, $pseudo);
						$mail->Subject = 'confirmation inscription';
						$mail->msgHTML($content, __DIR__);
						if (!$mail->send()) {
						    header("Location: ../../../log-in.php?loginsignup=mailprobleme");
						    exit();
						} 


						$hasedpwd = password_hash($pwd, PASSWORD_DEFAULT);
						$sql = "INSERT INTO users (user_email, user_pseudo, user_password) VALUES('$email', '$pseudo', '$hasedpwd');";
						$result = mysqli_query($conn, $sql);


						header_remove();	
						header("Location: /psychoschoolVal/emailsent.php?envoyer");
						exit();
					}
				}
			}
		}
	}
}