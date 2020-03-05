<?php 

	include '../inc/header.php';
	include '../funcs/getCats.php';

	if (isset($_POST["submit"])) {
		$pname = $_POST["pname"];
		$pcnt = $_POST["pcnt"];
		$pupl = $_SESSION["name"];
		$pthumb = $_POST["pthumb"];
		$ptags = $_POST["ptags"];
		$pcat = $_POST["pcat"];

		if ($pname && $pcnt && $pupl && $pthumb && $ptags && $pcat) {
			$stmt = $conn->prepare("INSERT INTO posts(post_name, post_content, post_uploader, post_thumb, post_date, post_tags, post_cat, is_featured) VALUES(?,?,?,?,?,?,?,?)");
			if ($stmt) {
				$date = date("d/m/Y");
				$o = 0;
				$stmt->bind_param("sssssssi", $pname, $pcnt, $pupl, $pthumb, $date, $ptags, $pcat, $o);
				if ($stmt->execute()) {
					echo "The entry posted successfully";
				} else {
					echo "There's been an error tryin' to post " . $conn->error;
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

<script type="text/javascript" src="https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/5/tinymce.min.js"></script>
<script type="text/javascript" src="/adminp/js/editor.js"></script>

<form action="#" method="POST">
	<!-- pname, pcnt, pupl, pthumb, pdate, ptags, pcat -->
	<div class="row">

		<div class="form-group col-md-6">
			<label>Post name: </label>
			<input type="text" name="pname" class="form-control">
		</div>

		<div class="form-group col-md-6">
			<label>Enter the thumb image url: </label>
			<input type="text" name="pthumb" class="form-control">
		</div>

		<div class="form-group col-md-12">
			<label>Post content: </label>
			<textarea name="pcnt" rows="8" cols="50" class="form-control" id="editor"></textarea>
		</div>

		<!-- The date will be taken automatically -->
		<div class="form-group col-md-6">
			<label>Select the category: </label>
			<select name="pcat" class="form-control">
				<?php 

					$cats = GetCatsID($conn);
					for ($i=0; $i < count($cats)+1; $i++) { 
						echo '<option>'.GetCatName($conn, $i).'</option>';
					}

				 ?>
			</select>
		</div>
		<div class="form-group col-md-3">
			<label>Tags of this post:</label>
			<input type="text" name="ptags" class="form-control">
		</div>
		<div class="form-group col-md-3">
			<label>Post:</label>
			<input type="submit" name="submit" value="Post" class="form-control color-success">
		</div>

	</div>
</form>
