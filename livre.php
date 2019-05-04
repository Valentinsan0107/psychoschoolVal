<?php
$TITLEpage="Matériel";
$descriptionpage="Page accueil site Psychoschool";
$motclefspage="page,accueil,site";
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
	echo '<div class="conteneur-menu-et-technique">


	</div>
	<div class="matériel-conteneur">
	
	<div class="conteneur-design-tag-2">';
	if ($Trie == "") {
		echo '<a class="design-tag-2" href="livre.php?tagthec='.$tagSel.'">#Nouveautés</a>';
	}else{
		echo '<a class="design-tag" href="livre.php?tagthec='.$tagSel.'">#Nouveautés</a>';
	}
	if ($Trie == "Pop") {
		echo '<a class="design-tag-2" href="livre.php?triethec=Pop&tagthec='.$tagSel.'">#Populaire</a>';
	}else{
		echo '<a class="design-tag" href="livre.php?triethec=Pop&tagthec='.$tagSel.'">#Populaire</a>';
	}
	if ($Trie == "moincher") {
		echo '<a class="design-tag-2" href="livre.php?triethec=moincher&tagthec='.$tagSel.'">#Le moins chère</a>';
	}else{
		echo '<a class="design-tag" href="livre.php?triethec=moincher&tagthec='.$tagSel.'">#Le moins chère</a>';
	}
	if ($Trie == "pluschere") {
		echo '<a class="design-tag-2" href="livre.php?triethec=pluschere&tagthec='.$tagSel.'">#Le plus chère</a>';
	}else{
		echo '<a class="design-tag" href="livre.php?triethec=pluschere&tagthec='.$tagSel.'">#Le plus chère</a>';
	}

echo '</div><div class="conteneur-publicité-2"><div class="pub-2"></div>

	</div><div class="menu-matériel">

		<ul class="grande-liste-onglet-matériel">





			<li class="liste-onglet-matériel-1">

			<a class="onglet-matériel-1" href="livre.php?triethec='.$Trie.'&tagthec=Logiciel">

			<img class="image-onglet-matériel" src="img/video-editing.png" alt="">

			</a>

			<a class="lien-titre-onglet-matériel" href="livre.php?triethec='.$Trie.'&tagthec=Logiciel"><p class="titre-onglet-matériel">Logiciel</p></a>

			</li>




			<li class="liste-onglet-matériel-2">

			<a class="onglet-matériel-2" href="livre.php?triethec='.$Trie.'&tagthec=Micro">

			<img class="image-onglet-matériel" src="img/microphone.png" alt="">

			</a>

			<a class="lien-titre-onglet-matériel" href="livre.php?triethec='.$Trie.'&tagthec=Micro"><p class="titre-onglet-matériel">Micro</p></a>

			</li>




			<li class="liste-onglet-matériel-3">

			<a class="onglet-matériel-3" href="livre.php?triethec='.$Trie.'&tagthec=Ordinateur">

			<img class="image-onglet-matériel" src="img/laptop.png" alt="">

			</a>

			<a class="lien-titre-onglet-matériel" href="livre.php?triethec='.$Trie.'&tagthec=Ordinateur"><p class="titre-onglet-matériel">Ordinateur</p></a>

			</li>




			<li class="liste-onglet-matériel-4">

			<a class="onglet-matériel-4" href="livre.php?triethec='.$Trie.'&tagthec=Cam">

			<img class="image-onglet-matériel" src="img/camera.png" alt="">

			</a>

			<a class="lien-titre-onglet-matériel" href="livre.php?triethec='.$Trie.'&tagthec=Cam"><p class="titre-onglet-matériel">Caméra</p></a>

			</li>




			<li class="liste-onglet-matériel-5">

			<a class="onglet-matériel-5" href="livre.php?triethec='.$Trie.'&tagthec=Casque">

			<img class="image-onglet-matériel" src="img/headphone-symbol.png" alt="">

			</a>

			<a class="lien-titre-onglet-matériel" href="livre.php?triethec='.$Trie.'&tagthec=Casque"><p class="titre-onglet-matériel">Casque</p></a>

			</li>




			<li class="liste-onglet-matériel-6">

			<a class="onglet-matériel-6" href="livre.php?triethec='.$Trie.'&tagthec=Gadget">

			<img class="image-onglet-matériel" src="img/outil.png" alt="">

			</a>

			<a class="lien-titre-onglet-matériel" href="livre.php?triethec='.$Trie.'&tagthec=Gadget"><p class="titre-onglet-matériel">Gadget</p></a>

			</li>


		</ul>
	</div>
';
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

<?php
  include_once("includes/modules/footer.php");
?>