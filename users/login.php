<?php 
	$index = 0;
	include '../inc/header.php';
 ?>

<section id="styles" class="s-styles">
	<div class="row">
		
		<div class="col-full tab-full">
			<h3 class="add-bottom">Sign in at <?php echo $GLOBALS['SITE_NAME']; ?></h3>

			<form action="login" method="post">
				
				<div>
					<label for="uname">Username</label>
					<input type="text" name="uname" class="full-width" placeholder="AnAwesomeName486">
				</div>
				<div>
					<label for="upass">Password</label>
					<input type="password" name="upass" class="full-width" placeholder="*************">
				</div>

				<input type="submit" name="submit" class="btn--primary full-width" value="Sign In">

			</form>
		</div>

	</div>
</section>

<?php include '../inc/footer.php'; ?>