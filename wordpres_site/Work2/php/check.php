<?php 
	require_once('bd.php');
	require_once('editstring.php');
	session_start();

	$error_fields = [];

	$name = $_POST['userName'];
	$email = $_POST['emailUser'];
	$textInfo = $_POST['textFromUser'];

	$name = editInfo($name);
	$email = editInfo($email);
	$textInfo = editInfo($textInfo);

	if(empty($name)) {
		$error_fields[] = 'name';
	}

	if(empty($email)) {
		$error_fields[] = 'email';
	}

	if(!empty($error_fields)) {
		$response = [
			"status" => false,
			"type" => 1,
			"message" => "Please enter info in inputs",
			"fields" => $error_fields,
		];

		echo json_encode($response);

		die();
	}


	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$error_fields[] = 'email';
		$response = [
			"status" => false,
			"type" => 1,
			"message" => "Email is not true",
			"fields" => $error_fields
		];

		echo json_encode($response);

		die();
	}

	if(!lengthInfo($name, 2, 15) || !lengthInfo($email, 3, 30)) {
		$error_fields[] = 'name';
		$error_fields[] = 'email';
		$response = [
			"status" => false,
			"type" => 1,
			"message" => "Your name/email length is so small or big (Sorry)",
			"fields" => $error_fields
		];

		echo json_encode($response);

		die();
	}

	// Check user. Or that user is exists

	$selectEmail = "SELECT `name` FROM rob_hack_users WHERE `name` = :loginUs";
	$selectEmail = $pdo -> prepare($selectEmail);
	$selectEmail -> execute(['loginUs' => $name]);

	$rowUser = $selectEmail -> fetch(PDO::FETCH_ASSOC);

	if($name == $rowUser['name']) {
		$error_fields[] = 'name';
		$response = [
			"status" => false,
			"type" => 1,
			"message" => "That login is exists",
			"fields" => $error_fields
		];

		echo json_encode($response);

		die();
	}

	$selectLogin = "SELECT `email` FROM rob_hack_users WHERE `email` = :emailUs";
	$selectLogin = $pdo -> prepare($selectLogin);
	$selectLogin -> execute(['emailUs' => $email]);

	$rowUser = $selectLogin -> fetch(PDO::FETCH_ASSOC);

	if($email == $rowUser['email']) {
		$error_fields[] = 'email';
		$response = [
			"status" => false,
			"type" => 1,
			"message" => "That email is exists",
			"fields" => $error_fields
		];

		echo json_encode($response);

		die();
	}

	//Succesfull sending info

	$addUser = "INSERT INTO rob_hack_users (name, email, textUser) VALUES(:nameUs, :emailUs, :textUs)";
	$addUser = $pdo -> prepare($addUser);
	$addUser -> execute(['nameUs' => $name, 'emailUs' => $email, 'textUs' => $textInfo]);

	$current_user = wp_get_current_user();

	if($current_user -> exists()) {
		$_SESSION['register'] = [
			"name" => $current_user->user_login,
			"email" => $email
		];
	} else {
		$_SESSION['register'] = [
			"name" => $name,
			"email" => $email
		];
	}

	$response = [
		"status" => true,
	];

	echo json_encode($response);


	wp_die();
?>