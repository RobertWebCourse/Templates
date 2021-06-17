<?php 
	$user = "root";
	$password = "";
	$linkpdo = 'mysql:host=localhost;dbname=wordpress;charset=utf8';

	try {
		$pdo = new PDO($linkpdo, $user, $password);
		$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	} catch(PDOException $e) {
		echo $e -> getMessage();
	}
?>