<!-- /. -->
<?php if(!defined("KEY")) die("script cannot be accessed directly."); ?>
<?php
$ct = $_GET['ct'];
if($ct == "home") $home = "active"; 
elseif($ct == "overview") $overview = "active";
elseif($ct == "events") $events = "active";
elseif($ct == "services") $services = "active";
elseif($ct == "about") $about = "active";
elseif($ct == "contact") $contact = "active";
elseif($ct == "schedule") $schedule = "active";
?>

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav nav2">
            <li class="<?php echo $home; ?>">
                <a href="<?php echo "?ct=home"; ?>">Dashboard</a>
            </li>
            <li class="<?php echo $overview; ?>">
                <a href="<?php echo "?ct=overview"; ?>">Overview</a>
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
            <li class="<?php echo $schedule; ?>">
                <a href="<?php echo "?ct=schedule"; ?>">Schedules</a>
            </li>
        </ul>
    </div>
    
