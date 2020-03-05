<?php 

	include '../inc/amiadmin.php';

	if (isset($_GET["id"])) {
		$pid = $_GET["id"];

		$stmt = $conn->prepare("DELETE FROM posts WHERE id=?");
		$stmt->bind_param("i", $pid);
		if ($stmt->execute()) {
			echo "<script>window.location.href='/adminp/posts/editPosts.php'</script>";
		} else {
			die("There's been an error");
		}
		$stmt->close();
	}

 ?>