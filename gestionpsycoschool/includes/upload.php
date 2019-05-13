<?php
if (isset($_POST['submithtml'])) {
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

			$filenamenew = $id.'.'.$fileActualExt;
			$fileDestination = "../../psychoschoolVal/uploads/html/".$filenamenew;
			move_uploaded_file($fileTmpName, $fileDestination);

			if ($fileActualExt == "html") {
				unlink("../../psychoschoolVal/uploads/html/".$id.".php");
			}elseif ($fileActualExt == "php") {
				unlink("../../psychoschoolVal/uploads/html/".$id.".html");	
			}

			header("Location: ".$_SERVER['HTTP_REFERER']);

		}else{
			echo "Trops gros COMMMMMMMMMEEEEE MMMMMAAAAAA BBBBBITTTTTTEEEEE";
		}
	}else{
		echo "ERRRRRROOOOOOOOORRRRRRRRRR";
	}
}elseif (isset($_POST['submitjpg'])) {
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

			$filenamenew = $id.'.'.$fileActualExt;
			$fileDestination = "../../psychoschoolVal/uploads/imagecouverture/".$filenamenew;
			move_uploaded_file($fileTmpName, $fileDestination);

			if ($fileActualExt === "jpg") {
				unlink("../../psychoschoolVal/uploads/imagecouverture/".$id.".png");
			}elseif ($fileActualExt == "png") {
				unlink("../../psychoschoolVal/uploads/imagecouverture/".$id.".jpg");	
			}

			header("Location: ".$_SERVER['HTTP_REFERER']);

		}else{
			echo "Trops gros COMMMMMMMMMEEEEE MMMMMAAAAAA BBBBBITTTTTTEEEEE";
		}
	}else{
		echo "ERRRRRROOOOOOOOORRRRRRRRRR";
	}
}