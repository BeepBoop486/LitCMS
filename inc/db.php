<?php 

	include $_SERVER["DOCUMENT_ROOT"] . '/globals.php';
	session_start();

	$conn = mysqli_connect($GLOBALS['DB_HOST'], $GLOBALS['DB_USER'], $GLOBALS['DB_PASS'], $GLOBALS['DB_NAME']);
	if (!$conn) {
		die("There's been an error trying to connect to the database, errno: " . $conn->errno . " " . $conn->error);
	}

	include $_SERVER["DOCUMENT_ROOT"] . "/config.php";

 ?>