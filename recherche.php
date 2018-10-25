<?php
  include_once("includes/modules/header.php");

  if (isset($_GET['submit'])) {
    echo "<div class='article-conteneur'>";
    include_once('includes/backrownd/dph.php');
    $recherche = mysqli_real_escape_string($conn, $_GET['recherche']);
    $artselec = array();

    $sql = $sql = "SELECT * FROM article WHERE article_titre LIKE '%$recherche%' OR article_resumer LIKE '%$recherche%' OR article_tag LIKE '%$recherche%'";
    $result = mysqli_query($conn, $sql);
    $resultChek = mysqli_num_rows($result);

    if ($resultChek > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        if (!in_array($row['article_id'], $artselec)) {
          array_push($artselec, $row['article_id']);
          if ($row['article_thechnique'] == 1) {
            include("includes/modules/pres/presart.php");
          }
        }
      }
    }


  	$recherches = explode(" ", $recherche);

    foreach ($recherches as $r) {
  		if (strlen($r) > 2) {
  			$sql = $sql = "SELECT * FROM article WHERE article_titre LIKE '%$r%' OR article_resumer LIKE '%$r%' OR article_tag LIKE '%$r%'";
  			$result = mysqli_query($conn, $sql);
  			$resultChek = mysqli_num_rows($result);

  			if ($resultChek > 0) {
  				while ($row = mysqli_fetch_assoc($result)) {
            if (!in_array($row['article_id'], $artselec)) {
              array_push($artselec, $row['article_id']);
              if ($row['article_thechnique'] == 1) {
                include("includes/modules/pres/presart.php");
              }
            }
  				}
  			}
  		}
  	}
  }
  if (empty($resultChek)) {
    echo "Il n y a rien qui correspond a votre recherche";
  }

  echo "</div>";
  include_once("includes/modules/footer.php");
?>