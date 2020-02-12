<?php 

	include '../inc/db.php';

	$stmt = $conn->prepare("SELECT * FROM posts ORDER BY id DESC");
	$stmt->execute();
	$stmt->bind_result($pid, $pname, $pcnt);
	while($stmt->fetch()) {
		echo '<h1>'.$pname.'</h1>
		<p>'.$pcnt.'</p>';
	}

 ?>