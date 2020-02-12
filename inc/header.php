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
<body>