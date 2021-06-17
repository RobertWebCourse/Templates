<?php 
	require_once('bd.php');
	require_once('editstring.php');

	session_start();

	$nameUser = $_POST['nameUser'];
	$categoryUser = $_POST['categoryFile'];
	$sizetFile = $_POST['sizeFile'];


	$nameUser = editInfo($nameUser);

	$error_fields = [];

	if(empty($nameUser)) {
		$error_fields[] = 'nameFile';
		$response = [
			"status" => false,
			"fields" => $error_fields
		];
	}

	if(empty($categoryUser)) {
		$error_fields[] = 'categoryUser';
		$response = [
			"status" => false,
			"fields" => $error_fields
		];
	}

	if(empty($sizetFile)) {
		$error_fields[] = 'sizetFile';
		$response = [
			"status" => false,
			"fields" => $error_fields
		];
	}

	if(empty($_FILES['file'])) {
		$error_fields[] = 'file';
		$message = "Image not selected";
		$response = [
			"status" => false,
			"type" => 5,
			"message" => $message,
			"fields" => $error_fields
		];
	}

	if(!empty($error_fields)) {
		echo json_encode($response);
		die();
	}


	$getFileName = $_FILES['file']['name'];
	
	$allowed = array('gif', 'png', 'jpg');
	$ext = pathinfo($getFileName, PATHINFO_EXTENSION);

	if(!in_array($ext, $allowed)) {
		$error_fields[] = 'file';
		$message[] = "Wrong format selected";
		$response = [
			"status" => false,
			"type" => 7,
			"message" => $message,
			"fields" => $error_fields
		];
		echo json_encode($response);
		die();
	}

	$folder = get_template_directory()."/uploads/".$getFileName;
	$tmp = $_FILES['file']['tmp_name'];

	$folder2 = 'wp-content/themes/Work2/uploads/';

	if(!move_uploaded_file($tmp, $folder)) {
		$error_fields[] = 'file';
		$message[] = "Error loading file";
		$response = [
			"status" => false,
			"type" => 6,
			"message" => $message,
			"fields" => $error_fields
		];
		echo json_encode($response);
		die();
	}

	$selectImages= "SELECT `image_name` FROM rob_hack_image WHERE `image_name` = :imageName";
	$selectImages = $pdo -> prepare($selectImages);
	$selectImages -> execute([':imageName' => $getFileName]);

	$rowImage = $selectImages -> fetch(PDO::FETCH_ASSOC);

	if($getFileName == $rowImage['image_name']) {
		$error_fields[] = 'file';
		$message[] = "That image is exists";
		$response = [
			"status" => false,
			"type" => 8,
			"message" => $message,
			"fields" => $error_fields
		];
		echo json_encode($response);
		die();
	}


	$addImage = "INSERT INTO rob_hack_image (user_name, image_name, image_dir, size, category, format) VALUES(:userName, :imageName, :imageDir, :sizeUs, :categoryUs,  :getFormat)";
	$addImage = $pdo -> prepare($addImage);
	$addImage -> execute(['userName' => $nameUser, 'imageName' => $getFileName, 'imageDir' => $folder2, 'categoryUs' => $categoryUser, 'sizeUs' => $sizetFile, 'getFormat' => $ext]);


	$response = [
		"status" => true,
		"message" => "Sending succesfull, your file name is " . $getFileName
	];
	echo json_encode($response);

	wp_die();
?>