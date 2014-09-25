<?php 
$ct = $_GET['ct'];

require_once "header.php";

echo "<div id='wrapper'>";

require_once("contents/left_menu.php");
 
if($ct == "home") { include_once("contents/main.php"); }
elseif($ct == "overview") { include_once("contents/overview.php"); }
elseif($ct == "events") { include_once("contents/events.php"); }
elseif($ct == "services") { include_once("contents/services.php"); }
elseif($ct == "about") { include_once("contents/about.php"); }
elseif($ct == "contact") { include_once("contents/contact.php"); }
elseif($ct == "schedule") { include_once("contents/schedule.php"); }
else { include_once("contents/main.php"); }
  
echo "</div><!-- ./wrapper -->";

require_once "footer.php";

?>