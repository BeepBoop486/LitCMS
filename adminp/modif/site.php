<?php 

	include '../inc/header.php';

	if (isset($_POST["submit"])) {
		$sitename = $_POST["sitename"];
		$sitetags = $_POST["sitetags"];
		$sitedescr= $_POST["sitedescr"];
		$siteauth = $_POST["siteauth"];
		$sitefeat = 0;
		$signup   = $_POST["signup"];
		$face = $_POST["face"];
		$inst = $_POST["inst"];
		$twit = $_POST["twit"];
		$pint = $_POST["pint"];

		if ($sitename && $sitetags && $sitedescr && $siteauth && $face && $inst && $twit && $pint) {
			$stmt = $conn->prepare("INSERT INTO config(SITE_NAME,SITE_DESC,SITE_TAGS,SITE_AUTH,FEATURED,REGISTRATION_ENABLED,SOCIAL_FACEBOOK,SOCIAL_TWITTER,SOCIAL_INSTAGRAM,SOCIAL_PINTEREST) VALUES(?,?,?,?,?,?,?,?,?,?)");
			$stmt->bind_param("ssssiissss", $sitename, $sitedescr, $sitetags, $siteauth, $sitefeat, $signup, $face, $twit, $inst, $pint);
			if ($stmt->execute()) {
				echo "<script>window.location.href='/adminp/siteSets'</script>";
			}
			$stmt->close();
		} else {
			echo "You must to fill all of the fields";
		}
	}

?>

<form action="#" method="POST">
	<div class="row">
		
		<div class="form-group col-md-8">
			<label>Site name:</label>
			<input type="text" name="sitename" class="form-control">
		</div>

		<div class="form-group col-md-4">
			<label>Site tags:</label>
			<input type="text" name="sitetags" class="form-control">
		</div>

		<div class="form-group col-md-12">
			<label>Site description:</label>
			<textarea rows="8" class="form-control" name="sitedescr"></textarea>
		</div>

		<div class="form-group col-md-4">
			<label>Site author:</label>
			<input type="text" name="siteauth" class="form-control">
		</div>

		<div class="form-group col-md-2">
			<label>Show featured:</label>
			<input type="text" name="sitefeat" class="form-control" disabled="" value="1">
		</div>

		<div class="form-group col-md-4">
			<label>Enabled sign-up:</label>
			<input type="number" name="signup" class="form-control" value="0">
		</div>

		<div class="form-group col-md-3">
			<label>Facebook:</label>
			<input type="text" name="face" class="form-control">
		</div>

		<div class="form-group col-md-3">
			<label>Twitter:</label>
			<input type="text" name="twit" class="form-control">
		</div>

		<div class="form-group col-md-3">
			<label>Instagram:</label>
			<input type="text" name="inst" class="form-control">
		</div>

		<div class="form-group col-md-3">
			<label>Pinterest:</label>
			<input type="text" name="pint" class="form-control">
		</div>

		<div class="col-md-12">
			<input type="submit" name="submit" class="form-control btn-success" value="Done!">
		</div>

	</div>
</form>