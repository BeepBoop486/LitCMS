<?php 

	//SITE CONFIG
	$GLOBALS['SITE_NAME'] = "LitCMS";
	$GLOBALS['SITE_DESC'] = "A lightweight and opensource CMS";
	$GLOBALS['SITE_TAGS'] = "lightweight, cms, free, opensource, gnu, gpl, php, html, css, github, git, bootstrap";
	$GLOBALS['SITE_AUTH'] = "BeepBoop486";

	//SITE DIRS CONFIG
	$GLOBALS['CSS_DIR'] = "/css/";
	$GLOBALS['JS_DIR'] = "/js/";

	//SITE STYLES
	$styles[] = $GLOBALS["CSS_DIR"] . "bootstrap.min.css";

	//SITE SCRIPTS
	$scripts[] = $GLOBALS["JS_DIR"] . "jquery-3.4.1.min.js";
	$scripts[] = $GLOBALS["JS_DIR"] . "bootstrap.min.js";
	$scripts[] = $GLOBALS["JS_DIR"] . "bootstrap.bundle.js";

?>