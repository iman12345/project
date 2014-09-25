<!-- /. -->
<?php if(!defined("KEY")) die("script cannot be accessed directly."); ?>
<?php
$ct = $_GET['ct'];
if($ct == "home") $home = "active"; 
elseif($ct == "overview") $overview = "active";
elseif($ct == "facilities") $schedule = "active";
elseif($ct == "events") $events = "active";
elseif($ct == "services") $services = "active";
elseif($ct == "about") $about = "active";
elseif($ct == "contact") $contact = "active";
?>
<div class="menu-toggle">
  <a href="#menu-toggle" class="" id="menu-toggle">
    <span id="hand" class="glyphicon glyphicon-chevron-left"></span></a>
</div>
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="<?php echo $home; ?>">
                <a href="<?php echo "?ct=home"; ?>">Dashboard</a>
            </li>
            <!--<li class="<?php echo $overview; ?>">
                <a href="<?php echo "?ct=overview"; ?>">Overview</a>
            </li>-->
            <li class="<?php echo $schedule; ?>">
                <a href="<?php echo "?ct=facilities"; ?>">Facilities</a>
            </li>
            <li class="<?php echo $events; ?>">
                <a href="<?php echo "?ct=events"; ?>">Events</a>
            </li>
            <li class="<?php echo $services; ?>">
                <a href="<?php echo "?ct=services"; ?>">Services</a>
            </li>
            <li class="<?php echo $about; ?>">
                <a href="<?php echo "?ct=about"; ?>">About</a>
            </li>
            <li class="<?php echo $contact; ?>">
                <a href="<?php echo "?ct=contact"; ?>">Contact</a>
            </li>
        </ul>
        <!--  style="position:fixed; bottom:0; font-size:.7em; color:#999999;" -->
        <div class="copyright">
          <p>© 2014 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
        </div>

    </div>
    
	<script>
	$("#menu-toggle").click(function(e) {
	  e.preventDefault();
	  $("#wrapper").toggleClass("toggled");
	});
	$( "#menu-toggle" ).click(function(){
		if($( "#hand" ).attr("class") == "glyphicon glyphicon-chevron-left"){
		  $( "#hand" ).removeClass("glyphicon glyphicon-chevron-left");
		  $( "#hand" ).addClass("glyphicon glyphicon-chevron-right");
		}
		else{
		  $( "#hand" ).removeClass("glyphicon glyphicon-chevron-right");
		  $( "#hand" ).addClass("glyphicon glyphicon-chevron-left");
		}  
		//$( "#hand" ).switchClass( "glyphicon glyphicon-hand-right glyphicon", "glyphicon glyphicon-hand-left glyphicon");
	});
    </script>
