<?php 

	include '../inc/header.php';

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