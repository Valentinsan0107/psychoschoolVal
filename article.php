<?php
include_once("includes/backrownd/dph.php");
$nomarticle = $_GET['narticle'];

$sql = "SELECT * FROM article WHERE article_nom='$nomarticle'";
$result = mysqli_query($conn, $sql);
$resultChek = mysqli_num_rows($result);

if ($resultChek == 1) {
	$row = mysqli_fetch_assoc($result);
	if (!empty($row['article_titrehaut'])) {
		$TITLEpage = "PsychoSchool - ".$row['article_titrehaut'];
	}
}
include_once("includes/modules/header.php");

if (isset($_GET['narticle'])) {
	echo '<div class="article-complet-conteneur">';



	$sql = "SELECT * FROM article WHERE article_nom='$nomarticle'";
	$result = mysqli_query($conn, $sql);
	$resultChek = mysqli_num_rows($result);

	if ($resultChek != 1) {
		echo "<p>error</p>";
	}else{
		$row = mysqli_fetch_assoc($result);
		$contenueArticle = $row['article_contenue'];
		echo $contenueArticle;
	}

		$sql = "SELECT * FROM likes WHERE like_page='$nomarticle'";
		$result = mysqli_query($conn, $sql);
		$resultChek = mysqli_num_rows($result);

		echo '<div>';
		echo '<p class="nombre-like-article">'.$resultChek.'<p>';

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
				echo '<form method="GET" action="/psychoschoolVal/includes/backrownd/addlike.php">
						<input type="hidden" name="nomfile" value="'.$nomarticle.'">
						<button class="bouton-like" type="submit" name="like"><img class="icon-like" src="img/like-black-heart-button.png"></button>
					</form>';
			}elseif ($userlikechek == 1) {
				echo '<form method="GET" action="/psychoschoolVal/includes/backrownd/addlike.php">
						<input type="hidden" name="nomfile" value="'.$nomarticle.'">
						<button type="submit" name="dislike">dislike</button>
					</form>';
			}
		}
		echo '</div>';
		echo "</div>";

		$sql = "SELECT * FROM comentaires WHERE coment_page='$nomarticle'";
		$result = mysqli_query($conn, $sql);
		$resultChek = mysqli_num_rows($result);

		if ($resultChek > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				$idcom = $row['coment_id'];
				$pseudo = $row['coment_createur'];
				$date = $row['coment_date'];
				$date = substr($date, 0, -9);
				$content = $row['coment_contenue'];

				echo '<div class="div-commentaire">
						<p class="pseudo-date">'.$pseudo.' - '.$date.'</p>
						<p class="p-commentaire">'.$content.'</p>
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
			echo '<p class="message-commentaire-connexion">Connectez vous pour poster un commentaire</p>';
		} else {
			echo '<form class="form-formulaire-comment" action="/psychoschoolVal/includes/backrownd/addcoment.php" method="POST">
				<textarea class="textarea-formulaire-comment" name="coment" placeholder="Ecris ton commentaire..."></textarea>
				<input type="hidden" name="nomfile" value="'.$nomarticle.'">
				<button class="button-formulaire-comment" type="submit" name="submitsolo">Publier</button>
			</form>';
		}


		
}else{
echo "<p>error</p>";
}	

	include_once("includes/modules/footer.php");
?>

<img src="">