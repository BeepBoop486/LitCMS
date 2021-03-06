<?php
	$index = 0;
	include '../inc/header.php';
	if (!$GLOBALS['registration_enabled']) {
		echo '<script>window.location.href = "/"</script>';
	}
?>

<section id="styles" class="s-styles">
	<div class="row">

		<?php 

			if (isset($_POST['submit'])) {
				$pmail = $_POST['mail'];
				$pname = $_POST['uname'];
				$ppass = $_POST['pass'];
				$ppass2 = $_POST['pass2'];

				if ($pmail && $pname && $ppass && $ppass) {
					if($ppass == $ppass2) {
						$finalpass = password_hash($ppass, PASSWORD_BCRYPT);
						$canreg = 1;

						$stmt = $conn->prepare("SELECT * FROM users WHERE uname=? OR umail=?");
						$stmt->bind_param("ss", $pname, $pmail);
						$stmt->execute();
						$stmt->store_result();
						if ($stmt->num_rows>0) {
							$canreg = 0;
						}
						$stmt->close();

						if($canreg == 1) {
							$s = "";
							$stmt = $conn->prepare("INSERT INTO users(uname, umail, upass, description, is_admin) VALUES(?,?,?,?,?)");
							$o = 0;
							$stmt->bind_param("ssssi", $pname, $pmail, $finalpass, $s, $o);
							if($stmt->execute()) {
								echo '
									<div class="col-full tab-full">
										<div class="alert-box alert-box--success hideit">
											<p>You\'ve successfully created an account</p>
											<i class="fa fa-times alert-box__close"></i>
										</div>
									</div>
								';
							}
							$stmt->close();
						} else {
							echo '
								<div class="col-full tab-full">
									<div class="alert-box alert-box--error hideit">
										<p>An account already exists with that name and/or email</p>
										<i class="fa fa-times alert-box__close"></i>
									</div>
								</div>
							';
						}
					} else {
						echo '
							<div class="col-full tab-full">
								<div class="alert-box alert-box--error hideit">
									<p>Your passwords doesn\'t match</p>
                    				<i class="fa fa-times alert-box__close"></i>
								</div>
							</div>
						';
					}
				}
			}

		?>

		<div class="col-full tab-full">
			
			<h3 class="add-bottom">Sign up in <?php echo $GLOBALS['SITE_NAME']; ?></h3>

			<form action="register" method="post">
				
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