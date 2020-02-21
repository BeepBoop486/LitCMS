<?php 
	$index = 0;
	include '../inc/header.php';
 ?>

<section id="styles" class="s-styles">
	<div class="row">

		<?php 

		if (isset($_POST['submit'])) {
			$uname = $_POST['uname'];
			$upass = $_POST['upass'];

			if ($uname && $upass) {

				$canlog = 0;

				$stmt = $conn->prepare("SELECT umail,upass FROM users WHERE uname=? LIMIT 1");
				$stmt->bind_param("s", $uname);
				$stmt->execute();
				$stmt->store_result();
				if ($stmt->num_rows > 0) {
					$canlog = 1;
				}
				$stmt->close();

				//This is so shitty, TODO: change this

				$stmt = $conn->prepare("SELECT umail, upass FROM users WHERE uname=? LIMIT 1");
				$stmt->bind_param("s", $uname);
				$stmt->execute();
				if($canlog == 1) {
					$stmt->bind_result($dbumail, $dbupass);
					$stmt->fetch();
					if (password_verify($upass, $dbupass)) {
						$_SESSION['name'] = $uname;
						$_SESSION['mail'] = $dbumail;

						echo '
							<div class="col-full tab-full">
								<div class="alert-box alert-box--success hideit">
									<p>You\'ve successfully signed into your account. You\'ll be redirected to the site root</p>
									<i class="fa fa-times alert-box__close"></i>
								</div>
							</div>
							<script>setTimeout(() => {
								window.location.href = "/"
							}, 2700)</script>
						';
					} else {
						echo '
							<div class="col-full tab-full">
								<div class="alert-box alert-box--error hideit">
									<p>The password you entered doesn\'t match our records</p>
									<i class="fa fa-times alert-box__close"></i>
								</div>
							</div>
						';
					}
				} else {
					echo '
						<div class="col-full tab-full">
							<div class="alert-box alert-box--notice hideit">
								<p>The username you entered doesn\'t exist</p>
								<i class="fa fa-times alert-box__close"></i>
							</div>
						</div>
					';
				}

			} else {
				echo '
					<div class="col-full tab-full">
						<div class="alert-box alert-box--notice hideit">
							<p>You must to fill all of the fields</p>
							<i class="fa fa-times alert-box__close"></i>
						</div>
					</div>
				';
			}
		}

		 ?>
		
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