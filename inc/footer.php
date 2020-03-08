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