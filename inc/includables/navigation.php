<nav class="header__nav-wrap">
	<h2 class="header__nav-heading h6">Site Navigation</h2>

	<ul class="header__nav">
	<?php
		for($i = 0; $i < count($menus); $i++) {
			if ($menu_child[$i] == "") {
				echo '<li><a href="'.$menu_link[$i].'">'.$menus[$i].'</a></li>';
			} else {
				echo '<li class="has-children">
						<a href="'.$menu_link[$i].'">'.$menus[$i].'</a>
						<ul>
						';

				foreach ($menu_child[$i] as $key => $value) {
					echo '
						<li><a href="'.$menu_childl[$i][$key].'">'.$value.'</a></li>
					';
				}

				echo '
						</ul>
					   </li>';
			}
		}
	?>
	<?php if(!isset($_SESSION['name'])) : ?>
	<li class="has-children">
		<a href="#0">Users</a>
		<ul>
			<li><a href="/login">Login</a></li>
			<li><a href="/register">Register</a></li>
		</ul>
	</li>
	<?php else: ?>
		<li><a href="/adminp">Admin panel</a></li>
	<?php endif; ?>
	</ul>

	<a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu"></a>

</nav>
