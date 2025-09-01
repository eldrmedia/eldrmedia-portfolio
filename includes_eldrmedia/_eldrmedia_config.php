<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/contact/index.php":
			$CURRENT_PAGE = "contact";
			$CLIENT = "eldrmedia";
			$PAGE_TITLE = "ELDR MEDIA - Let's Connect";
			break;
		case "/about/index.php":
			$CURRENT_PAGE = "about";
			$CLIENT = "eldrmedia";
			$PAGE_TITLE = "ELDR MEDIA - About";
			break;
		case "/work/index.php":
			$CURRENT_PAGE = "work";
			$CLIENT = "eldrmedia";
			$PAGE_TITLE = "ELDR MEDIA - Work";
			break;
		case "/work/blackberg-group/index.php":
			$CURRENT_PAGE = "blackberg-group";
			$CLIENT = "blackberg-group";
			$PAGE_TITLE = "ELDR MEDIA - Blackberg Group";
			break;	
		case "/work/blackberg-group/design-system/index.php":
			$CURRENT_PAGE = "blackberg-group-design-system"; 
			$CLIENT = "blackberg-group";
			$PAGE_TITLE = "ELDR MEDIA - Blackberg Group Design System";
			break;			
		case "/work/blackberg-group/bd-portal/index.php":
			$CURRENT_PAGE = "blackberg-group-bd-portal"; 
			$CLIENT = "blackberg-group";
			$PAGE_TITLE = "ELDR MEDIA - Blackberg Group BD Portal";
			break;						
		case "/work/blackberg-group/website/index.php":
			$CURRENT_PAGE = "blackberg-group-website"; 
			$CLIENT = "blackberg-group";
			$PAGE_TITLE = "ELDR MEDIA - Blackberg Group Website";
			break;			
		case "/work/quorum/index.php":
			$CURRENT_PAGE = "quorum";
			$CLIENT = "quorum"; 
			$PAGE_TITLE = "ELDR MEDIA - Quorum";
			break;	
		case "/work/quorum/design-system/index.php":
			$CURRENT_PAGE = "quorum-design-system"; 
			$CLIENT = "quorum";
			$PAGE_TITLE = "ELDR MEDIA - Quorum Design System";
			break;		
		case "/work/quorum/wrapped/index.php":
			$CURRENT_PAGE = "quorum-design-system"; 
			$CLIENT = "quorum";
			$PAGE_TITLE = "ELDR MEDIA - Quorum Wrapped";
			break;		
		case "/work/roll20/index.php":
			$CURRENT_PAGE = "roll20";
			$CLIENT = "roll20";
			$PAGE_TITLE = "ELDR MEDIA - Roll20 Design System, Website & Mobile App";
			break;
		case "/work/roll20/design-system/index.php":
			$CURRENT_PAGE = "roll20-design-system"; 
			$CLIENT = "roll20";
			$PAGE_TITLE = "ELDR MEDIA - Roll20 Design System";
			break;	
		case "/work/chilld-bags/index.php":
			$CURRENT_PAGE = "chilld-bags";
			$CLIENT = "chilld-bags";
			$PAGE_TITLE = "ELDR MEDIA - Chill'd Bags E-Commerce Website & Mobile App";
			break;
		case "/work/foundation/index.php":
			$CURRENT_PAGE = "foundation";
			$CLIENT = "ebizautos";
			$PAGE_TITLE = "ELDR MEDIA - Foundation";
			break;
		case "/work/project-1/index.php":
			$CURRENT_PAGE = "carsense";
			$CLIENT = "ebizautos";
			$PAGE_TITLE = "ELDR MEDIA - CarSense NextGen Website Redesign";
			break;
		case "/work/project-2/index.php":
			$CURRENT_PAGE = "ebizautos-capture";
			$CLIENT = "ebizautos";
			$PAGE_TITLE = "ELDR MEDIA - Capture Mobile App";
			break;
		default:
			$CURRENT_PAGE = "home";
			$CLIENT = "eldrmedia";
			$PAGE_TITLE = "ELDR MEDIA - UI/UX Creative Director";
	}
	$SITE_TITLE = "ELDR MEDIA - Product & Design System Designer";
	$BASE_URL = "/";
	$RESOURCES_URL = "/resources/";
?>
