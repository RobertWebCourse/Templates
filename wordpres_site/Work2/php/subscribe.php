<?php 
	require_once('bd.php');
	require_once('editstring.php');
	session_start();

	$emailFooter = $_POST['emailFooter'];

	$emailFooter = editInfo($emailFooter);

	$error_fields = [];

	if(empty($emailFooter)) {
		$error_fields[] = 'email';
	}

	if(!empty($error_fields)) {
		$response = [
			"status" => false,
			"type" => 1,
			"message" => "Please enter info in input",
			"fields" => $error_fields
		];

		echo json_encode($response);

		die();
	}

	if(!filter_var($emailFooter, FILTER_VALIDATE_EMAIL)) {
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

	if(!lengthInfo($emailFooter, 3, 30)) {
		$error_fields[] = 'email';
		$response = [
			"status" => false,
			"type" => 1,
			"message" => "Your email length is so small or big (Sorry)",
			"fields" => $error_fields
		];

		echo json_encode($response);

		die();
	}

	$selectEmailF = "SELECT `email` FROM rob_hack_subscribe WHERE `email` = :emailUsFooter";
	$selectEmailF = $pdo -> prepare($selectEmailF);
	$selectEmailF -> execute(['emailUsFooter' => $emailFooter]);

	$rowUser = $selectEmailF -> fetch(PDO::FETCH_ASSOC);

	if($emailFooter == $rowUser['email']) {
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

	$addUser = "INSERT INTO rob_hack_subscribe (email) VALUES(:emailUsF)";
	$addUser = $pdo -> prepare($addUser);
	$addUser -> execute(['emailUsF' => $emailFooter]);

	$response = [
		"status" => true
	];

	$_SESSION['subscribe'] = [
		"email" => $emailFooter
	];
	echo json_encode($response);

	wp_die();
?>