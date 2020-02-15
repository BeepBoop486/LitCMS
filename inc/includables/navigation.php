<nav class="header__nav-wrap">
	<h2 class="header__nav-heading h6">Site Navigation</h2>

	<ul class="header__nav">
	<?php
		for($i = 0; $i < count($menus); $i++) {
			echo '<li><a href="'.$menu_link[$i].'">'.$menus[$i].'</a></li>';
		}
	?>
	</ul>

</nav>
