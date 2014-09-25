<?php session_start(); define("KEY", "passed"); error_reporting(E_ALL & ~E_NOTICE) ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dashboard</title>

<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui.js"></script>
   
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.css"/>
<link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.theme.css"/>

<link rel="stylesheet" type="text/css" href="assets/css/msform.css"/>
<link rel="stylesheet" type="text/css" href="assets/css/gallery-effect.css"/>

<!-- Chart -->
<script type="text/javascript" src="assets/js/highcharts.js"></script>
<script type="text/javascript" src="assets/js/modules/exporting.js"></script>

<!-- Scheduler -->
<script src='assets/codebase/dhtmlxscheduler.js' type="text/javascript" charset="utf-8"></script>
<script src='assets/codebase/ext/dhtmlxscheduler_timeline.js' type="text/javascript" charset="utf-8"></script>
<link rel='stylesheet' type='text/css' href='assets/codebase/dhtmlxscheduler.css'>

<style>
  body {  }
</style>

<script>

$( document ).tooltip({
  track: true
});

</script>

</head>
<body style="background-color:#FBFBFB;">

<?php 
  require_once("header.php"); 
  //session_destroy(); d9edf7
  //$_SESSION['level'] = 1; 
?>

<div id="wrapper">

  <?php 
    if($_SESSION['level'] == 1){
	  $cta = $_GET['cta'];
	  
	  require_once("admin/left_menu.php");
	  
	  if($cta == "home") { include_once("admin/home.php"); }
	  elseif($cta == "facilities") { include_once("admin/facilities.php"); }
	  elseif($cta == "events") { include_once("admin/events.php"); }
	  elseif($cta == "services") { include_once("admin/services.php"); }
	  else { include_once("admin/home.php"); }

	}
	
    else {
      $ct = $_GET['ct'];
	  
      require_once("contents/left_menu.php"); 
  	  
	  // left menu
	  if($ct == "home") { include_once("contents/main.php"); }
	  elseif($ct == "overview") { include_once("contents/overview.php"); }
	  elseif($ct == "facilities") { include_once("contents/schedule.php"); }
	  elseif($ct == "events") { include_once("contents/events.php"); }
	  elseif($ct == "services") { include_once("contents/services.php"); }
	  elseif($ct == "about") { include_once("contents/about.php"); }
	  elseif($ct == "contact") { include_once("contents/contact.php"); }
	  elseif($ct == "book") { include_once("contents/booking.php"); }
	  
	  // header menu
	  elseif($ct == "notif") include_once("contents/notifications.php");
	  else { include_once("contents/main.php"); }
	  
	}
  
  ?>
  
</div><!-- ./wrapper -->

<?php require_once("footer.php"); ?>

</body>
</html>