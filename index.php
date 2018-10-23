

<?php

$TITLEpage="Psychoschool - Homepage";
	include_once("includes/modules/header.php");
?>






<div class="conteneur-un">
	<div class="photo">
		<a class="lien-photo" href="#">En savoir plus...</a>
	</div>



	<div class="apport-liste">
	<div class="contenu-conteneur">
		<div class="contenu">
			<img class="icon-promesse" src="img/icon-increase.png">
		</div>
			<h3 class="titre-promesse">Augmente ta moyenne</h1>
			<p class="paragraphe-promesse">Obtient des meilleurs notes sans augmenter ton temps de travail quotidien...</p>
	</div>
	<div class="contenu-conteneur">
		<div class="contenu">
			<img class="icon-promesse" src="img/icon-test.png">
		</div>
			<h3 class="titre-promesse">Apprends rapidement</h1>
			<p class="paragraphe-promesse">Obtient des meilleurs notes sans augmenter ton temps de travail quotidien...</p>
	</div>
	<div class="contenu-conteneur">
		<div class="contenu">
			<img class="icon-promesse" src="img/icon-brain.png">
		</div>
			<h3 class="titre-promesse">Mémorise durablement</h1>
			<p class="paragraphe-promesse">Obtient des meilleurs notes sans augmenter ton temps de travail quotidien...</p>
	</div>
	
	</div>



</div>

<div class="présentation-livre">
	<h1 class="texte-présentation">Retrouves les meilleurs livres pour aller plus loin...</h1>
	<img class="icone-division" src="img/icone-livre.png">
</div>







<div class="conteneur-présentation-page-livre">
	<div class="phrase-présentation-livre-conteneur">

		<h1 class="phrase-présentation-livre">Tu recherches un livre sur le développement personnel ? Tu trouveras surement celui qu'il te faut...</h1>

		<a class="button-livre" href="livre.php">En savoir plus...</a>
		
	</div>

	<div class="slider">
	<figure class="figure-slide">
	<div class="slide">
		<p class="paragraphe-slide"> Slide 1 </p>
		<img class="image-slide" src="img/slide-1.jpg">
	</div>

	<div class="slide">
		<p class="paragraphe-slide"> Slide 2 </p>
		<img class="image-slide" src="img/slide-2.jpg">
	</div>

	<div class="slide">
		<p class="paragraphe-slide"> Slide 3 </p>
		<img class="image-slide" src="img/slide-3.jpg">
	</div>

	<div class="slide">
		<p class="paragraphe-slide"> Slide 4 </p>
		<img class="image-slide" src="img/slide-4.jpg">
	</div>

	<div class="slide">
		<p class="paragraphe-slide"> Slide 5 </p>
		<img class="image-slide" src="img/slide-5.jpg">
	</div>
</figure>
</div>
	
</div>











	























</div>

<div class="présentation-blanc">
	<h1 class="texte-présentation-blanc">En apprendre plus sur nous ? Besoin de conseils ?</h1>
	<img class="icone-division" src="img/icone-contact.png">
</div>

<div class="conteneur-deux">

	<div class="blanc-deux">
		<form class="form-formulaire-contact" action="includes/backrownd/formulairecontacte.php" method="GET">
			<input class="input-formulaire-contact" type="email" name="email" minlength="5" maxlength="80" placeholder="Email">
			<input class="input-formulaire-contact" type="text" name="nom" minlength="5" maxlength="80" placeholder="Nom">
			<input class="input-formulaire-contact" type="text" name="sujet" minlength="5" maxlength="200" placeholder="Sujet">
			<textarea class="textarea-formulaire-contact" placeholder="Ecris ton message..." name="message" minlength="5" maxlength="80000"></textarea>
			<button class="button-formulaire-contact" type="submit" name="submit">Envoyer</button>
		</form>
	</div>
	
	<div class="blanc-un">

	</div>
		
	<div class="blanc-trois">

		<a class="lien-social" href="#">
			<div class="reseau">
				<img class="image-reseaux" src="img/facebook-logo.png">
			
			</div>
		</a>

		<a class="lien-social" href="#">
			<div class="reseau">
				<img class="image-reseaux" src="img/youtube-logo.png">

			</div>
		</a>

		<a class="lien-social" href="#">
			<div class="reseau">
				<img class="image-reseaux" src="img/vine-logo.png">

			</div>
		</a>

		<a class="lien-social" href="#">
			<div class="reseau">
				<img class="image-reseaux" src="img/twitter-logo.png">

			</div>
		</a>

		<a class="lien-social" href="#">
			<div class="reseau">
				<img class="image-reseaux" src="img/instagram-logo.png">

			</div>
		</a>
		
	</div>

</div>

<div class="pub">
		Espace pub ?
	</div>

	
<?php
	include_once("includes/modules/footer.php");
?>
		