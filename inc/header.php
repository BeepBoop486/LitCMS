<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $GLOBALS["SITE_NAME"]; ?></title>

	<meta charset="utf-8">
	<meta name="description" content="<?php echo $GLOBALS['SITE_DESC']; ?>">
	<meta name="keywords" content="<?php echo $GLOBALS['SITE_TAGS']; ?>">
	<meta name="author" content="<?php echo $GLOBALS['SITE_AUTH']; ?>">

	<?php 

		for($i = 0; $i < count($styles); $i++) {
			echo '<link rel="stylesheet" type="text/css" href="'.$styles[$i].'">';
		}
		for($i = 0; $i < count($scripts); $i++) {
		echo '<script type="text/javascript" src="'.$scripts[$i].'"></script>';
		}

	 ?>

</head>
<body id="top" class="pace-done" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-delay="100">

	<div class="pace pace-inactive">
		<div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
  			<div class="pace-progress-inner"></div>
		</div>
		<div class="pace-activity"></div>
	</div>

	<!-- Header -->
	<section class="s-pageheader s-pageheader--home">
		<header class="header">
			<div class="header__content row">
				
				<div class="header__logo">
					<a href="/" class="logo" style="font-family: 'Lemonada', cursive; color: #fff; font-size: 34px;"><?php echo $GLOBALS["SITE_NAME"]; ?></a>
				</div>

			</div>
		</header>
	</section>
	<!-- End header -->