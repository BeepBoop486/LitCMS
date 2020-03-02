<?php 

	function GetCatsID($conn)
	{
		$stmt = $conn->prepare("SELECT id FROM categories");
		if ($stmt->execute()) {
			$result = $stmt->bind_result($catid);
			while ($stmt->fetch()) {
				$ids[] = $catid;
			}
		}
		$stmt->close();
		return $ids;
	}

	function GetCatName($conn, $catid)
	{
		$stmt = $conn->prepare("SELECT cat_name FROM categories WHERE id=? LIMIT 1");
		$stmt->bind_param("i", $catid);
		if ($stmt->execute()) {
			$stmt->bind_result($catname);
			$stmt->fetch();
		}
		$stmt->close();
		return $catname;
	}

 ?>