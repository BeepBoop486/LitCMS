<?php
	$index = 0;
	include '../inc/header.php';
?>

<section id="styles" class="s-styles">
	<div class="row">
		<div class="col-full tab-full">
			
			<h3 class="add-bottom">Sign up in <?php echo $GLOBALS['SITE_NAME']; ?></h3>

			<form action="register" method="GET">
				
				<div>
					<label for="mail">Email</label>
					<input class="full-width" name="mail" type="email" placeholder="test@mailbox.com">
				</div>
				<div>
					<label for="uname">Username</label>
					<input type="text" name="uname" class="full-width" placeholder="AnAwesomeName486">
				</div>
				<div>
					<label for="pass">Password</label>
					<input type="password" name="pass" class="full-width" placeholder="***********">
				</div>
				<div>
					<label for="pass2">Re-Enter your password</label>
					<input type="password" name="pass2" class="full-width" placeholder="***********">
				</div>

				<input type="submit" name="submit" class="btn--primary full-width" value="Register">

			</form>

		</div>
	</div>
</section>

<?php
	include '../inc/footer.php';
?>