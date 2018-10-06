<?php
	include_once("includes/modules/header.php");
    include_once("includes/backrownd/dph.php");
?>

<div class="article-conteneur">
<?php
    $sql = "SELECT * FROM article WHERE article_thechnique='1' AND article_priorite='1'";
	$result = mysqli_query($conn, $sql);
	$resultChek = mysqli_num_rows($result);

	if ($resultChek > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$nompageserv = $row['article_page'];
			echo '<div class="zone-article">
				<h1 class="titre-article">'.$row['article_title'].'</h1>
				<p class="texte-article">'.$row['article_contenue'].'</p>
				<a class="lien-article" href="/'.$nompageserv.'">Lire plus...</a>
			<div class="conteneur-module-comment">
				<a class="lien-icon-conversation" href="/'.$nompageserv.'">
					<img class="icon-conversation" src="img/conversation.png">
				</a>';

			$sql = "SELECT * FROM comentaires WHERE coment_page='$nompageserv'";
			$result3 = mysqli_query($conn, $sql);
			$resultChek = mysqli_num_rows($result3);

			echo '<p class="nombre-commentaire-article">'.$resultChek.'</p>';

			$sql = "SELECT * FROM likes WHERE like_page='$nompageserv'";
			$result3 = mysqli_query($conn, $sql);
			$resultChek = mysqli_num_rows($result3);

			echo '<p>'.$resultChek.'</p>';

			echo '</div>
			</div>';
		}
	}

	$sql = "SELECT * FROM article WHERE article_thechnique='1' AND article_priorite='0'";
	$result = mysqli_query($conn, $sql);
	$resultChek = mysqli_num_rows($result);

	if ($resultChek > 0) {
		while ($row2 = mysqli_fetch_assoc($result)) {
			$nompageserv = $row2['article_page'];
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

			echo '<p class="nombre-commentaire-article">'.$resultChek.'</p>';

			$sql = "SELECT * FROM likes WHERE like_page='$nompageserv'";
			$result3 = mysqli_query($conn, $sql);
			$resultChek = mysqli_num_rows($result3);

			echo '<p>'.$resultChek.'</p>';

			echo '</div>
			</div>';
		}
	}
?>
</div>

<?php
	include_once("includes/modules/footer.php");
?>
