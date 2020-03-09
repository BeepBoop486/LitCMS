<?php 

	include '../inc/header.php';

	if (isset($_GET["id"]) && $_GET["id"]) {
		$stmt = $conn->prepare("SELECT * FROM users WHERE id=? LIMIT 1");
		$stmt->bind_param("i", $_GET["id"]);
		$stmt->execute();
		$stmt->bind_result($uid, $uname, $umail, $upass, $udescr, $uadmin);
		$stmt->fetch();
		$stmt->close();
	} else {
		echo '<script>window.location.href="/adminp/users"</script>';
	}

	if (isset($_POST["submit"])) {
		$guid = $uid;
		$guname = $_POST["uname"];
		$gumail = $_POST["umail"];
		$guadmin = $_POST["uadmin"];
		$gudescr = $_POST["udescr"];

		if ($guname && $gumail && $guadmin) {
			$done = 0;
			$stmt = $conn->prepare("UPDATE users SET uname=?,umail=?,description=?,is_admin=? WHERE id=?");
			$stmt->bind_param("sssii", $guname, $gumail, $gudescr, $guadmin, $_GET["id"]);
			if ($stmt->execute()) {
				if ($_SESSION["name"] == $uname) {
					$_SESSION["name"] = $guname;
				}
			}
			$stmt->close();

			$stmt = $conn->prepare("SELECT id FROM posts WHERE post_uploader=?");
			$stmt->bind_param("s", $uname);
			$stmt->execute();
			$stmt->store_result();

			$rows = $stmt->num_rows;
			if ($rows > 0) {
				$stmt->bind_result($pid);
				while ($stmt->fetch()) {
					$posts[] = $pid;
				}
			} else {
				echo "<script>window.location.href='/adminp/users'</script>";
			}

			$stmt->free_result();
			$stmt->close();

			if (count($posts) > 0) {
				$done = 0;
				for ($i = 0; $i < count($posts); $i++) {
					$stmt = $conn->prepare("UPDATE posts SET post_uploader=? WHERE id=?");
					$stmt->bind_param("si", $guname, $posts[$i]);
					if ($stmt->execute()) {
						$done += 1;
					}
					$stmt->close();
				}
				if ($done == count($posts)) {
					echo "<script>window.location.href='/adminp/users'</script>";
				} else {
					echo "There's been a weird error " . $done;
				}
			}
			
		}
	}

 ?>

<script type="text/javascript" src="https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/5/tinymce.min.js"></script>
<script type="text/javascript" src="/adminp/js/editor.js"></script>

<form action="#" method="POST">

	<div class="row">

		<div class="form-group col-md-1">
			<label>User Id</label>
			<input type="text" name="uid" class="form-control" disabled value="<?php echo $uid; ?>">
		</div>
		<div class="form-group col-md-4">
			<label>User name</label>
			<input type="text" name="uname" class="form-control" value="<?php echo $uname; ?>">
		</div>
		<div class="form-group col-md-4">
			<label>User Mail</label>
			<input type="text" name="umail" class="form-control" value="<?php echo $umail; ?>">
		</div>
		<div class="form-group col-md-3">
			<label>Admin</label>
			<input type="number" name="uadmin" class="form-control" value="<?php echo $uadmin; ?>">
		</div>
		<script type="text/javascript">
			window.onload = () => {
				tinymce.get('editor').setContent(`<?php echo $udescr; ?>`);
			}
		</script>
		<div class="form-group col-md-12">
			<label>Description</label>
			<textarea name="udescr" class="form-control" id="editor"></textarea>
		</div>

		<div class="form-group col-md-12">
			<label>Edit:</label>
			<input type="submit" name="submit" class="form-control btn-success" value="Edit">
		</div>

	</div>

</form>