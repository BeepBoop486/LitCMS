<?php 

	if (!isset($_GET["query"])) {
		$index = 1;
	} else {
		$index = 0;
	}
	include 'inc/header.php';
	include 'inc/includables/gridCont.php';
	include 'inc/footer.php';

 ?>