<div id="page-content-wrapper">
  <div class="container-fluid" style="font-size:90%; zoom: 90%;">
  
  <div class="row" style="margin-top:20px;">
    <div class="col-sm-10" id="body">
    
  	  <!-- Analytics Header -->
	  <div class="row clearfix">
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
        
        </div> 
                
        <div role="tabpanel" class="tab-pane" id="listView">
        
          <h2>Agenda</h2>
          <hr />
          <div class="agenda">
            <div class="table-responsive">
              <table class="table table-condensed table-bordered">
                <thead>
                  <tr>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Event</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- Single event in a single day -->
                  <tr>
                    <td class="agenda-date" class="active" rowspan="1">
                      <div class="dayofmonth">26</div>
                      <div class="dayofweek">Saturday</div>
                      <div class="shortdate text-muted">July, 2014</div>
                    </td>
                    <td class="agenda-time">5:30 AM</td>
                    <td class="agenda-events">
                            <div class="agenda-event">
                                <i class="glyphicon glyphicon-repeat text-muted" title="Repeating event"></i> 
                                Fishing
                            </div>
                    </td>
                  </tr>
                    <!-- Multiple events in a single day (note the rowspan) -->
                    <tr>
                        <td class="agenda-date" class="active" rowspan="3">
                            <div class="dayofmonth">24</div>
                            <div class="dayofweek">Thursday</div>
                            <div class="shortdate text-muted">July, 2014</div>
                        </td>
                        <td class="agenda-time">
                            8:00 - 9:00 AM 
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event">
                                Doctor's Appointment
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="agenda-time">
                            10:15 AM - 12:00 PM 
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event">
                                Meeting with executives
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="agenda-time">
                            7:00 - 9:00 PM
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event">
                                Aria's dance recital
                            </div>
                        </td>
                    </tr>
                </tbody>
              </table>
            </div><!-- /.table-responsive -->
          </div><!-- /.agenda -->
            
        </div> 
      </div><!-- /.row -->
    
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
      