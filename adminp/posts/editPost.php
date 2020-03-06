<?php 

	include '../inc/header.php';
	include '../funcs/getCats.php';

	if (!isset($_GET["id"])) {
		echo "<script>window.location.href='/adminp/posts/editPosts.php'</script>";
	} else {
		$getid = $_GET["id"];
		$stmt=$conn->prepare("SELECT * FROM posts WHERE id=?");
		$stmt->bind_param("i", $getid);
		$stmt->execute();

		$stmt->bind_result($ppid, $ppname, $ppcnt, $ppupl, $ppthumb, $ppdate, $pptags, $ppcat, $pfeat);
		$stmt->fetch();

		$stmt->close();
	}

	if (isset($_POST["submit"])) {
		$pname = $_POST["pname"];
		$pthumb = $_POST["pthumb"];
		$pcnt = $_POST["pcnt"];
		$pcat = $_POST["pcat"];
		$ptags = $_POST["ptags"];
		$pfeat = $_POST["pfeat"];

		if ($pname && $pthumb && $pcnt && $ptags) {
			$stmt = $conn->prepare("UPDATE posts SET post_name=?,post_content=?,post_thumb=?,post_tags=?,post_cat=?,is_featured=? WHERE id=?");
			$stmt->bind_param("sssssii",$pname,$pcnt,$pthumb,$ptags, $pcat, $pfeat, $getid);
			if (!$stmt->execute()) {
				echo "There's been a weird error trying to modify this post :(";
			} else {
				echo '<script>window.location.href="/adminp/posts/editPosts.php"</script>';
			}
			$stmt->close();
		} else {
			echo "Fill all of the fields";
		}
	}

?>

<script type="text/javascript" src="https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/5/tinymce.min.js"></script>
<script type="text/javascript" src="/adminp/js/editor.js"></script>
<script type="text/javascript">
</script>

<form action="#" method="POST">

	<div class="row">
		<div class="form-group col-md-6">
			<label>Post name:</label>
			<input type="text" name="pname" class="form-control" value="<?php echo $ppname; ?>">
		</div>
		<div class="form-group col-md-6">
			<label>Post thumb:</label>
			<input type="text" name="pthumb" class="form-control" value="<?php echo $ppthumb; ?>">
		</div>

		<div class="form-group col-md-12">
			<label>Post content:</label>
			<textarea name="pcnt" class="form-control" id="editor"></textarea>
		</div>

		<script type="text/javascript">
			window.onload = () => {
				tinymce.get('editor').setContent(`<?php echo $ppcnt; ?>`);
			}
		</script>

		<div class="form-group col-md-6">
			<label>Select the category:</label>
			<select name="pcat" class="form-control" id="pcat">
				<?php 

					$catsn = GetCatsNum($conn);
					$cats = GetCatsName($conn);
					for ($i=0; $i < $catsn; $i++) { 
						echo '<option>'.$cats[$i].'</option>';
					}

				 ?>
			</select>
		</div>

		<div class="form-group col-md-3">
			<label>Tags:</label>
			<input type="text" name="ptags" class="form-control" value="<?php echo $pptags; ?>">
		</div>

		<div class="form-group col-md-3">
			<label>Is featured:</label>
			<input type="number" name="pfeat" class="form-control" value="<?php echo $pfeat; ?>">
		</div>

		<div class="form-group col-md-12">
			<label>Post:</label>
			<input type="submit" name="submit" class="form-control btn-success" value="Edit!">
		</div>

	</div>

</form>

<script type="text/javascript">
	var pcat = document.getElementById("pcat");
	pcat.value = "<?php echo $ppcat; ?>"
</script>