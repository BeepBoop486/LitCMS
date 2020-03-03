<?php 

	include 'funcs/generateCards.php';

 ?>

<div class="d-sm-flex align-items">
	<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>

<div class="row">
	
	<?php 

		$stmt = $conn->prepare("SELECT * FROM posts");
		$stmt->execute();
		$stmt->store_result();
		$posts = $stmt->num_rows();
		$stmt->close();

		$stmt = $conn->prepare("SELECT * FROM categories");
		$stmt->execute();
		$stmt->store_result();
		$cats = $stmt->num_rows();
		$stmt->close();


		Card("success","Total posts", $posts, "comment-alt");
		Card("primary","Total categories", $cats, "list");

	 ?>

</div>