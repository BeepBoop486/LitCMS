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

?>

<script type="text/javascript" src="https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/5/tinymce.min.js"></script>
<script type="text/javascript" src="/adminp/js/editor.js"></script>
<script type="text/javascript">
</script>

<form action="#">

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
			<textarea name="pcnt" class="form-control" id="editor" value="<?php echo $ppcnt; ?>"></textarea>
		</div>

		<div class="form-group col-md-6">
			<label>Select the category:</label>
			<select name="pcat" class="form-control">
				<?php 

					$cats = GetCatsID($conn);
					for ($i=0; $i < count($cats)+1; $i++) { 
						echo '<option>'.GetCatName($conn, $i).'</option>';
					}

				 ?>
			</select>
		</div>

	</div>

</form>