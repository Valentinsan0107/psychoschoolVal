<?php  
	include_once("includes/modules/header.php");
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
	if (isset($_GET['envoyer'])) {
	  	echo "Email de confirmation envoyer";
	}elseif (!isset($_GET['confirmed'])) {
		header("Location: index.php");
	}else{
		include_once("includes/backrownd/dph.php");
		$sql = "SELECT * FROM users";
		$result = mysqli_query($conn, $sql);
		$resultChek = mysqli_num_rows($result);

		$email = "null";
		if ($resultChek > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				$hasehdpasschek = password_verify($row['user_email'], $_GET['mail']);
				if ($hasehdpasschek == true) {
					$email = $row['user_email'];
				}
			}
			if (!$email== "null") {
				echo "Erreur";
			}else{
				$sql = "SELECT * FROM users WHERE user_confirmed='0' AND user_email='$email'";
				$result = mysqli_query($conn, $sql);
				$resultChek = mysqli_num_rows($result);

				if($resultChek == 1){
					$sql = "UPDATE users SET user_confirmed='1' WHERE user_email='$email'";
					$result = mysqli_query($conn, $sql);
					echo "Email Confirmer";
				}else{
					echo "Email Deja Confirmer";
				}
			}
		}else{
			echo "Erreur";
		}
	}
?>

<?php  
	include_once("includes/modules/footer.php");
?>