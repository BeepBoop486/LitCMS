<?php 

	function drawFooterPost($conn, $id)
	{
		$stmt = $conn->prepare("SELECT post_name,post_uploader,post_thumb,post_date FROM posts WHERE id=? LIMIT 1");
		$stmt->bind_param("i", $id);
		$stmt->execute();
		$stmt->bind_result($pname,$pupl, $pthumb, $pdate);
		$stmt->fetch();
		$stmt->close();

		echo '

<div class="col-block popular__post">
	<a href="/p/'.$id.'" class="popular__thumb">
		<img src="'.$pthumb.'">
	</a>
	<h5><a href="/p/'.$id.'">'.$pname.'</a></h5>
	<section>
		<span class="popular__author"><span>By</span> <a href="">'.$pupl.'</a></span>
		<span class="popular__date"><span>on</span> <time>'.$pdate.'</time></span>
	</section>
</div>

		';
	}

 ?>