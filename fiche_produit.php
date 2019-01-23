<?php
  include_once("includes/modules/header.php");
?>

<div class="conteneur-fiche-technique">

<div class="whoareyou-3">
	<?php
	include_once("includes/backrownd/dph.php");
	$nomarticle = "";
	if (isset($_GET['narticle'])) {
		$nomarticle = $_GET['narticle'];
	}


	$sql = "SELECT * FROM article WHERE article_nom='$nomarticle'";
	$result = mysqli_query($conn, $sql);
	$resultChek = mysqli_num_rows($result);

	if ($resultChek == 1) {
		$row = mysqli_fetch_assoc($result);
		if (!empty($row['article_titrehaut'])) {
			$TITLEpage = "PsychoSchool - ".$row['article_titrehaut'];
		}
		if ($row['article_thechnique'] == 0) {
			if (file_exists("uploads/imagecouverture/".$row['article_id'].".jpg")) {
				echo "<div class='photo-produit' style='background-image: url(uploads/imagecouverture/".$row['article_id'].".jpg); background-repeat: no-repeat; background-size: cover; width: 250px;height: 200px;margin: 45px auto 0 auto'>
		
				</div>";
			}elseif (file_exists("uploads/imagecouverture/".$row['article_id'].".png")) {
				echo "<div class='photo-produit' style='background-image: url(uploads/imagecouverture/".$row['article_id'].".png); background-repeat: no-repeat; background-size: cover; width: 250px;height: 200px;margin: 45px auto 0 auto'>
		
				</div>";
			}else{
				echo "<div class='photo-produit' style='background-image: url(uploads/imagecouverture/base.png); background-repeat: no-repeat; background-size: cover; width: 250px;height: 200px;margin: 45px auto 0 auto'>
		
				</div>";
			}
			echo '<div class="details-produit">
			    <li class="nom-produit">'.$row['article_titre'].'</li>
				<li class="critère">Prix :<a class="lien-critère">'.$row['article_prix'].'$</a></li>
				<li class="critère">Notre note :<a class="lien-critère">'.$row['article_note'].'/10</a></li>
			<div class="amazon-lien">
				<a class="lien-amazon-lien-2" href="'.$row['article_lien'].'">Acheter sur Amazon<img class="image-amazon-lien" src="img/logo-amazon.png"></a>
			</div>

			</div>
				<div class="widget-youtuber-2">
			<h1 class="phrase-widget-youtuber">
						Utilisé par :
					</h1>';
			if (file_exists("uploads/imageyoutubeur/".$row['article_id']."-1.jpg")) {
			echo "<div class='badge-youtuber' style='background-image: url(uploads/imageyoutubeur/".$row['article_id']."-1.jpg); background-repeat: no-repeat; background-size: cover;'>					
					</div>";
			}	
			if (file_exists("uploads/imageyoutubeur/".$row['article_id']."-2.jpg")) {
				echo "<div class='badge-youtuber' style='background-image: url(uploads/imageyoutubeur/".$row['article_id']."-2.jpg); background-repeat: no-repeat; background-size: cover;'>					
						</div>";
			}		
			if (file_exists("uploads/imageyoutubeur/".$row['article_id']."-3.jpg")) {
				echo "<div class='badge-youtuber' style='background-image: url(uploads/imageyoutubeur/".$row['article_id']."-3.jpg); background-repeat: no-repeat; background-size: cover;'>					
						</div>";
			}
			echo "	</div>

			</div>";
		echo '<div class="conteneur-avis-conseils">';

		$ficherHTLMArticle = "uploads/html/".$row['article_id'].".html";
		$ficherPHPArticle = "uploads/html/".$row['article_id'].".php";

		$deblien = "uploads/images/";
		$finlien = "-".$row['article_id'];

		if (file_exists($ficherHTLMArticle) == true) {
			$content = str_replace(array('%deblien%', '%finlien%'), array($deblien, $finlien),file_get_contents($ficherHTLMArticle));
			echo $content;
		}elseif (file_exists($ficherPHPArticle) == true) {
			$content = str_replace(array('%deblien%', '%finlien%'), array($deblien, $finlien),file_get_contents($ficherPHPArticle));
			echo $content;
		}else
			echo "error";
		}


		$sql = "SELECT * FROM likes WHERE like_page='$nomarticle'";
		$result = mysqli_query($conn, $sql);
		$resultChek = mysqli_num_rows($result);

		echo '<div class="conteneur-module-comment-2">';

		$userlikechek = 0;

		if($resultChek > 0 && isset($_SESSION['u_pseudo'])){
			while ($row = mysqli_fetch_assoc($result)) {
				if ($row['like_user'] == $_SESSION['u_pseudo']) {
					$userlikechek = 1;
				}
			}
		}
		if (isset($_SESSION['u_id'])) {
			if ($userlikechek == 0) {
				echo '<form method="POST" action="/psychoschoolVal/includes/backrownd/addlike.php">
						<input type="hidden" name="nomfile" value="'.$nomarticle.'">
						<button class="bouton-like" type="submit" name="like"><img class="icon-like" src="img/like-black-heart-button.png"></button>
					</form>';
			}elseif ($userlikechek == 1) {
				echo '<form method="POST" action="/psychoschoolVal/includes/backrownd/addlike.php">
						<input type="hidden" name="nomfile" value="'.$nomarticle.'">
						<button class="bouton-dislike" type="submit" name="dislike"><img class="icon-dislike" src="img/like-black-heart-button.png"></button>
					</form>';
			}
		}else{
			echo '<img class="icon-dislike" src="img/like-black-heart-button.png">';
		}

		echo '<p class="nombre-like-article-entier">'.$resultChek.'<p>';

		echo '<a class="lien-share-1" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//localhost/psychoschoolVal/article.php?narticle=pastore"><img class="icon-share" src="img/facebook-share.png">Partager</a>
		<a class="lien-share-2" href="https://twitter.com/home?status=http%3A//localhost/psychoschoolVal/article.php?narticle=pastore"><img class="icon-share" src="img/twitter-share.png">Tweeter</a>
		<a class="lien-share-3" href="https://plus.google.com/share?url=http%3A//localhost/psychoschoolVal/article.php?narticle=pastore"><img class="icon-share-2" src="img/google-share.png">Partager</a></div>';

	echo "</div>";
		$sql = "SELECT * FROM comentaires WHERE coment_page='$nomarticle'";
		$result = mysqli_query($conn, $sql);
		$resultChek = mysqli_num_rows($result);

		if ($resultChek > 0) {
			include_once("includes/modules/fonctionContain.php");

			while ($row = mysqli_fetch_assoc($result)) {
				$idcom = $row['coment_id'];
				$pseudo = $row['coment_createur'];
				$date = $row['coment_date'];
				$date = substr($date, 0, -9);
				$date = datetotext($date);
				$content = $row['coment_contenue'];

				echo '<div class="div-commentaire-2">

				<div class="identité-commentaire">
						<img class="photo-identité-commentaire" src="img/user.png">
						<p class="pseudo-date">'.htmlspecialchars($pseudo).'<p class="juste-date">'.$date.'</p></p>
				</div>
						<p class="p-commentaire">'.htmlspecialchars($content).'</p>
					</div>';

				if (isset($_SESSION['u_pseudo']) && $pseudo == $_SESSION['u_pseudo']) {
					echo '<form class="input-commentaire" action="/psychoschoolVal/includes/backrownd/addcoment.php" method="POST">
							<input type="hidden" name="idcoment" value="'.$idcom.'">
							<button class="input-commentaire" type="submit" name="submitsupp">&times;</button>
						</form>';
				}
			}
		}

			/*formulaire pr le comentaire*/
		if (!isset($_SESSION['u_id'])) {
			echo '
			<div class="conteneur-attention-connexion">
				<img class="image-attention" src="/psychoschoolVal/img/attention.png">
				<p class="message-commentaire-connexion">Connectez vous pour poster un commentaire ou aimer la page</p>
			</div>';
		} else {
			echo '<form class="form-formulaire-comment" action="/psychoschoolVal/includes/backrownd/addcoment.php" method="POST">
				<textarea class="textarea-formulaire-comment" name="coment" placeholder="Ecris ton commentaire..." required></textarea>
				<input type="hidden" name="nomfile" value="'.$nomarticle.'">
				<button class="button-formulaire-comment" type="submit" name="submitsolo">Publier</button>
			</form>';
		}

		}
	
?>


	
</div>



<div class="pub-5">
	
</div>



</div>




<?php
  include_once("includes/modules/footer.php");
?>