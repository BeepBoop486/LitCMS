<?php include 'db.php'; ?>
<!DOCTYPE html>
<html class="no-js">
<head>
	<title><?php echo $GLOBALS["SITE_NAME"]; ?></title>

	<meta charset="utf-8">
	<meta name="description" content="<?php echo $GLOBALS['SITE_DESC']; ?>">
	<meta name="keywords" content="<?php echo $GLOBALS['SITE_TAGS']; ?>">
	<meta name="author" content="<?php echo $GLOBALS['SITE_AUTH']; ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<?php

		for($i = 0; $i < count($styles); $i++) {
			echo '<link rel="stylesheet" type="text/css" href="'.$styles[$i].'">';
		}
		for($i = 0; $i < count($scripts); $i++) {
		echo '<script type="text/javascript" src="'.$scripts[$i].'"></script>';
		}

	 ?>

</head>
<body id="top">

	<!-- Header -->
	<section class="s-pageheader s-pageheader--home">
		<header class="header">
			<div class="header__content row">

				<div class="header__logo">
					<a href="/" class="logo" style="font-family: 'Lemonada', cursive; color: #fff; font-size: 34px;"><?php echo $GLOBALS["SITE_NAME"]; ?></a>
				</div>

				<!-- header__social -->

				<div class="header__social">
					<li>
						<a href="<?php echo $GLOBALS['SOCIAL_FACEBOOK']; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					</li>
					<li>
						<a href="<?php echo $GLOBALS['SOCIAL_TWITTER']; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					</li>
					<li>
						<a href="<?php echo $GLOBALS['SOCIAL_INSTAGRAM']; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					</li>
					<li>
						<a href="<?php echo $GLOBALS['SOCIAL_PINTEREST']; ?>"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
					</li>
				</div>

				<!-- End header__social -->

				<a class="header__search-trigger" href="#0"></a>

				<div class="header__search">
					<!-- TODO: THIS -->
					<form role="search" method="GET" class="header__search-form" action="">
						<label>
							<span class="hide-content">Search for:</span>
							<input type="search" class="search-field" placeholder="Type Keywords" value="" name="query">
						</label>
						<input type="submit" class="search-submit" value="Search">
					</form>
					<a href="#0" title="Close Search" class="header__overlay-close">Close</a>
				</div>

			</div>
		</header>
	</section>
	<!-- End header -->
