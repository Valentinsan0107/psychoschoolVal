<?php
	session_start();
	if (isset($_SESSION['u_id']) ==  false) {
		include_once("includes/modules/header.php");
		echo '<div class="conteneur-général-3">

		<div class="conteneur-création-connexion">';
		if (isset($_SERVER['HTTP_REFERER'])) {
			if (strpos($_SERVER['HTTP_REFERER'], "log-in.php") === false) {
				$_SESSION['url'] = $_SERVER['HTTP_REFERER'];
			}
		}


		echo '<div class="connexion-compte">
				<h1 class="phrase-formulaire">Tu as déjà un compte ? Connecte-toi !</h1>
			<form class="form-connexion" action="/psychoschoolVal/includes/backrownd/compts/login.php" method="POST">
				<input class="input-connexion" minlength="6" maxlength="50"  type="text" name="uid" placeholder="Pseudo ou email" required>
				<input class="input-connexion" minlength="6" maxlength="20" type="password" name="password" placeholder="Mot de passe" required>
				<button class="button-connexion" type="submit" name="submit" required>Valider</button>
			</form>
			</div>
			<div class="création-compte">
				<h1 class="phrase-formulaire">Tu n\'as pas encore de compte PsychoSchool ? </h1>
				<form class="form-création" action="/psychoschoolVal/includes/backrownd/compts/signup.php" method="POST">
					<input class="input-création" maxlength="50" type="email" name="email" placeholder="Email" required>
					<input class="input-création" maxlength="20" minlength="6" type="text" name="pseudo" placeholder="Ton pseudo" required>
					<input class="input-création" maxlength="20" minlength="6" type="password" name="pwd" placeholder="Mot de passe" required>
					<input class="input-création" maxlength="20" minlength="6" type="password" name="pwd2" placeholder="Confirmer le mot de passe" required>
          <div class="g-recaptcha" data-sitekey="6LfF13sUAAAAAOyzfAUI4ry12EmDFt4ocdKCq5iv"></div>
					<button class="button-création" type="submit" name="submit">Valider</button>
				</form>
			</div>
		';
		if (isset($_GET['loginsignup'])) {
			echo "<div class='centrage-conteneur-message-erreur-log'><div id='conteneur-message-erreur-log'><h1 class='titre-message-erreur-log'>Il y a un soucis</h1>";
			if ($_GET['loginsignup'] == "nomatch") {
				echo "<p class='message-erreur-log'>Les mots de passe ne correspondent pas</p>";
			}
			if ($_GET['loginsignup'] == "admin") {
				echo "<p class='message-erreur-log'>Ce nom d'utilisateur n'est pas disponible</p>";
			}
			if ($_GET['loginsignup'] == "usertaken") {
				echo "<p class='message-erreur-log'>Ce nom d'utilisateur n'est pas disponible</p>";
			}
			if ($_GET['loginsignup'] == "emailtaken") {
				echo "<p class='message-erreur-log'>Cet adresse-email est déja associée à un compte</p>";
			}
			if ($_GET['loginsignup'] == "errorsignup") {
				echo "<p class='message-erreur-log'>Il y a eu une erreur</p>";
			}
			if ($_GET['loginsignup'] == "mailprobleme") {
				echo "<p class='message-erreur-log'>Il y a eu un problème avec l'envoie du mail de confirmation</p>";
			}
			if ($_GET['loginsignup'] == "signuperror") {
				echo "<p class='message-erreur-log'>Le mot de passe ou l'adresse-email est incorrect</p>";
			}
			if ($_GET['loginsignup'] == "notconfirmed") {
				echo "<p class='message-erreur-log'>Votre adresse-email n'est pas encore confirmée</p>";
			}
			if ($_GET['loginsignup'] == "capcha") {
			  echo "<p class='message-erreur-log'>Veuillez confirmer le capcha</p>";
			    }
			echo "<a class='close-message-erreur-log' onclick='closelog()''>Fermer</a></div></div>";
		}		

	}else{
		echo "bite";
		header("Location: index.php");
	}

?>
</div>	

</div>

	<?php
	include_once("includes/modules/footer.php");
?>

