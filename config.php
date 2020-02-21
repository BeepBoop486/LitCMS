<?php 

	//SITE CONFIG
	$GLOBALS['SITE_NAME'] = "LitCMS";
	$GLOBALS['SITE_DESC'] = "A lightweight and opensource CMS";
	$GLOBALS['SITE_TAGS'] = "lightweight, cms, free, opensource, gnu, gpl, php, html, css, github, git, bootstrap";
	$GLOBALS['SITE_AUTH'] = "BeepBoop486";

	$GLOBALS['FEATURED'] = 0;
	/*
	 * 0 - Will select the posts where "is_featured" is one (in db)
	 * 1 - Will select just the latest posts
	 */

	$GLOBALS['registration_enabled'] = 1;
	// 0 - disabled, 1 - enabled

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
	$styles[] = $GLOBALS["CSS_DIR"] . "vendor.css";
	$styles[] = $GLOBALS["CSS_DIR"] . "main.css";

	//SITE SCRIPTS
	$scripts[] = $GLOBALS["JS_DIR"] . "modernizr.js";
	$scripts[] = $GLOBALS["JS_DIR"] . "pace.js";

	//OTHER STUFF

	$menus[] = "Home";
	$menus[] = "Register";
	$menus[] = "Sign In";

	$menu_link[] = "/";
	$menu_link[] = "/register";
	$menu_link[] = "/login";

?>
