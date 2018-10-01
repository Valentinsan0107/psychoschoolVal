<?php
	include_once("includes/modules/header.php");
    include_once("includes/backrownd/dph.php");
?>

<div class="article-conteneur">
<?php
    $sql = "SELECT * FROM techniqueArticle";
	$result = mysqli_query($conn, $sql);
	$resultChek = mysqli_num_rows($result);

	if ($resultChek > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$nompageserv = $row['Techarticle_page'];
			$sql = "SELECT * FROM article WHERE article_page='$nompageserv'";
			$result2 = mysqli_query($conn, $sql);
			$resultChek = mysqli_num_rows($result2);
			if ($resultChek === 1) {
				while ($row2 = mysqli_fetch_assoc($result2)) {
					echo '<div class="zone-article">
						<h1 class="titre-article">'.$row2['article_title'].'</h1>
						<p class="texte-article">'.$row2['article_contenue'].'</p>
						<a class="lien-article" href="/'.$nompageserv.'">Lire plus...</a>
					<div class="conteneur-module-comment">
						<a class="lien-icon-conversation" href="/'.$nompageserv.'">
							<img class="icon-conversation" src="img/conversation.png">
						</a>';

					$sql = "SELECT * FROM comentaires WHERE coment_page='$nompageserv'";
					$result3 = mysqli_query($conn, $sql);
					$resultChek = mysqli_num_rows($result3);

					echo $resultChek;

					$sql = "SELECT * FROM likes WHERE like_page='$nompageserv'";
					$result3 = mysqli_query($conn, $sql);
					$resultChek = mysqli_num_rows($result3);

					echo $resultChek;

					echo '</div>
					</div>';

				}
			}
		}
	}
?>
</div>

<?php
	include_once("includes/modules/footer.php");
?>
