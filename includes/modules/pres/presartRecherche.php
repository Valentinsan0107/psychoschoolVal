<?php

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
echo'<div class="zone-article">
	<h1 class="titre-article">'.$row['article_titre'].'</h1>
	<h6 class="date-aperçu-article">'.$date.'</h6>
	<p class="texte-article">'.$row['article_resumer'].'</p>
	<a class="lien-article" href="'.$lien.'">Lire plus...</a>
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
	<p class="nombre-like-article">'.$resultChek.'</p>';

echo '</div>
</div>
</div>';
?>