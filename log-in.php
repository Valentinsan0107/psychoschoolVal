<?php
	include_once("includes/modules/header.php");
?>

<div class="conteneur-création-connexion">
			
		
			<div class="connexion-compte">
				<h1 class="phrase-formulaire">Tu as déjà un compte ? Connecte-toi !</h1>
			<form class="form-connexion" action="/psychoschoolVal/includes/backrownd/compts/login.php" method="POST">
				<input class="input-connexion" minlength="6" maxlength="50"  type="text" name="uid" placeholder="Pseudo ou email">
				<input class="input-connexion" minlength="6" maxlength="20" type="password" name="password" placeholder="Mot de passe">
				<button class="button-connexion" type="submit" name="submit">Valider</button>
			</form>
			</div>
			<div class="création-compte">
				<h1 class="phrase-formulaire">Tu n'as pas encore de compte PsychoSchool ? </h1>
				<form class="form-création" action="/psychoschoolVal/includes/backrownd/compts/signup.php" method="POST">
					<input class="input-création" maxlength="50" type="email" name="email" placeholder="Email">
					<input class="input-création" maxlength="20" minlength="6" type="text" name="pseudo" placeholder="Ton pseudo">
					<input class="input-création" maxlength="20" minlength="6" type="password" name="pwd" placeholder="Mot de passe">
					<input class="input-création" maxlength="20" minlength="6" type="password" name="pwd2" placeholder="Confirmer le mot de passe">
          <div class="g-recaptcha" data-sitekey="6LfF13sUAAAAAOyzfAUI4ry12EmDFt4ocdKCq5iv"></div>
					<button class="button-création" type="submit" name="submit">Valider</button>
				</form>
			</div>
		
			
			
			<!--La div d en dessous te permet de lui metre un classe pr modifeier le text afficher en en fessant .(nom class) p en css(tu connait), esite pas a modifier les texte a l interieur ) -->
			<div>
				<?php
				if (isset($_GET['loginsignup'])) {
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
				}
				?>
			</div>

	</div>




	<?php
	include_once("includes/modules/footer.php");
?>