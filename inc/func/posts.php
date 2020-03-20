<?php 

	function getPopularPostsId($conn, $limit)
	{
		$stmt = $conn->prepare("SELECT id FROM posts ORDER BY views DESC LIMIT ?");
		$stmt->bind_param("i", $limit);
		$stmt->execute();
		$stmt->bind_result($id);
		$ids = [];
		while($stmt->fetch()) {
			$ids[] = $id;
		}
		$stmt->close();
		return $ids;
	}

	function getPostViews($conn, $id)
	{
		$stmt = $conn->prepare("SELECT views FROM posts WHERE id=?");
		$stmt->bind_param("i", $id);
		$stmt->execute();
		$stmt->bind_result($views);
		$stmt->fetch();
		$stmt->close();
		return $views;
	}

	function addPostView($conn, $id)
	{
		$views = getPostViews($conn, $id);
		$toadd = $views + 1;

		$stmt = $conn->prepare("UPDATE posts SET views=? WHERE id=?");
		$stmt->bind_param("ii", $toadd, $id);
		$stmt->execute();
		$stmt->close();
	}

 ?>