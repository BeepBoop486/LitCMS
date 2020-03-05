<?php 

	function ExecFile($filename, $conn)
	{
		if (!file_exists($filename)) {
			return false;
		}
		$stmt = $conn->query(file_get_contents("../db.sql"));
		if (!$stmt) {
			die($conn->error);
		}
		return true;
	}

	if (isset($_POST["submit"])) {
		$dbname = $_POST["dbname"];
		$dbuser = $_POST["dbuser"];
		$dbhost = $_POST["dbhost"];
		$dbpass = $_POST["dbpass"];

		$step = 0;

		if ($step == 0) {
			if ($dbname && $dbuser && $dbhost) {
				$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
				if (!$conn) {
					echo "The database info you entered is invalid";
				} else {
					if (ExecFile("../db.sql", $conn)) {
						$step = 1;
					}
				}
			}
		}

		if ($step == 1) {
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Install LitCMS</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../adminp/css/sb-admin-2.min.css">
</head>
<body>
	<div id="wrapper">

		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content">
				<!-- TODO: Topbar -->
				<div class="container-fluid">

					<form action="#" method="POST">
						<div class="row">

							<div class="form-group col-md-3">
								<label>Database Name</label>
								<input type="text" name="dbname" class="form-control">
							</div>
							<div class="form-group col-md-3">
								<label>Database User</label>
								<input type="text" name="dbuser" class="form-control">
							</div>
							<div class="form-group col-md-3">
								<label>Database Host</label>
								<input type="text" name="dbhost" class="form-control">
							</div>
							<div class="form-group col-md-3">
								<label>Database password</label>
								<input type="text" name="dbpass" class="form-control">
							</div>

							<div class="form-group col-md-12">
								<input type="submit" name="submit" class="form-control text-success" value="Install">
							</div>

						</div>
					</form>

				</div>
			</div>
		</div>

	</div>
</body>
</html>
