<?php
/*tu est obliger de definir $nomfileshow pour choisir la page ou on vas compter les comentaires et t es obligeur de le metre dans des tag php*/


/*permet d include dph.php*/
$pref = __FILE__;
$pos = strpos($pref, "psychoschoolVal");
$longeur = strlen($pref);
$aefface = $pos+15-$longeur;
$pref = substr($pref, 0, $aefface);
include_once($pref."/includes/backrownd/dph.php");


$sql = "SELECT * FROM comentaires WHERE coment_page='$nomfileshow'";
$result = mysqli_query($conn, $sql);
$resultChek = mysqli_num_rows($result);

echo '<p class="nombre-commentaire-article">'.$resultChek.'</p>';

?>