<?php 

	include '../inc/amiadmin.php';

	if (isset($_GET["id"])) {
		$catid = $_GET["id"];

		$stmt = $conn->prepare("DELETE FROM categories WHERE id=?");
		$stmt->bind_param("i", $catid);
		if ($stmt->execute()) {
			echo "<script>window.location.href='/adminp/categories'</script>";
		}
		$stmt->close();
	}

 ?>