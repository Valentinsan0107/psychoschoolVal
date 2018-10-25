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
    $sql = "SELECT * FROM article WHERE article_thechnique='1' AND article_priorite='1'";
	$result = mysqli_query($conn, $sql);
	$resultChek = mysqli_num_rows($result);

	if ($resultChek > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			include_once("includes/modules/pres/presart.php");
		}
	}

	$sql = "SELECT * FROM article WHERE article_thechnique='1' AND article_priorite='0'";
	$result = mysqli_query($conn, $sql);
	$resultChek = mysqli_num_rows($result);

	if ($resultChek > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			include_once("includes/modules/pres/presart.php");
		}
	}
?>
</div>







<?php
	include_once("includes/modules/footer.php");
?>
