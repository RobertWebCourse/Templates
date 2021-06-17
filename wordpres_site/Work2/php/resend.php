<?php 
	require_once('bd.php');
	require($_SERVER['DOCUMENT_ROOT'].'/wordpress/wp-load.php');

	session_start();
	unset($_SESSION['subscribe']);
	$home_url = home_url();
	header('Location: ' . $home_url);
?>