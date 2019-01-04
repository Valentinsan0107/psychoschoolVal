<?php
if ($resultChek > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$nbADefiler += 1;
		if ($nbADefiler <= $NbAParPageMax*$nbpageart && $nbADefiler >= ($NbAParPageMax*$nbpageart-$NbAParPageMax+1)) {
		$nompageserv = $row['article_nom'];
		$idart = $row['article_id'];
		$lien = "article.php?narticle=".$nompageserv;
		echo '<div class="photo-article-zone-conteneur">';
		echo '<div class="conteneur-widget-youtuber-photo-article">';
		if (file_exists("uploads/imagecouverture/".$idart.".jpg")) {
			echo "<div class='photo-article-2' style='background-image: url(uploads/imagecouverture/".$idart.".jpg); background-repeat: no-repeat; background-size: cover;'></div>";
		}elseif (file_exists("uploads/imagecouverture/".$idart.".png")) {
			echo "<div class='photo-article-2' style='background-image: url(uploads/imagecouverture/".$idart.".png); background-repeat: no-repeat; background-size: cover;'></div>";
		}else{
			echo "<div class='photo-article-2' style='background-image: url(uploads/imagecouverture/base.png); background-repeat: no-repeat; background-size: cover;'></div>";
		}
		echo "<div class='widget-youtuber'>
					<h1 class='phrase-widget-youtuber'>
						Utilisé par :
					</h1>";
		if (file_exists("uploads/imageyoutubeur/".$idart."-1.jpg")) {
			echo "<div class='badge-youtuber' style='background-image: url(uploads/imageyoutubeur/".$idart."-1.jpg); background-repeat: no-repeat; background-size: cover;'>					
					</div>";
		}	
		if (file_exists("uploads/imageyoutubeur/".$idart."-2.jpg")) {
			echo "<div class='badge-youtuber' style='background-image: url(uploads/imageyoutubeur/".$idart."-2.jpg); background-repeat: no-repeat; background-size: cover;'>					
					</div>";
		}		
		if (file_exists("uploads/imageyoutubeur/".$idart."-3.jpg")) {
			echo "<div class='badge-youtuber' style='background-image: url(uploads/imageyoutubeur/".$idart."-3.jpg); background-repeat: no-repeat; background-size: cover;'>					
					</div>";
		}			
		echo "</div>
		</div>";
		$date = $row['article_date'];
		$date = substr($date, 0, -9);
		include_once("includes/modules/fonctionContain.php");

		$date = datetotext($date);	
		echo'<div class="zone-article">
			<h1 class="titre-article">'.$row['article_titre'].'</h1>

			<div class="conteneur-date-aperçu-article">

			<h6 class="date-aperçu-article">'.$date.'</h6>

			<h6 class="date-aperçu-article">Prix :   '.$row['article_prix'].'$</h6>

			<h6 class="date-aperçu-article">Note :   '.$row['article_note'].'/10</h6>

			</div>


			<p class="texte-article">'.$row['article_resumer'].'</p>
		<div class="conteneur-module-comment">
			<a class="lien-icon-conversation" href="'.$lien.'">
				<img class="icon-conversation" src="img/conversation.png">
			</a>';

		$sql = "SELECT * FROM comentaires WHERE coment_page='$nompageserv'";
		$result3 = mysqli_query($conn, $sql);
		$resultChek = mysqli_num_rows($result3);

		echo '<p class="nombre-commentaire-article">'.$resultChek.'</p>';

		$sql = "SELECT * FROM likes WHERE like_page='$nompageserv'";
		$result3 = mysqli_query($conn, $sql);
		$resultChek = mysqli_num_rows($result3);

		echo '<a class="lien-icon-conversation" href="'.$lien.'">
				<img class="icon-like" src="img/like-black-heart-button.png">
			</a>
			<p class="nombre-like-article">'.$resultChek.'</p>
			<a class="lien-article-2" href="fiche_produit.php">En savoir plus</a>
			</div>
			<div class="amazon-lien">
		<p class="texte-amazon-lien" href="#">Tu souhaites acheter cet article ?</p>
		<a class="lien-amazon-lien" target="_blank" href="'.$row['article_lien'].'">Clique ici<img class="image-amazon-lien" src="img/logo-amazon.png"></a>
		</div>';

		echo '</div>
		</div>';
		}elseif ($nbADefiler > $NbAParPageMax*$nbpageart) {
			break(1);
		}
	}

}
?>