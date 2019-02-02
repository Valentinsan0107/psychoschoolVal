<?php

$nompageserv = $row['article_nom'];
$idart = $row['article_id'];
$date = $row['article_date'];
$date = substr($date, 0, -9);
include_once("includes/modules/fonctionContain.php");

$date = datetotext($date);

if ($row['article_thechnique']==1) {
	$lien = "article.php?narticle=".$nompageserv;
}else{
	$lien = "fiche_produit.php?narticle=".$nompageserv;
}

echo '<div class="conteneur-recherche">';
echo '<div class="conteneur-photo-recherche">';

if (file_exists("uploads/imagecouverture/".$idart.".jpg")) {
	echo '<a href="'.$lien.'"><img class="image-photo-recherche" src="uploads/imagecouverture/'.$idart.'.jpg"></a>';
}elseif (file_exists("uploads/imagecouverture/".$idart.".png")) {
	echo '<a href="'.$lien.'"><img class="image-photo-recherche" src="uploads/imagecouverture/'.$idart.'.png"></a>';
}else{
	echo '<a href="'.$lien.'"><img class="image-photo-recherche" src="uploads/imagecouverture/base.png"></a>';
}

echo '</div>

    <div class="conteneur-tag-titre-date">
        <div class="conteneur-tag-titre">';

$tags = $row['article_tag'];
$tags = explode(",", $tags);

if (sizeof($tags)>0) {
	echo '<a class="tag-recherche" href="#">'.$tags[0].'</a>';
}
if (sizeof($tags)>1) {
	echo '<a class="tag-recherche" href="#">'.$tags[1].'</a>';
}
if (sizeof($tags)>2) {
	echo '<a class="tag-recherche" href="#">'.$tags[2].'</a>';
}


echo '<h1 class="titre-article-recherche">'.$row['article_titre'].'</h1>
        </div>

        <div class="conteneur-date-recherche">
            <h6 class="date-article-recherche">'.$date.'</h6>
        </div>
    </div>';


$sql = "SELECT * FROM comentaires WHERE coment_page='$nompageserv'";
$result3 = mysqli_query($conn, $sql);
$resultChek = mysqli_num_rows($result3);

echo '<div class="conteneur-like-coment">
        <div class="conteneur-coment">
            <a class="commentaire-coment-recherche" href="'.$lien.'">Commentaires : '.$resultChek.'</a>
        </div>';

$sql = "SELECT * FROM likes WHERE like_page='$nompageserv'";
$result3 = mysqli_query($conn, $sql);
$resultChek = mysqli_num_rows($result3);

echo '<div class="conteneur-like-recherche">
            <a class="commentaire-coment-recherche" href="'.$lien.'">Mention J’aime : '.$resultChek.'</a>
        </div>

    </div>
    </div>';

?>