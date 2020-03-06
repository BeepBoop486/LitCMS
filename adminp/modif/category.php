<?php 

	include '../inc/header.php';

	if (isset($_GET["id"])) {
		$stmt = $conn->prepare("SELECT cat_name FROM categories WHERE id=?");
		$stmt->bind_param("i", $_GET["id"]);
		$stmt->execute();
		$stmt->bind_result($cname);
		$stmt->fetch();
		$stmt->close();
	} else {
		echo '<script>window.location.href="/adminp/categories"</script>';
	}

	if (isset($_POST["submit"])) {
		$pcname = $_POST["cname"];
		if ($pcname) {
			$stmt = $conn->prepare("UPDATE categories SET cat_name=? WHERE id=?");
			$stmt->bind_param("si", $pcname, $_GET["id"]);
			if ($stmt->execute()) {
				echo "<script>window.location.href='/adminp/categories'</script>";
			}
			$stmt->close();
		} else {
			echo "You must to fill all of the fields";
		}
	}

?>

<form action="#" method="POST">
	
	<div class="row">
		<div class="form-group col-md-10">
			<label>Name:</label>
			<input type="text" name="cname" class="form-control" value="<?php echo $cname; ?>">
		</div>

		<div class="form-group col-md-2">
			<label>Post:</label>
			<input type="submit" name="submit" class="form-control" value="Submit">
		</div>
	</div>

</form>
