<div class="menu-toggle">
  <a href="#menu-toggle" class="" id="menu-toggle">
    <span id="hand" class=""></span></a>
</div>

<!-- Sidebar -->
<div id="sidebar-wrapper">
  <ul class="sidebar-nav">
    <li class="<?php if($menu == 'home'){ echo "active";} ?>">
	  <?php echo anchor('home', 'Dashboard'); ?>
    </li>
    <li class="<?php if($menu == 'services'){ echo "active";} ?>">
	  <?php echo anchor('services', 'Maintenance Services'); ?>
    </li>
    <li class="<?php if($menu == 'facilities'){ echo "active";} ?>">
	  <?php echo anchor('facilities', 'Facilities Management'); ?>
    </li>
    <li class="<?php if($menu == 'events'){ echo "active";} ?>">
	  <?php echo anchor('events', 'Create Events'); ?>
    </li>
    <!--<li class="<?php if($menu == 'about'){ echo "active";} ?>">
	  <?php echo anchor('about', 'About Us'); ?>
    </li>
    <li class="<?php if($menu == 'contact'){ echo "active";} ?>">
	  <?php echo anchor('contact', 'Contact Us'); ?>
    </li>-->
  </ul>
  
  <div class="copyright" style="margin-right:20px; margin-bottom:50px;">
  	<div id="menuDate"></div>
  </div>
  
  <div class="copyright">
    <p>© 2014 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
  </div>
</div><!-- /#sidebar-wrapper -->
    
<script>

if($(window).width() >= 768){
	$( "#hand" ).addClass("glyphicon glyphicon-chevron-left");
}
else {
	$( "#hand" ).addClass("glyphicon glyphicon-chevron-right");	
}

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
	});
	
	$('#menuDate').datepicker({
		todayHighlight:true
	});
	
</script>
