<?php 

	if ($index != 1) {
		exit;
	}

	if (!isset($_GET['pageno'])) {
		$pageno = 1;
	} else {
		$pageno = $_GET['pageno'];
	}

	//A basic pagination system
	$no_of_records_per_page = 10;
	$offset = ($pageno-1) * $no_of_records_per_page;

 ?>

<section class="s-content">
	<div class="row masonry-wrap">
		<div class="masonry">
			
			<div class="grid-sizer"></div>

			<?php 

				$stmt = $conn->prepare("SELECT * FROM posts ORDER BY id DESC LIMIT ?,?");
				$stmt->bind_param("ii", $offset, $no_of_records_per_page);
				if ($stmt->execute()) {
					$stmt->bind_result($pid, $pname, $pcnt, $pupl, $pthumb, $pdate, $ptags, $pcat, $pf);
					while ($stmt->fetch()) {
						$excerpt = substr($pcnt, 0, 100) . " [...]";
						echo '

						<article class="masonry__brick entry format-standard" data-aos="fade-up">

							<div class="entry__thumb">
								<a href="/p/'.$pid.'" class="entry__thumb-link">
									<img src="'.$pthumb.'">
								</a>
							</div>

							<div class="entry__text">
								<div class="entry__header">

									<div class="entry__date">
										<a href="/p/'.$pid.'">'.$pdate.'</a>
									</div>
									<h1 class="entry__title"><a href="/p/'.$pid.'">'.$pname.'</a></h1>

								</div>
								<div class="entry__excerpt">
									<p>
										'.$excerpt.'
									</p>
								</div>
							</div>

						</article>

						';
					}
				}

			 ?>

		</div>
	</div>
</section>