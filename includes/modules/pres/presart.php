<?php
if ($resultChek > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$nbADefiler += 1;
		if ($nbADefiler <= $NbAParPageMax*$nbpageart && $nbADefiler >= ($NbAParPageMax*$nbpageart-$NbAParPageMax+1)) {
					$nompageserv = $row['article_nom'];
		$idart = $row['article_id'];
		$lien = "article.php?narticle=".$nompageserv;
		echo '<div class="photo-article-zone-conteneur">';
		if (file_exists("uploads/imagecouverture/".$idart.".jpg")) {
			echo "<div class='photo-article' style='background-image: url(uploads/imagecouverture/".$idart.".jpg); background-repeat: no-repeat; background-size: cover;'></div>";
		}elseif (file_exists("uploads/imagecouverture/".$idart.".png")) {
			echo "<div class='photo-article' style='background-image: url(uploads/imagecouverture/".$idart.".png); background-repeat: no-repeat; background-size: cover;'></div>";
		}else{
			echo "<div class='photo-article' style='background-image: url(uploads/imagecouverture/base.png); background-repeat: no-repeat; background-size: cover;'></div>";
		}
		$date = $row['article_date'];
		$date = substr($date, 0, -9);
		include_once("includes/modules/fonctionContain.php");

		$date = datetotext($date);
		$resumer = $row['article_resumer'];
		if (strlen($resumer) > 573) {
			$resumer = substr($resumer, 0, 573);
			$resumer = $resumer."...";
		}

		$titre = $row['article_titre'];

		$contenue = <<<EBT
			<div class="zone-article">
				<h2 class="titre-article">$titre</h2>

				
				<div class="conteneur-date-calendrier-2"><img class="image-calendrier" class="photo-derniers-articles" src="img/calendrier.png" alt="">
							<h3 class="date-aperçu-article">$date</h3></div>
			

				<p class="texte-article">$resumer</p>
				
			<div class="conteneur-module-comment">
				
				<div class="conteneur-bouton"><div class="new-design-like" onclick="window.location='$lien';"><a class="lien-icon-conversation" href="$lien">
					<img class="icon-conversation" src="img/conversation.png" alt="">
				</a>
EBT;
		echo $contenue;

		$sql = "SELECT * FROM comentaires WHERE coment_page='$nompageserv'";
		$result3 = mysqli_query($conn, $sql);
		$resultChek = mysqli_num_rows($result3);

		echo '<p class="nombre-commentaire-article">'.$resultChek.'</p></div>';

		$sql = "SELECT * FROM likes WHERE like_page='$nompageserv'";
		$result3 = mysqli_query($conn, $sql);
		$resultChek = mysqli_num_rows($result3);

		echo <<<EBT
		<div class="new-design-like"  onclick="window.location='$lien';"><a class="lien-icon-conversation" href="$lien">
				<img class="icon-like" src="img/like-black-heart-button.png" alt="">
			</a>
			<p class="nombre-like-article">$resultChek</p></div></div>
EBT;

		echo '<a class="lien-article" href="'.$lien.'">Lire plus...</a></div>
		
</div>
		<div class="conteneur-publicité-mobile">
				<div class="pub-mobile"></div>
			</div>
			
		</div>';
		}elseif ($nbADefiler > $NbAParPageMax*$nbpageart) {
			break(1);
		}
	}
}
?>