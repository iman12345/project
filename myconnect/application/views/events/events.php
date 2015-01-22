<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/carousel.css"/>

<div id="page-content-wrapper">
  <div class="container-fluid" style="font-size:90%;">
  
  <div class="row">
    <div class="col-sm-10">
  
    <div class="page-header">
      <h1>
        <small>Events</small>
        <button style="margin-top:-5px;" type="button" class="btn btn-success btn-md pull-right" data-toggle="modal" data-target="#bookModal">
          <span class="glyphicon glyphicon-calendar"></span> Create Event
        </button>
      </h1>
    </div>
  
	<iframe src="<?php echo base_url(); ?>events_cal.html" width="100%" height="800" frameborder="0"></iframe>    
    
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

</script>
      