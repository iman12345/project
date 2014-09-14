<div id="page-content-wrapper">
<!-- Page Content -->
  <div class="container-fluid" style="font-size:90%;">

    <a href="#menu-toggle" class="" id="menu-toggle" style="font-size:80%; margin-top:-5%;">
      <span id="hand" class="glyphicon glyphicon-hand-left"></span> Show/Hide Menu</a>
    <br /><br />
	
	<script type="text/javascript" charset="utf-8">
        function init() {

            scheduler.locale.labels.timeline_tab = "Timeline";
            scheduler.locale.labels.section_custom="Section";
            scheduler.config.details_on_create=true;
            scheduler.config.details_on_dblclick=true;
            scheduler.config.xml_date="%Y-%m-%d %H:%i";

            //===============
            //Configuration
            //===============
            var sections=[
                {key:1, label:"James Smith"},
                {key:2, label:"John Williams"},
                {key:3, label:"David Miller"},
                {key:4, label:"Linda Brown"}
            ];

            scheduler.createTimelineView({
                name:	"timeline",
                x_unit:	"minute",
                x_date:	"%i",
                x_step: 15,
                x_size: 24,
                x_start: 8*4,
                x_length: 24*60/15,
                y_unit:	sections,
                y_property:	"section_id",
                render:"bar",
				second_scale:{
					x_unit: "hour", // unit which should be used for second scale
					x_date: "%H" // date format which should be used for second scale, "July 01"
				}
            });

            //===============
            //Data loading
            //===============
            scheduler.config.lightbox.sections=[
                {name:"description", height:130, map_to:"text", type:"textarea" , focus:true},
                {name:"custom", height:23, type:"select", options:sections, map_to:"section_id" },
                {name:"time", height:72, type:"time", map_to:"auto"}
            ];

            scheduler.init('scheduler_here',new Date(2009,5,30),"timeline");
            scheduler.parse([
                { start_date: "2009-06-30 09:00", end_date: "2009-07-01 12:00", text:"Task A-12458", section_id:1},
                { start_date: "2009-06-30 10:00", end_date: "2009-06-30 21:00", text:"Task A-89411", section_id:1},
                { start_date: "2009-06-30 10:00", end_date: "2009-07-01 14:00", text:"Task A-64168", section_id:1},
                { start_date: "2009-06-30 16:00", end_date: "2009-07-02 17:00", text:"Task A-46598", section_id:1},

                { start_date: "2009-06-30 12:00", end_date: "2009-07-02 20:00", text:"Task B-48865", section_id:2},
                { start_date: "2009-06-30 14:00", end_date: "2009-06-30 18:00", text:"Task B-44864", section_id:2},
                { start_date: "2009-06-30 16:30", end_date: "2009-07-01 18:00", text:"Task B-46558", section_id:2},
                { start_date: "2009-06-30 18:30", end_date: "2009-07-01 00:00", text:"Task B-45564", section_id:2},

                { start_date: "2009-06-30 08:00", end_date: "2009-07-01 12:00", text:"Task C-32421", section_id:3},
                { start_date: "2009-07-01 14:30", end_date: "2009-07-02 16:45", text:"Task C-14244", section_id:3},

                { start_date: "2009-07-01 09:20", end_date: "2009-07-01 18:20", text:"Task D-52688", section_id:4},
                { start_date: "2009-06-30 11:40", end_date: "2009-06-30 21:30", text:"Task D-46588", section_id:4},
                { start_date: "2009-07-01 12:00", end_date: "2009-07-02 18:00", text:"Task D-12458", section_id:4}
            ],"json");
        }
		
		window.onload = init();
    </script>
    
	<div id="scheduler_here" class="dhx_cal_container" style='width:100%; height:100%;'>
		<div class="dhx_cal_navline">
			<div class="dhx_cal_prev_button">&nbsp;</div>
			<div class="dhx_cal_next_button">&nbsp;</div>
			<div class="dhx_cal_today_button"></div>
			<div class="dhx_cal_date"></div>
			<div class="dhx_cal_tab" name="day_tab" style="right:204px;"></div>
			<div class="dhx_cal_tab" name="week_tab" style="right:140px;"></div>
			<div class="dhx_cal_tab" name="timeline_tab" style="right:280px;"></div>
			<div class="dhx_cal_tab" name="month_tab" style="right:76px;"></div>
		</div>
		<div class="dhx_cal_header">
		</div>
		<div class="dhx_cal_data">
		</div>		
	</div>
    
    <!-- FOOTER -->
    <hr class="featurette-divider" />
    
    <footer>
      <p class="pull-right"><a href="#">Back to top</a></p>
      <p>© 2014 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
	</footer>
  
  </div><!-- /.container-fluid -->
</div><!-- /#page-content-wrapper -->

<script>

    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    $("#menu-toggle").click(function () {
        if ($("#hand").attr("class") == "glyphicon glyphicon-hand-left") {
            $("#hand").removeClass("glyphicon glyphicon-hand-left", 500);
            $("#hand").addClass("glyphicon glyphicon-hand-right", 500);
        }
        else {
            $("#hand").removeClass("glyphicon glyphicon-hand-right", 500);
            $("#hand").addClass("glyphicon glyphicon-hand-left", 500);
        }

        //$( "#hand" ).switchClass( "glyphicon glyphicon-hand-right glyphicon", "glyphicon glyphicon-hand-left glyphicon");
    });

</script>
