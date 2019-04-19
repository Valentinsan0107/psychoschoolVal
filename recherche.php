<?php
$TITLEpage="Résultat recherche";
$descriptionpage="Page accueil site Psychoschool";
$motclefspage="page,accueil,site";
  include_once("includes/modules/header.php");

  if (isset($_GET['submit'])) {
    $NbAParPageMax = 7;
    $nbADefiler = 0;
    echo '<div class="centrage-conteneur-recherche">';
    include_once('includes/backrownd/dph.php');
    $recherche = mysqli_real_escape_string($conn, $_GET['recherche']);
    $artselec = array();

    $sql = $sql = "SELECT * FROM article WHERE article_titre LIKE '%$recherche%' OR article_resumer LIKE '%$recherche%' OR article_tag LIKE '%$recherche%' ORDER BY article_id DESC";
    $result = mysqli_query($conn, $sql);
    $resultChek = mysqli_num_rows($result);

    if ($resultChek > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        if (!in_array($row['article_id'], $artselec)) {
          array_push($artselec, $row['article_id']);
          include("includes/modules/pres/presartRecherche.php");
        }
      }
    }


  	$recherches = explode(" ", $recherche);

    foreach ($recherches as $r) {
  		if (strlen($r) > 2) {
  			$sql = $sql = "SELECT * FROM article WHERE article_titre LIKE '%$r%' OR article_resumer LIKE '%$r%' OR article_tag LIKE '%$r%' ORDER BY article_id DESC";
  			$result = mysqli_query($conn, $sql);
  			$resultChek = mysqli_num_rows($result);

  			if ($resultChek > 0) {
  				while ($row = mysqli_fetch_assoc($result)) {
            if (!in_array($row['article_id'], $artselec)) {
              array_push($artselec, $row['article_id']);
              include("includes/modules/pres/presartRecherche.php");
            }
  				}
  			}
  		}
  	}
  	echo "</div>";
  }
  if (empty($artselec)) {
    echo "<div class='centrage-conteneur-recherche'>
        <div class='conteneur-attention-connexion-2'>
        <div class='centrage-conteneur-attention-connexion-2'>
        <img class='image-attention' src='/psychoschoolVal/img/attention.png' alt="">
        <p class='message-commentaire-connexion'>Aucun résultat ne correspond à votre recherche</p>
      </div></div></div>";
  }

  /*if ($nbpageart != 1) {

  echo '<a class="design-nombre-page-2" href="techniques.php?triethec='.$Trie.'&tagthec='.$tagSel.'&nbpageart='.(string)($nbpageart-1).'">Page Précédente</a>';
  }
  if ($nbADefiler > $NbAParPageMax*$nbpageart) {
    echo '<a class="design-nombre-page" href="techniques.php?triethec='.$Trie.'&tagthec='.$tagSel.'&nbpageart='.(string)($nbpageart+1).'">Page Suivante</a>';
  }*/

  include_once("includes/modules/footer.php");
?>