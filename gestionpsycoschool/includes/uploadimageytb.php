<?php
if (isset($_POST['submitnew'])) {
	$id = $_POST['Aid'];
	$file = $_FILES['file'];

	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));


	if ($fileError === 0) {
		if ($fileSize < 1000000) {

			if (file_exists("../../psychoschoolVal/uploads/imageyoutubeur/".$id."-1.jpg") == FALSE) {
				$filenamenew = $id."-1.jpg";
			}elseif (file_exists("../../psychoschoolVal/uploads/imageyoutubeur/".$id."-2.jpg") == FALSE) {
				$filenamenew = $id."-2.jpg";
			}elseif (file_exists("../../psychoschoolVal/uploads/imageyoutubeur/".$id."-3.jpg") == FALSE) {
				$filenamenew = $id."-3.jpg";
			}else{
				echo "IL n y a pas de placceeeeee DISPOOOOO";
				exit();
			}
			$fileDestination = "../../psychoschoolVal/uploads/imageyoutubeur/".$filenamenew;
			move_uploaded_file($fileTmpName, $fileDestination);

			header("Location: ".$_SERVER['HTTP_REFERER']);

		}else{
			echo "Trops gros COMMMMMMMMMEEEEE MMMMMAAAAAA BBBBBITTTTTTEEEEE";
		}
	}else{
		echo "ERRRRRROOOOOOOOORRRRRRRRRR";
	}
}elseif (isset($_POST['submitold'])) {
	$id = $_POST['Aid'];
	$nbI = $_POST['NbI'];
	unlink("../../psychoschoolVal/uploads/imageyoutubeur/".$id."-".$nbI.".jpg");
	header("Location: ".$_SERVER['HTTP_REFERER']);
}