<?php session_start(); define("KEY", "passed"); error_reporting(E_ALL & ~E_NOTICE) ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dashboard</title>

<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/js/highcharts.js"></script>
<script type="text/javascript" src="assets/js/modules/exporting.js"></script>

	<script src='assets/codebase/dhtmlxscheduler.js' type="text/javascript" charset="utf-8"></script>
	<script src='assets/codebase/ext/dhtmlxscheduler_timeline.js' type="text/javascript" charset="utf-8"></script>
	
	<link rel='stylesheet' type='text/css' href='assets/codebase/dhtmlxscheduler.css'>

<link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.css"/>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.css"/>
<link rel="stylesheet" type="text/css" href="assets/css/carousel.css"/>
<link rel="stylesheet" type="text/css" href="assets/css/msform.css"/>
<link rel="stylesheet" type="text/css" href="assets/css/gallery-effect.css"/>

</head>
<!-- /. -->
<body>
<div>
<!--
<div class="page-header-new">
  <div class="container-fluid">
    <span class="gallery">
      <a class="navbar-brand" href="#">
		<img src="assets/images/logo2.jpg" class="grayscale" />  Site Name         
      </a>
    </span>
  </div>
</div>
-->
<?php require_once("header.php"); ?>


<div id="wrapper">

  <?php require_once("contents/left_menu.php"); ?>
  <?php 
  
    $ct = $_GET['ct'];
	if($ct == "home") { include_once("contents/main.php"); }
	elseif($ct == "overview") { include_once("contents/overview.php"); }
	elseif($ct == "events") { include_once("contents/events.php"); }
	elseif($ct == "services") { include_once("contents/services.php"); }
	elseif($ct == "about") { include_once("contents/about.php"); }
	elseif($ct == "contact") { include_once("contents/contact.php"); }
	elseif($ct == "schedule") { include_once("contents/schedule.php"); }
	else { include_once("contents/main.php"); }
  
  ?>
  
</div><!-- ./wrapper -->

<?php require_once("footer.php"); ?>
</div>
</body>
</html>