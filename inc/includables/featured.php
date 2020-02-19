<div class="pageheader-content row">
	<div class="col-full">

		<div class="featured">
			
			<?php 
				//This will be the latest post
				$stmt = $conn->prepare("SELECT * FROM posts ORDER BY id DESC LIMIT 1");
				$stmt->execute();
				$stmt->bind_result($pid, $pname, $pcnt, $pupl, $pthumb, $pdate, $ptags, $pcat, $featured);
				$stmt->fetch();

					//TODO: Go to an entry

				echo '
					<div class="featured__column featured__column--big">
						<div class="entry" style="background-image: url('.$pthumb.')">
							<div class="entry__content">

							<span class="entry__category"><a href="#">'.$pcat.'</a></span>

							<h1><a href="#">'.$pname.'</a></h1>

							<div class="entry__info">
								<a href="#" class="entry__profile-pic">
									<img class="avatar" src="/images/default-pp.png">
								</a>

								<ul class="entry__meta">
									<li><a href="#0">'.$pupl.'</a></li>
									<li>'.$pdate.'</li>
								</ul>
							</div>

							</div>
						</div>
					</div>
				';

				$stmt->close();

				$stmt = $conn->prepare("SELECT * FROM posts WHERE is_featured=? ORDER BY id DESC LIMIT 2");
				$feat = 1;
				$stmt->bind_param("i", $feat);
				$stmt->execute();
				while($stmt->fetch()) {
					$stmt->bind_result($pid, $pname, $pcnt, $pupl, $pthumb, $pdate, $ptags, $pcat, $featured);
					echo '
						<div class="featured__column featured__column--small">
							<div class="entry" style="background-image: url('.$pthumb.')">
								<div class="entry__content">

								<span class="entry__category"><a href="#">'.$pcat.'</a></span>

								<h1><a href="#">'.$pname.'</a></h1>

								<div class="entry__info">
									<a href="#" class="entry__profile-pic">
										<img class="avatar" src="/images/default-pp.png">
									</a>

									<ul class="entry__meta">
										<li><a href="#0">'.$pupl.'</a></li>
										<li>'.$pdate.'</li>
									</ul>
								</div>

								</div>
							</div>
						</div>
					';
				}

				$stmt->close();
			?>

		</div>

	</div>
</div>