<?php
	include_once("includes/modules/header.php");
    include_once("includes/backrownd/dph.php");
?>s


	

<div class="article-conteneur">
<?php
	$tagSel = "";
	$Trie = "";
	if (isset($_GET['triethec'])) {
		$Trie = $_GET['triethec'];
	}
	if (isset($_GET['tagthec'])) {
		$tagSel = $_GET['tagthec'];
	}
	echo '<div class="conteneur-design-tag">
	<a class="design-tag" href="techniques.php?triethec='.$tagSel.'">Nouveaute</a>
	<a class="design-tag" href="techniques.php?triethec=aimer&triethec='.$tagSel.'">J aime</a>';
	$sql = "SELECT * FROM Tags_Liste WHERE Nom='Tech'";
	$result = mysqli_query($conn, $sql);
	$resultChek = mysqli_num_rows($result);
	if ($resultChek == 1) {
		$row = mysqli_fetch_assoc($result);
		$ttlesTag = $row['Tags'];
		$aryTag = explode(",", $ttlesTag);
		foreach ($aryTag as $tagUniique) {
			echo '<a class="design-tag" href="techniques.php?triethec='.$Trie.'&tagthec='.$tagUniique.'">'.$tagUniique.'</a>';
		}
	}
	echo '</div>';

	if ($tagSel == "") {
		if ($Trie == "") {
		    $sql = "SELECT * FROM article WHERE article_thechnique='1' AND article_priorite='1' ORDER BY article_id DESC";
			$result = mysqli_query($conn, $sql);
			$resultChek = mysqli_num_rows($result);

			if ($resultChek > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					include("includes/modules/pres/presart.php");
				}
			}

			$sql = "SELECT * FROM article WHERE article_thechnique='1' AND article_priorite='0' ORDER BY article_id DESC";
			$result = mysqli_query($conn, $sql);
			$resultChek = mysqli_num_rows($result);

			if ($resultChek > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					include("includes/modules/pres/presart.php");
				}
			}
		}elseif ($Trie == "aimer") {
			$sql = "SELECT * FROM article WHERE article_thechnique='1' AND article_priorite='1' ORDER BY article_like DESC";
			$result = mysqli_query($conn, $sql);
			$resultChek = mysqli_num_rows($result);

			if ($resultChek > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					include("includes/modules/pres/presart.php");
				}
			}

			$sql = "SELECT * FROM article WHERE article_thechnique='1' AND article_priorite='0' ORDER BY article_like DESC";
			$result = mysqli_query($conn, $sql);
			$resultChek = mysqli_num_rows($result);

			if ($resultChek > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					include("includes/modules/pres/presart.php");
				}
			}
		}
	}else{
		if ($Trie == "") {
			$sql = "SELECT * FROM article WHERE article_thechnique='1' AND article_priorite='1' AND article_tag LIKE '$tagSel' ORDER BY article_id DESC";
			$result = mysqli_query($conn, $sql);
			$resultChek = mysqli_num_rows($result);

			if ($resultChek > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					include("includes/modules/pres/presart.php");
				}
			}

			$sql = "SELECT * FROM article WHERE article_thechnique='1' AND article_priorite='0' AND article_tag LIKE '$tagSel' ORDER BY article_id DESC";
			$result = mysqli_query($conn, $sql);
			$resultChek = mysqli_num_rows($result);

			if ($resultChek > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					include("includes/modules/pres/presart.php");
				}
			}
		}elseif ($Trie == "aimer") {
			$sql = "SELECT * FROM article WHERE article_thechnique='1' AND article_priorite='1' AND article_tag LIKE '$tagSel' ORDER BY article_like DESC";
			$result = mysqli_query($conn, $sql);
			$resultChek = mysqli_num_rows($result);

			if ($resultChek > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					include("includes/modules/pres/presart.php");
				}
			}

			$sql = "SELECT * FROM article WHERE article_thechnique='1' AND article_priorite='0'  AND article_tag LIKE '$tagSel' ORDER BY article_like DESC";
			$result = mysqli_query($conn, $sql);
			$resultChek = mysqli_num_rows($result);

			if ($resultChek > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					include("includes/modules/pres/presart.php");
				}
			}
		}
	}
?>
</div>


<?php
	include_once("includes/modules/footer.php");
?>
