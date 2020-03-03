<?php 

	$stmt = $conn->prepare("SELECT * FROM config LIMIT 1");
	$stmt->execute();
	$stmt->bind_result($GLOBALS["SITE_NAME"], $GLOBALS['SITE_DESC'], $GLOBALS["SITE_TAGS"], $GLOBALS["SITE_AUTH"], $GLOBALS["FEATURED"], $GLOBALS["registration_enabled"],$GLOBALS['SOCIAL_FACEBOOK'],$GLOBALS['SOCIAL_TWITTER'],$GLOBALS['SOCIAL_INSTAGRAM'],$GLOBALS['SOCIAL_PINTEREST']);
	$stmt->fetch();
	$stmt->close();

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
	//$menus[] = "Users";

	$menu_link[] = "/";
	//$menu_link[] = "#0";

	$menu_child[] = ""; //Home child
	//$menu_child[] = ["Login", "Register"];

	$menu_childl[] = ""; //Home child links
	//$menu_childl[] = ["/login", "/register"]; //Home child links

?>
