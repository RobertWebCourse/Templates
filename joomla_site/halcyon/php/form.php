<?php  
	$user = "root";
	$password = "";
	$linkpdo = 'mysql:host=localhost;dbname=joomla;charset=utf8';

	try {
		$pdo = new PDO($linkpdo, $user, $password);
		$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	} catch(PDOException $e) {
		echo $e -> getMessage();
	}

	$getEmail = $_POST['email'];

	$getEmail = trim($getEmail);
	$getEmail = stripslashes($getEmail);
	$getEmail = strip_tags($getEmail);
	$getEmail = htmlspecialchars($getEmail);

	if(empty($getEmail)) {
		$error = 'email';
		$response = [
			"message" => "Please enter info in inut",
			"status" => false,
			"field" => $error
		];
		echo json_encode($response);

		die();
	}

	if(mb_strlen($getEmail) < 3 || mb_strlen($getEmail) > 45) {
		$error = 'email';
		$response = [
			"message" => "Your name/email length is so small or big (Sorry)",
			"status" => false,
			"field" => $error
		];

		echo json_encode($response);

		die();
	}

	if(!filter_var($getEmail, FILTER_VALIDATE_EMAIL)) {
		$error = 'email';
		$response = [
			"message" => "Email is not true",
			"status" => false,
			"field" => $error
		];
		echo json_encode($response);

		die();
	}

	$selectEmail = "SELECT `email` FROM subusers WHERE `email` = :emailUs";
	$selectEmail = $pdo -> prepare($selectEmail);
	$selectEmail -> execute(['emailUs' => $getEmail]);

	$rowUser = $selectEmail -> fetch(PDO::FETCH_ASSOC);

	if($getEmail == $rowUser['email']) {
		$error = 'email';
		$response = [
			"message" => "That email is exists",
			"status" => false,
			"field" => $error
		];

		echo json_encode($response);

		die();
	}

	$addEmail = "INSERT INTO subusers (email) VALUES(:emailUs)";
	$addEmail = $pdo -> prepare($addEmail);
	$addEmail -> execute(['emailUs' => $getEmail]);

	$response = [
		"status" => true
	];
	echo json_encode($response)


?>