<?php 

	include '../inc/header.php';

	if (isset($_POST["submit"])) {
		$catn = $_POST["catn"];

		if ($catn) {
			$stmt = $conn->prepare("INSERT INTO categories(cat_name) VALUES(?)");
			$stmt->bind_param("s", $catn);
			if ($stmt->execute()) {
				echo '<script>window.location.href="/adminp/categories"</script>';
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
 			<label>Category name:</label>
 			<input type="text" name="catn" class="form-control">
 		</div>

 		<div class="form-group col-md-2">
 			<label>Create:</label>
 			<input type="submit" name="submit" class="form-control btn-success" value="Create">
 		</div>

 	</div>
 </form>