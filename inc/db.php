<?php 

	include $_SERVER["DOCUMENT_ROOT"] . '/globals.php';
	session_start();

	$conn = mysqli_connect($GLOBALS['DB_HOST'], $GLOBALS['DB_USER'], $GLOBALS['DB_PASS'], $GLOBALS['DB_NAME']);
	if (!$conn && $_SERVER["REQUEST_URI"] != "/install/") {
		die("It seems like you don't have LitCMS Installed properly, go to /install/ to install it");
	}

	include $_SERVER["DOCUMENT_ROOT"] . "/config.php";

 ?>