<div id="page-content-wrapper">
  <div class="container-fluid" style="font-size:90%; zoom: 90%;">
  
  <div class="row">
    <div class="col-sm-10" id="body">
    
  	  <!-- Analytics Header -->
	  <div class="row clearfix" style="margin-top:20px;">
        <div class="col-sm-4">
            <ul class="nav nav-pills nav-justified" role="tablist" id="myTab">
              <li role="presentation" class="active">
                <a href="#calView" aria-controls="calView" role="tab" data-toggle="tab">Calendar View</a>
              </li>
              <li role="presentation" class="">
                <a href="#listView" aria-controls="listView" role="tab" data-toggle="tab">List View</a>
              </li>
            </ul>
        </div>
        <div class="col-sm-3 pull-right text-right">    
          <a id="print" role="button" class="btn btn-primary" href="#"><span class="glyphicon glyphicon-print"></span> Print</a>        
          <a id="export" role="button" class="btn btn-primary" href="#"><span class="glyphicon glyphicon-export"></span> Export</a>        
        </div> 
      </div><!-- /.row -->
 
      <hr style="margin-bottom:10px;margin-top:10px" /> 
      
      <div class="tab-content">
      
        <div role="tabpanel" class="tab-pane active" id="calView">

		  <iframe src="<?php echo base_url(); ?>events_cal.html" width="100%" height="800" frameborder="0"></iframe>  
        
        </div><!-- /.tab-pane #calView -->
                
        <div role="tabpanel" class="tab-pane" id="listView">
        
    <div class="container">
		<div class="row">
			<div class="col-sm-10">
				<ul class="event-list">
					<li>
						<time datetime="2014-07-20">
							<span class="day">4</span>
							<span class="month">Jul</span>
							<span class="year">2014</span>
							<span class="time">ALL DAY</span>
						</time>
						<img alt="Independence Day" src="https://farm4.staticflickr.com/3100/2693171833_3545fb852c_q.jpg" />
						<div class="info">
							<h2 class="title">Independence Day</h2>
							<p class="desc">United States Holiday</p>
						</div>
						<div class="social">
							<ul>
								<li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
								<li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
								<li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
							</ul>
						</div>
					</li>

					<li>
						<time datetime="2014-07-20 0000">
							<span class="day">8</span>
							<span class="month">Jul</span>
							<span class="year">2014</span>
							<span class="time">12:00 AM</span>
						</time>
						<div class="info">
							<h2 class="title">One Piece Unlimited World Red</h2>
							<p class="desc">PS Vita</p>
							<ul>
								<li style="width:50%;"><a href="#website"><span class="fa fa-globe"></span> Website</a></li>
								<li style="width:50%;"><span class="fa fa-money"></span> $39.99</li>
							</ul>
						</div>
						<div class="social">
							<ul>
								<li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
								<li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
								<li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
							</ul>
						</div>
					</li>

					<li>
						<time datetime="2014-07-20 2000">
							<span class="day">20</span>
							<span class="month">Jan</span>
							<span class="year">2014</span>
							<span class="time">8:00 PM</span>
						</time>
						<img alt="My 24th Birthday!" src="https://farm5.staticflickr.com/4150/5045502202_1d867c8a41_q.jpg" />
						<div class="info">
							<h2 class="title">Mouse0270's 24th Birthday!</h2>
							<p class="desc">Bar Hopping in Erie, Pa.</p>
							<ul>
								<li style="width:33%;">1 <span class="glyphicon glyphicon-ok"></span></li>
								<li style="width:34%;">3 <span class="fa fa-question"></span></li>
								<li style="width:33%;">103 <span class="fa fa-envelope"></span></li>
							</ul>
						</div>
						<div class="social">
							<ul>
								<li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
								<li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
								<li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
							</ul>
						</div>
					</li>

					<li>
						<time datetime="2014-07-31 1600">
							<span class="day">31</span>
							<span class="month">Jan</span>
							<span class="year">2014</span>
							<span class="time">4:00 PM</span>
						</time>
						<img alt="Disney Junior Live On Tour!" src="http://www.thechaifetzarena.com/images/main/DL13_PiratePrincess_thumb.jpg" />
						<div class="info">
							<h2 class="title">Disney Junior Live On Tour!</h2>
							<p class="desc"> Pirate and Princess Adventure</p>
							<ul>
								<li style="width:33%;">$49.99 <span class="fa fa-male"></span></li>
								<li style="width:34%;">$29.99 <span class="fa fa-child"></span></li>
							</ul>
						</div>
						<div class="social">
							<ul>
								<li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
								<li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
								<li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
            
        </div><!-- /.tab-pane #listView -->
        
      </div><!-- /.tab-content -->
    
    </div><!-- /.col-sm-10 -->
    
<!-- Modal -->
<div class="modal fade" id="bookModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Create Event</h4>
      </div><!-- /.modal-header -->
      <div class="modal-body">
        <form role="form">
          <div class="form-group">
            <label for="inputCaption">Caption</label>
            <input type="text" class="form-control" id="inputCaption" placeholder="">
          </div>
          <div class="form-group">
            <label for="inputDate">Date</label>
            <input type="text" class="form-control" id="eventsDate" placeholder="">
          </div>
          <div class="form-group">
            <label for="inputImg">Image</label>
            <div class="row">
              <input type="file" id="inputImg" class="col-sm-5" name="image" />
              <div id="imagePreview" class="col-sm-5 col-sm-offset-1"></div>
            </div>
            <p class="help-block">type : .jpg .png</p>
          </div>
          <div class="form-group text-right">
            <button type="submit" class="btn btn-success">Submit</button>
            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
          </div>
        </form>
      </div><!-- /.modal-body -->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal fade -->


<script>

$( "#dialog-form" ).dialog({
	autoOpen: false,
	width: 600,
	modal: true
});
	
$( "#create-event" ).click(function() {
	$( "#dialog-form" ).dialog( "open" );
});	
$( "#dialog-close" ).click(function() {
	$( "#dialog-form" ).dialog( "close" );
});	
$("#inputImg").on("change", function(){
	var files = !!this.files ? this.files : [];
	if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

	if (/^image/.test( files[0].type)){ // only image file
		var reader = new FileReader(); // instance of the FileReader
		reader.readAsDataURL(files[0]); // read the local file

		reader.onloadend = function(){ // set image data as background of div
			$("#imagePreview").css("background-image", "url("+this.result+")");
		}
	}
});

$("#eventsDate").datepicker();


$('#myTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
});

</script>
      