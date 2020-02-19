<?php 

	//SITE CONFIG
	$GLOBALS['SITE_NAME'] = "LitCMS";
	$GLOBALS['SITE_DESC'] = "A lightweight and opensource CMS";
	$GLOBALS['SITE_TAGS'] = "lightweight, cms, free, opensource, gnu, gpl, php, html, css, github, git, bootstrap";
	$GLOBALS['SITE_AUTH'] = "BeepBoop486";

	$GLOBALS['FEATURED'] = "0";
	/*
	 * 0 - Will select the posts where "is_featured" is one (in db)
	 * 1 - Will select just the latest posts
	 */

	//SITE MEDIA
	$GLOBALS['SOCIAL_FACEBOOK'] = "";
	$GLOBALS['SOCIAL_TWITTER'] = "";
	$GLOBALS['SOCIAL_INSTAGRAM'] = "";
	$GLOBALS['SOCIAL_PINTEREST'] = "";

	//SITE DIRS CONFIG
	$GLOBALS['CSS_DIR'] = "/css/";
	$GLOBALS['JS_DIR'] = "/js/";

	//SITE STYLES
	$styles[] = $GLOBALS["CSS_DIR"] . "base.css";
	$styles[] = $GLOBALS["CSS_DIR"] . "fonts.css";
	$styles[] = $GLOBALS["CSS_DIR"] . "vendor.css";
	$styles[] = $GLOBALS["CSS_DIR"] . "main.css";
	$styles[] = $GLOBALS["CSS_DIR"] . "font-awesome/css/font-awesome.min.css";
	$styles[] = "https://fonts.googleapis.com/css?family=Lemonada&display=swap";

	//SITE SCRIPTS
	$scripts[] = $GLOBALS["JS_DIR"] . "jquery-3.4.1.min.js";
	$scripts[] = $GLOBALS["JS_DIR"] . "modernizr.js";
	$scripts[] = $GLOBALS["JS_DIR"] . "pace.js";
	$scripts[] = $GLOBALS["JS_DIR"] . "plugins.js";
	$scripts[] = $GLOBALS["JS_DIR"] . "main.js";

	//OTHER STUFF

	$menus[] = "Home";
	$menus[] = "Who we are?";
	$menus[] = "Blog";
	$menus[] = "Media";

	$menu_link[] = "/";
	$menu_link[] = "/who-we-are";
	$menu_link[] = "/blog";
	$menu_link[] = "/media";

?>
