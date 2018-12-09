<?php
  include_once("includes/modules/header.php");
  include_once("includes/backrownd/dph.php");

	$NbAParPageMax = 5;
	$tagSel = "";
	$Trie = "";
	$nbADefiler = 0;
	if (isset($_GET['triethec'])) {
		$Trie = $_GET['triethec'];
	}
	if (isset($_GET['tagthec'])) {
		$tagSel = $_GET['tagthec'];
	}
	if (isset($_GET['nbpageart'])) {
		$nbpageart = $_GET['nbpageart'];
	}else{
		$nbpageart = 1;
	}
	echo '<div class="menu-matériel">
		<ul>
			<li class="liste-onglet-matériel"><img class="image-onglet-matériel" src="img/store-new-badges.png"><a class="onglet-matériel" href="livre.php?triethec='.$Trie.'">Nouveautés</a></li>
			<li class="liste-onglet-matériel"><img class="image-onglet-matériel" src="img/laptop.png"><a class="onglet-matériel" href="livre.php?triethec='.$Trie.'&tagthec=Ordi">Ordinateur</a></li>
            <li class="liste-onglet-matériel"><img class="image-onglet-matériel" src="img/microphone.png"><a class="onglet-matériel" href="livre.php?triethec='.$Trie.'&tagthec=PC">Micro</a></li>
            <li class="liste-onglet-matériel"><img class="image-onglet-matériel" src="img/camera.png"><a class="onglet-matériel" href="livre.php?triethec='.$Trie.'&tagthec=Cam">Caméra</a></li>
            <li class="liste-onglet-matériel"><img class="image-onglet-matériel" src="img/computer-screen.png"><a class="onglet-matériel" href="livre.php?triethec='.$Trie.'&tagthec=Ecran">Ecran</a></li>
            <li class="liste-onglet-matériel"><img class="image-onglet-matériel" src="img/outil.png"><a class="onglet-matériel" href="livre.php?triethec='.$Trie.'&tagthec=Gadget">Gadget</a></li>
		</ul>
	</div>
<div class="conteneur-général-3">
	<div class="matériel-conteneur">
	<div class="conteneur-design-tag-2">
		<a class="design-tag-2" href="livre.php?tagthec='.$tagSel.'">#Nouveautés</a>
		<a class="design-tag" href="livre.php?triethec=Pop&tagthec='.$tagSel.'">#Populaire</a>
		<a class="design-tag" href="livre.php?triethec=moincher&tagthec='.$tagSel.'">#Le moins chère</a>
		<a class="design-tag" href="livre.php?triethec=pluschere&tagthec='.$tagSel.'">#Le plus chère</a>
</div>
<div class="conteneur-menu-article-matériel">';
	$sql = "";
	if ($tagSel == "") {
		if ($Trie == "") {
			$sql = "SELECT * FROM article WHERE article_thechnique='0' ORDER BY article_id DESC";
		}elseif ($Trie == "Pop") {
			$sql = "SELECT * FROM article WHERE article_thechnique='0' ORDER BY article_like DESC";
		}elseif ($Trie == "pluschere") {
			$sql = "SELECT * FROM article WHERE article_thechnique='0' ORDER BY article_prix DESC";
		}elseif ($Trie == "moincher") {
			$sql = "SELECT * FROM article WHERE article_thechnique='0' ORDER BY article_prix ASC";
		}
	}else{
		if ($Trie == "") {
			$sql = "SELECT * FROM article WHERE article_thechnique='0' AND article_tag LIKE '%$tagSel%' ORDER BY article_id DESC";
		}elseif ($Trie == "Pop") {
			$sql = "SELECT * FROM article WHERE article_thechnique='0' AND article_tag LIKE '%$tagSel%' ORDER BY article_like DESC";
		}elseif ($Trie == "pluschere") {
			$sql = "SELECT * FROM article WHERE article_thechnique='0' AND article_tag LIKE '%$tagSel%' ORDER BY article_prix DESC";
		}elseif ($Trie == "moincher") {
			$sql = "SELECT * FROM article WHERE article_thechnique='0' AND article_tag LIKE '%$tagSel%' ORDER BY article_prix ASC";
		}
	}


	$result = mysqli_query($conn, $sql);
	$resultChek = mysqli_num_rows($result);

	include("includes/modules/pres/presartL.php");




	if ($nbpageart != 1) {

	echo '<a class="design-nombre-page-2" href="livre.php?triethec='.$Trie.'&tagthec='.$tagSel.'&nbpageart='.(string)($nbpageart-1).'">Page Précédente</a>';
	}
	if ($nbADefiler > $NbAParPageMax*$nbpageart) {
		echo '<a class="design-nombre-page" href="livre.php?triethec='.$Trie.'&tagthec='.$tagSel.'&nbpageart='.(string)($nbpageart+1).'">Page Suivante</a>';
	}
?>

</div>
</div>
</div>

<?php
  include_once("includes/modules/footer.php");
?>