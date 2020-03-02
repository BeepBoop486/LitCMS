<?php 

	if (isset($_SESSION["name"])) {
		$stmt = $conn->prepare("SELECT isadmin FROM users WHERE uname=?");
		$stmt->bind_param("s", $_SESSION["name"]);
		$stmt->execute();

		$stmt->bind_result($admin);
		$stmt->fetch();

		if (!$admin) {
			echo '<script>window.location.href = "/"</script>';
		}

		$stmt->close();
	} else {
		echo '<script>window.location.href = "/"</script>';
	}

 ?>