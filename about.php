<?php
  include_once("includes/modules/header.php");
?>


<div class="formulaire-contact-conteneur-2">

	<div class="whoareyou">


		<div class="donation">
			<h2 class="titre-donation">Faire un don</h2>
			<p class="texte-donation">
				Vous voulez soutenir le site ? Vous pouvez nous faire un don via <b>Paypal</b> afin de continuer à faire vivre le site.
			</p>
			<div class="image-donation-conteneur" style="cursor: pointer;" onclick="window.location='http://google.com';">
				<a class="lien-image-donation" href="#"><img src="img/paypal.png"></a>
				<p class="phrase-donation">Faire un don via paypal</p>
			</div>
		</div>

		<div class="about-you">
			<h2 class="texte-about-you">À propos</h2>
			<p class="texte-donation">Tu retrouveras sur notre site des <b>conseils</b> et des <b>ressources</b> pour :</p>
			<ol class="liste-bonus-about">
				<li class="bonus-about"><a class="texte-bonus-about">Gagner en visibilité</a></li>
				<li class="bonus-about"><a class="texte-bonus-about">Gagner des abonnés</a></li>
				<li class="bonus-about"><a class="texte-bonus-about">Gagner en qualité</a></li>
				<li class="bonus-about"><a class="texte-bonus-about">Gagner de l'argent</a></li>
			</ol>
		</div>

		
	</div>

	<form class="form-formulaire-contact-2" action="includes/backrownd/formulairecontacte.php" method="POST">
		<h1 class="titre-formulaire-contact">NOUS CONTACTER :</h1>
		<div class="conteneur-email-nom">
			<input class="input-formulaire-contact-3" type="text" name="nom" minlength="5" maxlength="80" placeholder="Prénom et Nom" required>
			<input class="input-formulaire-contact-2" type="email" name="email" minlength="5" maxlength="80" placeholder="Email" required>
		</div>
			<input class="input-formulaire-contact" type="text" name="sujet" minlength="5" maxlength="200" placeholder="Sujet" required>
			<textarea class="textarea-formulaire-contact" placeholder="Ecris ton message..." name="message" minlength="5" maxlength="80000" required></textarea>
			<div class="g-recaptcha" data-sitekey="6LfF13sUAAAAAOyzfAUI4ry12EmDFt4ocdKCq5iv"></div>
			<button class="button-formulaire-contact" type="submit" name="submit">Envoyer</button>
		</form>
		<?php
		if (isset($_GET['formulaire'])) {
			if ($_GET['formulaire'] == 'captcha') {
				echo "<p>Le captcha n a pas ete valider</p>";
			}
			if ($_GET['formulaire'] == 'mailprobleme') {
				echo "<p>L envoie du mail a eu un probleme</p>";
			}
			if ($_GET['formulaire'] == 'sucess') {
				echo "<p>Le mail c est bien envoyer</p>";
			}
			if ($_GET['formulaire'] == 'error') {
				echo "<p>Il y a eu une erreur</p>";
			}
		}
		?>

		<div class="pub">
			
		</div>

</div>





<?php
  include_once("includes/modules/footer.php");
?>