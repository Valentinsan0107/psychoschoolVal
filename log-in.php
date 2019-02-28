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
				<h1 class="phrase-formulaire">Tu n as pas encore de compte PsychoSchool ? </h1>
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
			echo "<div>";
			if ($_GET['loginsignup'] == "nomatch") {
				echo "<p>Les mots de pass ne sont pas les mème</p>";
			}
			if ($_GET['loginsignup'] == "admin") {
				echo "<p>Vous ne pouver pas vous appeller admin</p>";
			}
			if ($_GET['loginsignup'] == "usertaken") {
				echo "<p>Pseudo deja existant</p>";
			}
			if ($_GET['loginsignup'] == "emailtaken") {
				echo "<p>Email deja existant</p>";
			}
			if ($_GET['loginsignup'] == "errorsignup") {
				echo "<p>Il y a eu une erreur</p>";
			}
			if ($_GET['loginsignup'] == "mailprobleme") {
				echo "<p>Il y a eu un probleme avec l envoie de mail</p>";
			}
			if ($_GET['loginsignup'] == "signuperror") {
				echo "<p>Mot de pass ou identifian incorect</p>";
			}
			if ($_GET['loginsignup'] == "notconfirmed") {
				echo "<p>Votre email n a pas ete confirmer</p>";
			}
			if ($_GET['loginsignup'] == "capcha") {
			  echo "<p>Veuiller confirmer le capcha</p>";
			    }
			echo "</div>";
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

