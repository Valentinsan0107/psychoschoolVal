<?php
	include_once("includes/modules/header.php");
    include_once("includes/backrownd/dph.php");
?>




<div id="volet" onclick="openVolet()">
	Bonjour
</div>

<script type="text/javascript">

function openVolet() {
	document.getElementById("volet").style.left = '0px';
	document.getElementById("volet").style.transition = '0.8s ease';
}

</script>


	

<div class="article-conteneur">
<?php
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
	echo '<div class="conteneur-design-tag">';
	if ($Trie == "") {

		echo'<a class="" href="techniques.php?tagthec='.$tagSel.'&nbpageart='.$nbpageart.'">Nouveaute</a>';
		echo '<a class="design-tag" href="techniques.php?triethec=aimer&tagthec='.$tagSel.'&nbpageart='.$nbpageart.'">J aime</a>';	
	}else{
		echo'<a class="design-tag" href="techniques.php?tagthec='.$tagSel.'&nbpageart='.$nbpageart.'">Nouveaute</a>';
		echo '<a class="" href="techniques.php?triethec=aimer&tagthec='.$tagSel.'&nbpageart='.$nbpageart.'">J aime</a>';
	}
	$sql = "SELECT * FROM Tags_Liste WHERE Nom='Tech'";
	$result = mysqli_query($conn, $sql);
	$resultChek = mysqli_num_rows($result);
	if ($resultChek == 1) {
		$row = mysqli_fetch_assoc($result);
		$ttlesTag = $row['Tags'];
		$aryTag = explode(",", $ttlesTag);
		foreach ($aryTag as $tagUniique) {
			if ($tagUniique == $tagSel) {
				echo '<a class="" href="techniques.php?triethec='.$Trie.'&tagthec='.$tagUniique.'&nbpageart='.$nbpageart.'">'.$tagUniique.'</a>';
			}else{
				echo '<a class="design-tag" href="techniques.php?triethec='.$Trie.'&tagthec='.$tagUniique.'&nbpageart='.$nbpageart.'">'.$tagUniique.'</a>';
			}
		}
	}
	if ($tagSel = "") {
		echo '<a class="" href="techniques.php?triethec='.$Trie.'&nbpageart='.$nbpageart.'">Pas de Tag</a>';
	}else{
		echo '<a class="design-tag" href="techniques.php?triethec='.$Trie.'&nbpageart='.$nbpageart.'">Pas de Tag</a>';
	}
	echo '</div>';

	if ($tagSel == "") {
		if ($Trie == "") {
		    $sql = "SELECT * FROM article WHERE article_thechnique='1' AND article_priorite='1' ORDER BY article_id DESC";
			$result = mysqli_query($conn, $sql);
			$resultChek = mysqli_num_rows($result);

			include("includes/modules/pres/presart.php");

			$sql = "SELECT * FROM article WHERE article_thechnique='1' AND article_priorite='0' ORDER BY article_id DESC";
			$result = mysqli_query($conn, $sql);
			$resultChek = mysqli_num_rows($result);

			include("includes/modules/pres/presart.php");
		}elseif ($Trie == "aimer") {
			$sql = "SELECT * FROM article WHERE article_thechnique='1' ORDER BY article_like DESC";
			$result = mysqli_query($conn, $sql);
			$resultChek = mysqli_num_rows($result);

			include("includes/modules/pres/presart.php");
			
		}
	}else{
		if ($Trie == "") {
			$sql = "SELECT * FROM article WHERE article_thechnique='1' AND article_priorite='1' AND article_tag LIKE '$tagSel' ORDER BY article_id DESC";
			$result = mysqli_query($conn, $sql);
			$resultChek = mysqli_num_rows($result);

			include("includes/modules/pres/presart.php");

			$sql = "SELECT * FROM article WHERE article_thechnique='1' AND article_priorite='0' AND article_tag LIKE '$tagSel' ORDER BY article_id DESC";
			$result = mysqli_query($conn, $sql);
			$resultChek = mysqli_num_rows($result);

			include("includes/modules/pres/presart.php");
		}elseif ($Trie == "aimer") {
			$sql = "SELECT * FROM article WHERE article_thechnique='1' AND article_tag LIKE '$tagSel' ORDER BY article_like DESC";
			$result = mysqli_query($conn, $sql);
			$resultChek = mysqli_num_rows($result);

			include("includes/modules/pres/presart.php");

		}
	}
	if ($nbpageart != 1) {
	echo '<a class="design-tag" href="techniques.php?triethec='.$Trie.'&tagthec='.$tagSel.'&nbpageart='.(string)($nbpageart-1).'">Page Precedante</a>';
	}
	if ($nbADefiler > $NbAParPageMax*$nbpageart) {
		echo '<a class="design-tag" href="techniques.php?triethec='.$Trie.'&tagthec='.$tagSel.'&nbpageart='.(string)($nbpageart+1).'">Page Suivante</a>';
	}
?>
</div>


<?php
	include_once("includes/modules/footer.php");
?>
