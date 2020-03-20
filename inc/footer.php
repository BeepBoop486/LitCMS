<?php if(!isset($i) && $i != 1) : ?>
		<div class="row">
			<div class="col-full">
				<nav class="pgn">
					<ul>
						<?php if (isset($total_pages)) {
							for ($i=0; $i < $total_pages; $i++) { 
								$num = $i + 1;
								echo '
									<li><a class="pgn__num" href="?pageno='.$num.'">'.$num.'</a></li>
								';
							}
						}?>
					</ul>
				</nav>
			</div>
		</div>
	</section>
<?php else: ?>

	<?php include $_SERVER["DOCUMENT_ROOT"] . "/inc/func/footer.php"; ?>

	<section class="s-extra">
		<div class="row top">
			<div class="col-eight md-six tab-full popular">
				
				<h3>Popular posts</h3>

				<div class="block-1-2 block-m-full popular__posts">
					<?php 

						$ids = getPopularPostsId($conn, 6);
						for ($i=0; $i < count($ids); $i++) { 
							drawFooterPost($conn, $ids[$i]);
						}

					 ?>					
				</div>

			</div>
		</div>
	</section>
<?php endif; ?>

<div id="preloader">
	<div id="loader">
		<div class="line-scale">
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div>
	</div>
</div>

<script src="/js/jquery-3.2.1.min.js"></script>
<script src="/js/plugins.js"></script>
<script src="/js/main.js"></script>