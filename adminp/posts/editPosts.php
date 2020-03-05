<?php 

	include '../inc/header.php';

	$stmt = $conn->prepare("SELECT id,post_name,post_uploader,post_date FROM posts ORDER BY id DESC");
	$stmt->execute();
	$stmt->store_result();
	$stmt->bind_result($pid,$pname,$pupl,$pdate);

?>
<table class="table">
	<thead>
		<th scope="col">#</th>
		<th scope="col">Name</th>
		<th scope="col">Author</th>
		<th scope="col">Date</th>
		<th scope="col">Edit</th>
	</thead>
<?php

	while ($stmt->fetch()) {
		echo '
			<tr>
				<th scope="row">'.$pid.'</th>
				<th><a href="/adminp/posts/editPost.php?id='.$pid.'">'.$pname.'</a></th>
				<th>'.$pupl.'</th>
				<th>'.$pdate.'</th>
				<th><a href="/adminp/posts/editPost.php?id='.$pid.'"><i class="fas fa-fw fa-edit"></i> Edit</a></th>
			</tr>
		';
	}

	$stmt->close();

?>
</table>