<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/carousel-mini.css"/>

<div id="page-content-wrapper">
  <div class="container-fluid" style="font-size:90%;">
    
    <div class="row">
      <div class="col-sm-10">
      
    <div class="page-header">
      <h1>
        <small>Maintenance Services</small>
        <button style="margin-top:-5px;" type="button" class="btn btn-success btn-md pull-right" data-toggle="modal" data-target="#bookModal">
          <span class="glyphicon glyphicon-calendar"></span> Submit New Request
        </button>
      </h1>
    </div>
        
    <!-- content table -->
      <table id="myTable" class="table table-striped table-responsive table-hover"> 
        <thead> 
          <tr> 
            <th>Request ID</th> 
            <th>Request Caption</th> 
            <th>Submited Date</th> 
            <th>Status</th> 
          </tr> 
        </thead> 
        <tbody> 
          <tr> 
            <td>A101</td> 
            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td> 
            <td>dd/mm/yy hh:mm</td> 
            <td>open</td> 
          </tr> 
          <tr> 
            <td>A102</td> 
            <td>Nulla quis augue tellus. Suspendisse at felis sed tellus ornare facilisis. </td> 
            <td>dd/mm/yy hh:mm</td> 
            <td>close</td> 
          </tr> 
          <tr> 
            <td>A103</td> 
            <td>Mauris eleifend neque ligula, in ullamcorper urna placerat a.</td> 
            <td>dd/mm/yy hh:mm</td> 
            <td>open</td> 
          </tr> 
          <tr> 
            <td>A104</td> 
            <td>Nullam scelerisque ligula sed urna porttitor, nec tempus ipsum commodo.</td> 
            <td>dd/mm/yy hh:mm</td> 
            <td>close</td> 
          </tr> 
        </tbody> 
  	  </table> 
          
</div><!-- /.col-sm-10 -->
              
<!-- Modal -->
<div class="modal fade" id="bookModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel" align="center">Create New Request</h4>
      </div><!-- /.modal-header -->
      <div class="modal-body">
      
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label for="requestID" class="col-sm-3 control-label" style="text-align:left;">Request ID</label>
            <div class="col-sm-8">
              <label class="form-control-static">A101</label>
            </div>
          </div>
          <div class="form-group">
            <label for="caption" class="col-sm-3 control-label" style="text-align:left;">Caption</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="caption" placeholder="Input your caption here...">
            </div>
          </div>
          <div class="form-group">
            <label for="servicesDate" class="col-sm-3 control-label" style="text-align:left;">Date Submitted</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="servicesDate" placeholder="mm/dd/yyyy" title="format : mm/dd/yyyy">
            </div>
          </div>
          <div class="form-group">
            <label for="servicesType" class="col-sm-3 control-label" style="text-align:left;">Type</label>
            <div class="col-sm-8">
            <select name="servicesType" class="form-control">
              <option>-- Select a service type --</option>
            </select>
            </div>
          </div>
          <div class="form-group">
            <label for="serviceImg" class="col-sm-3 control-label" style="text-align:left;">Image</label>
            <div class="col-sm-8">
              <input type="file" id="inputImg" name="image" class="btn btn-default" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-4 col-sm-offset-4">
              <div id="imagePreview" class="img-thumbnail"></div>
            <p class="help-block">type : .jpg .png</p>
            </div>
          </div>
             
          <div class="form-group text-right">
            <div class="col-sm-12">
              <button type="submit" class="btn btn-success">Submit</button>
              <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
            </div>
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

$("#servicesDate").datepicker({
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

//$("#myTable").tablesorter();

$('#myTable').dataTable();
	
</script>


