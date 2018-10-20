<?php
include_once("includes/modules/header.php");

include_once("includes/backrownd/dph.php");
if (isset($_GET['narticle'])) {
	$nomarticle = $_GET['narticle'];



	$sql = "SELECT * FROM article WHERE article_nom='$nomarticle'";
	$result = mysqli_query($conn, $sql);
	$resultChek = mysqli_num_rows($result);

	if ($resultChek != 1) {
		echo "<p>error</p>";
	}else{
		$row = mysqli_fetch_assoc($result);
		$contenueArticle = $row['article_contenue'];
		echo $contenueArticle;

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


		$sql = "SELECT * FROM likes WHERE like_page='$nomarticle'";
		$result = mysqli_query($conn, $sql);
		$resultChek = mysqli_num_rows($result);

		echo '<p>'.$resultChek.'<p>';

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
						<button type="submit" name="like">like</button>
					</form>';
			}elseif ($userlikechek == 1) {
				echo '<form method="GET" action="/psychoschoolVal/includes/backrownd/addlike.php">
						<input type="hidden" name="nomfile" value="'.$nomarticle.'">
						<button type="submit" name="dislike">dislike</button>
					</form>';
			}
		}

	}
}else{
echo "<p>error</p>";
}	

	include_once("includes/modules/footer.php");
?>