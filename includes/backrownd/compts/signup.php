<?php



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';



include_once('../oldpage.php');

if(!isset($_POST['submit'])){
	header("Location: ".$nompage."?signup=error");
	exit();
}else{
	
	include_once('../dph.php');
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pseudo = mysqli_real_escape_string($conn, $_POST['pseudo']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	$pwd2 = mysqli_real_escape_string($conn, $_POST['pwd2']);

	if(empty($email) || empty($pseudo) || empty($pwd) || empty($pwd2)){
		header("Location: ".$nompage."?signup=empty");
		exit();

	}else{
		if ($pwd != $pwd2) {
			header("Location: ".$nompage."?signup=nomatch");
			exit();

		} else {
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ".$nompage."?signup=email");        
				exit(); 

			} else {
				$uidmin = strtolower($pseudo);
				if (strpos($uidmin, "admin") !== FALSE) {
					header("Location: ".$nompage."?signup=admin");        
					exit(); 

				}else{
					if(strlen($pseudo)<6 || strlen($pwd)<6){
						if(strlen($pseudo)<6){
							header("Location: ".$nompage."?signup=shortpseudo");        
							exit(); 
						}else{
							header("Location: ".$nompage."?signup=shortpwd");        
							exit();
						}
					}else{
						$sql = "SELECT * FROM users WHERE user_pseudo='$pseudo'";
						$result = mysqli_query($conn, $sql);
						$resultChek = mysqli_num_rows($result);
						if ($resultChek >0) {
							header("Location: ".$nompage."?signup=usertaken");
							exit();

						} else {
							$sql = "SELECT * FROM users WHERE user_email='$email'";
							$result = mysqli_query($conn, $sql);
							$resultChek = mysqli_num_rows($result);
							if ($resultChek >0) {
								header("Location: ".$nompage."?signup=emailtaken");
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
								$mail->Username = "testphpvalvic@gmail.com";
								$mail->Password = "lolmdrptdr";
								$mail->setFrom('testphpvalvic@gmail.com', 'First Last');
								$mail->addReplyTo('testphpvalvic@gmail.com', 'First Last');
								$mail->addAddress($email, $pseudo);
								$mail->Subject = 'confirmation inscription';
								$mail->msgHTML($content, __DIR__);
								if (!$mail->send()) {
								    header("Location: ".$nompage."?signup=mailprobleme");
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
	}
}