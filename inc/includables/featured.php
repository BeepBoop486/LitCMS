<div class="pageheader-content row">
	<div class="col-full">

		<div class="featured">

			<?php 
				//This will be the latest post
				$stmt = $conn->prepare("SELECT * FROM posts WHERE is_featured=? LIMIT 1");
				$feat = 1;
				$stmt->bind_param("i", $feat);
				$stmt->execute();

				$stmt->store_result();
				$rows = $stmt->num_rows;

				$stmt->bind_result($pid, $pname, $pcnt, $pupl, $pthumb, $pdate, $ptags, $pcat, $featured, $views);
				$stmt->fetch();

				if($rows > 0) {
					echo '
						<div class="featured__column featured__column--big sep">
							<div class="entry" style="background-image: url('.$pthumb.')">
								<div class="entry__content">
									<span class="entry__category"><a href="#">'.$pcat.'</a></span>
									<h1><a href="/p/'.$pid.'">'.$pname.'</a></h1>
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

				$feat = 0;
				$stmt1 = $conn->prepare("SELECT * FROM posts WHERE is_featured=? ORDER BY id DESC LIMIT 2");
				$stmt1->bind_param("i", $feat);
				$stmt1->execute();
				$stmt1->bind_result($ppid, $ppname, $ppcnt, $ppupl, $ppthumb, $ppdate, $pptags, $ppcat, $pfeatured, $views);
				while($stmt1->fetch()) {
					echo '
						<div class="featured__column featured__column--small sephalf">
							<div class="entry" style="background-image: url('.$ppthumb.')">
								<div class="entry__content">
								<span class="entry__category"><a href="#">'.$ppcat.'</a></span>
								<h1><a href="/p/'.$ppid.'">'.$ppname.'</a></h1>
								<div class="entry__info">
									<a href="#" class="entry__profile-pic">
										<img class="avatar" src="/images/default-pp.png">
									</a>
									<ul class="entry__meta">
										<li><a href="#0">'.$ppupl.'</a></li>
										<li>'.$ppdate.'</li>
									</ul>
								</div>
								</div>
							</div>
						</div>
					';
				}

				$stmt1->close();
			?>

		</div>

	</div>
</div> 
