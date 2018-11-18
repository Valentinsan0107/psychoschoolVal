<?php

$TITLEpage="Psychoschool - Homepage";
	include_once("includes/modules/header.php");
?>

<div id="background-test-1">
	<div class="conteneur-phrase-présentation-matériel-3">
		<h1 class="phrase-présentation-matériel">PROGRESSE RAPIDEMENT</h1>
		
	
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
			<img class="icon-promesse" src="img/icon-increase.png">
		</div>
			<h3 class="titre-promesse">AUGMENTE TA MOYENNE</h1>
			<p class="paragraphe-promesse">Obtient des meilleurs notes sans augmenter ton temps de travail quotidien...</p>
	</div>
	<div class="contenu-conteneur">
		<div class="contenu">
			<img class="icon-promesse" src="img/icon-test.png">
		</div>
			<h3 class="titre-promesse">APPRENDS RAPIDEMENT</h1>
			<p class="paragraphe-promesse">Obtient des meilleurs notes sans augmenter ton temps de travail quotidien...</p>
	</div>
	<div class="contenu-conteneur">
		<div class="contenu">
			<img class="icon-promesse" src="img/icon-brain.png">
		</div>
			<h3 class="titre-promesse">MEMORISE DURABLEMENT</h1>
			<p class="paragraphe-promesse">Obtient des meilleurs notes sans augmenter ton temps de travail quotidien...</p>
	</div>
	
	</div>
		<div class="en-savoir-plus-apports-conteneur">
			<a class="en-savoir-plus-apports-lien" href="#">En savoir plus</a>
		</div>

<div id="background-test-2">
	<div class="conteneur-phrase-présentation-matériel">
		<h1 class="phrase-présentation-matériel">LE MATÉRIEL LE PLUS ADAPTÉ</h1>
		
	
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
						<a class="lien-titre-derniers-articles" href="'.$lien.'"><h6 class="titre-derniers-articles">'.$row['article_titre'].'</h6></a>
						<h6 class="date-derniers-articles">'.$date.'</h6>
					</div>
				</div>';
			}
		}
	}
	?>
</div>

	<div class="zone-coté">
		<figure class="figure-slide">
	<div class="slide">
		<p class="paragraphe-slide"> Micro </p>
		<img class="image-slide" src="img/slide-1.jpg">
	</div>

	<div class="slide">
		<p class="paragraphe-slide"> Ecran </p>
		<img class="image-slide" src="img/slide-2.jpg">
	</div>

	<div class="slide">
		<p class="paragraphe-slide"> Ordinateur </p>
		<img class="image-slide" src="img/slide-3.jpg">
	</div>

	<div class="slide">
		<p class="paragraphe-slide"> Caméra </p>
		<img class="image-slide" src="img/slide-4.jpg">
	</div>

	<div class="slide">
		<p class="paragraphe-slide"> Gadget </p>
		<img class="image-slide" src="img/slide-5.jpg">
	</div>
</figure>
	</div>

</div>

<div id="background-test-3">
	<div class="conteneur-phrase-présentation-matériel-2">
		<h1 class="phrase-présentation-matériel">BESOIN D'AIDE ? DE CONSEILS ?</h1>
		
	
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

	<form class="form-formulaire-contact" action="includes/backrownd/formulairecontacte.php" method="GET">
			<input class="input-formulaire-contact" type="email" name="email" minlength="5" maxlength="80" placeholder="Email">
			<input class="input-formulaire-contact" type="text" name="nom" minlength="5" maxlength="80" placeholder="Nom">
			<input class="input-formulaire-contact" type="text" name="sujet" minlength="5" maxlength="200" placeholder="Sujet">
			<textarea class="textarea-formulaire-contact" placeholder="Ecris ton message..." name="message" minlength="5" maxlength="80000"></textarea>
			<button class="button-formulaire-contact" type="submit" name="submit">Envoyer</button>
		</form>
	
<?php
	include_once("includes/modules/footer.php");
?>
		