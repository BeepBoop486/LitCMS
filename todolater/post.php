<?php 

	include '../inc/db.php';

	if (isset($_POST["submit"])) {
		$name = $_POST["name"];
		$cont = $_POST["cnt"];

		if ($name && $cont) {
			$stmt = $conn->prepare("INSERT INTO posts(name, content) VALUES(?,?)");
			$stmt->bind_param("ss", $name, $cont);
			if ($stmt->execute()) {
				echo "Post successfully posted";
			} else {
				echo "There's been an error trying to post";
			}
			$stmt->close();
		}
	}

 ?>


<form action="post.php" method="POST">
	<input type="text" name="name" placeholder="Post name">
	<textarea name="cnt" placeholder="Enter your post content here"></textarea>
	<input type="submit" name="submit">
</form>