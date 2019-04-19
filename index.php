<?php

$TITLEpage="Accueil";
$descriptionpage="Page accueil site Psychoschool";
$motclefspage="page,accueil,site";
	include_once("includes/modules/header.php");
?>

<div id="background-test-1">

	<div class="conteneur-phrase-présentation-matériel-3">
		<h2 class="phrase-présentation-matériel">PROGRESSE RAPIDEMENT</h2>
		
	
	<div class="sous-titre"></div>

		<p class="paragraphe-présentation-matériel">
			Tu as besoin de conseils ? De précisions sur un produit ? Utilise notre formulaire contact situé ci-dessous. Chacune des demandes que nous recevons est traitée en moins de 24 heures.
		</p>

		<p class="paragraphe-présentation-matériel-deux">
			Que ce soit pour avoir un son plus nette ou une image de meilleure qualité, retrouve pour chaque produit nos propres conseils et astuces pour te guider.
		</p>

		<a class="en-savoir-plus-matériel-lien" href="#">En savoir plus</a>

	</div>

</div>

<div class="apport-liste">
	<div class="contenu-conteneur">
		<div class="contenu">
			<img class="icon-promesse-1" src="img/icon-increase.png" alt="">
		</div>
			<h2 class="titre-promesse">GAGNE DES ABONNÉS</h2>
			<p class="paragraphe-promesse">Augmente rapidement ton nombre d'abonnés de façon significative grâce à nos conseils</p>
	</div>
	<div class="contenu-conteneur-2">
		<div class="contenu">
			<img class="icon-promesse-2" src="img/icon-test.png" alt="">
		</div>
			<h2 class="titre-promesse">GAGNE DE L'ARGENT</h2>
			<p class="paragraphe-promesse">Obtient des meilleurs notes sans augmenter ton temps de travail quotidien...</p>
	</div>
	<div class="contenu-conteneur">
		<div class="contenu">
			<img class="icon-promesse-3" src="img/icon-brain.png" alt="">
		</div>
			<h2 class="titre-promesse">GAGNE EN VISIBILITÉ</h2>
			<p class="paragraphe-promesse">Obtient des meilleurs notes sans augmenter ton temps de travail quotidien...</p>
	</div>
	
	</div>
		<div class="en-savoir-plus-apports-conteneur">
			<a class="en-savoir-plus-apports-lien" href="#">En savoir plus</a>
		</div>

<div id="background-test-2">
	<div class="conteneur-phrase-présentation-matériel">
		<h2 class="phrase-présentation-matériel">LE MATÉRIEL LE PLUS ADAPTÉ</h2>
		
	
	<div class="sous-titre"></div>

		<p class="paragraphe-présentation-matériel">
			Grâce à notre descriptif détaillé, retrouve les caméras, micros ou encore écrans les plus adaptés à tes besoins et à ton budget pour réaliser des vidéos de meilleure qualité et augmenter rapidement ton audience.
		</p>

		<p class="paragraphe-présentation-matériel-deux">
			Que ce soit pour avoir un son plus nette ou une image de meilleure qualité, retrouve pour chaque produit nos propres conseils et astuces pour te guider.
		</p>

		<a class="en-savoir-plus-matériel-lien" href="#">En savoir plus</a>

	</div>
</div>

<div class="conteneur-derniers-articles-zone-dessus-zone-coté">

<div class="conteneur-derniers-articles">
	<?php
	include_once("includes/backrownd/dph.php");
	include_once("includes/modules/fonctionContain.php");
    $sql = "SELECT * FROM article WHERE article_thechnique='1' ORDER BY article_id DESC";
	$result = mysqli_query($conn, $sql);
	$resultChek = mysqli_num_rows($result);

	if ($resultChek > 0) {
		$compt = 0;
		while ($row = mysqli_fetch_assoc($result)) {
			if ($compt<4) {
				$compt += 1;
				$lien = "article.php?narticle=".$row['article_nom'];
				$date = $row['article_date'];
				$date = substr($date, 0, -9);
				include_once("includes/modules/fonctionContain.php");

  				$date = datetotext($date);
				echo '<div class="zone-derniers-articles">';
				if (file_exists("uploads/imagecouverture/".$row['article_id'].".jpg")) {
					echo '<img class="photo-derniers-articles" src="uploads/imagecouverture/'.$row['article_id'].'.jpg">';
				}elseif (file_exists("uploads/imagecouverture/".$row['article_id'].".png")) {
					echo '<img class="photo-derniers-articles" src="uploads/imagecouverture/'.$row['article_id'].'.png">';
				}else{
					echo '<img class="photo-derniers-articles" src="uploads/imagecouverture/base.png">';
				}
				echo '<div class="conteneur-titre-date-derniers-articles">
						<a class="lien-titre-derniers-articles" href="'.$lien.'"><h2 class="titre-derniers-articles">'.$row['article_titre'].'</h2></a>

						<div class="conteneur-date-calendrier"><img class="image-calendrier" class="photo-derniers-articles" src="img/calendrier.png" alt="">
						<h3 class="date-derniers-articles">'.$date.'</h3></div>

					</div>
				</div>';
			}
		}
	}
	?>
</div>

	<div class="zone-coté">
		<h2 class="titre-zone-coté">Les meilleurs ventes</h2>
		<?php
			    $sql = "SELECT * FROM article WHERE article_thechnique='0' ORDER BY article_id DESC";
				$result = mysqli_query($conn, $sql);
				$resultChek = mysqli_num_rows($result);

				if ($resultChek > 0) {
					$compt = 0;
					while ($row = mysqli_fetch_assoc($result)) {
						if ($compt<3) {
							$compt += 1;
							$lien = "fiche_produit.php?narticle=".$row['article_nom'];
							$date = $row['article_date'];
							$date = substr($date, 0, -9);
			  				$date = datetotext($date);

			  				$contenu = $row['article_resumer'];
			  				if (strlen($contenu) > 152) {
			  					$contenu = substr($contenu, 0, 152);
			  					$contenu = $contenu."...";
			  				}

							echo '<div class="aperçu-matériel">';

									if (file_exists("uploads/imagecouverture/".$row['article_id'].".jpg")) {
										echo '<div class="photo-aperçu-matériel" style="background-image: url(uploads/imagecouverture/'.$row['article_id'].'.jpg);">
										
									</div>';
									}elseif (file_exists("uploads/imagecouverture/".$row['article_id'].".png")) {
										echo '<div class="photo-aperçu-matériel" style="background-image: url(uploads/imagecouverture/'.$row['article_id'].'.png);">
										
									</div>';
									}else{
										echo '<div class="photo-aperçu-matériel" style="background-image: url(img/iphone.jpg);">
										
									</div>';
									}
									echo'
									<div class="description-aperçu-matériel">
										<h2 class="titre-aperçu-matériel">'.$row['article_titre'].'</h2>

									<div class="conteneur-date-calendrier">
									
									<h3 class="date-aperçu-matériel">'.$date.'</h3>
									</div>
										<p class="paragraphe-aperçu-matériel">'.$contenu.'</p>

										<a class="lien-article-3" href="'.$lien.'">En savoir plus</a>

									</div>

								</div>';
						}
					}
				}
		?>

	</div>

</div>

<div id="background-test-3">
	<div class="conteneur-phrase-présentation-matériel-2">
		<h2 class="phrase-présentation-matériel">BESOIN D'AIDE ? DE CONSEILS ?</h2>
		
	
	<div class="sous-titre"></div>

		<p class="paragraphe-présentation-matériel">
			Tu as besoin de conseils ? De précisions sur un produit ? Utilise notre formulaire contact situé ci-dessous. Chacune des demandes que nous recevons est traitée en moins de 24 heures.
		</p>

		<p class="paragraphe-présentation-matériel-deux">
			Que ce soit pour avoir un son plus nette ou une image de meilleure qualité, retrouve pour chaque produit nos propres conseils et astuces pour te guider.
		</p>

		<a class="en-savoir-plus-matériel-lien" href="#">En savoir plus</a>

	</div>

	</div>
<div class="formulaire-contact-conteneur" style=''>
	<form class="form-formulaire-contact" action="includes/backrownd/formulairecontacte.php" method="POST">
		<h2 class="titre-formulaire-contact">NOUS CONTACTER :</h2>
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
</div>	

<?php
	include_once("includes/modules/footer.php");
?>
		