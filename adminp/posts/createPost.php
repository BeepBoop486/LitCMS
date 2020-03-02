<?php 

	include $_SERVER["DOCUMENT_ROOT"] . '/inc/db.php';
	include '../funcs/getCats.php';

	if (isset($_POST["submit"])) {
		$pname = $_POST["pname"];
		$pcnt = $_POST["pname"];
		$pupl = $_POST["pupl"];
		$pthumb = $_POST["pthumb"];
		$pcat = $_POST["pcat"];

		if ($pname && $pcnt && $pupl && $pthumb && $pcat) {
			$stmt = $conn->prepare("INSERT INTO posts(post_name, post_content, post_uploader, post_thumb, post_date, post_cat, is_featured) VALUES(?,?,?,?,?,?,?)");
			if ($stmt) {
				$date = date("d/m/Y");
				$o = 0;
				$stmt->bind_param("ssssssi", $pname, $pcnt, $pupl, $pthumb, $date, $pcat, $o);
				if ($stmt->execute()) {
					echo "The entry posted successfully";
				} else {
					echo "There's been an error tryin' to post";
				}
			} else {
				echo "There's an error with the query";
			}
			$stmt->close();
		} else {
			echo "You must to fill all of the inputs";
		}
	}

?>

<form action="#" method="POST">
	<!-- pname, pcnt, pupl, pthumb, pdate, ptags, pcat -->
	<div>
		<label>Post name: </label>
		<input type="text" name="pname">
	</div>
	<label>Post content: </label>
	<div>
		<textarea name="pcnt" rows="8" cols="50"></textarea>
	</div>
	<div>
		<label>Enter your name: </label>
		<input type="text" name="pupl">
	</div>
	<div>
		<label>Enter the thumb url: </label>
		<input type="text" name="pthumb">
	</div>
	<!-- The date will be taken automatically -->
	<div>
		<label>Select the category: </label>
		<select name="pcat">
			<?php 

				$cats = GetCatsID($conn);
				for ($i=0; $i < count($cats)+1; $i++) { 
					echo '<option>'.GetCatName($conn, $i).'</option>';
				}

			 ?>
		</select>
	</div>
	<div>
		<input type="submit" name="submit" value="Post">
	</div>
</form>