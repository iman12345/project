<div id="page-content-wrapper">
  <div class="container-fluid" style="font-size:90%;">
    
    <div class="row">
      <div class="col-sm-10">
      
        <div class="page-header">
          <h1>
            <small>Promotions and Local Services</small>
            <button style="margin-top:-5px;" type="button" class="btn btn-primary btn-md pull-right" data-toggle="modal" data-target="#bookModal">
              <span class="glyphicon glyphicon-plus"></span> Add New Promo/Local Service
            </button>
          </h1>
        </div>    
    
        <table id="myTable" class="table table-striped table-hover table-bordered"> 
          <thead> 
            <tr> 
              <th>Request ID</th> 
              <th>Request Caption</th> 
              <th>Submitted Date</th> 
              <th>Submitted By</th> 
              <th>Unit Number</th>
              <th>Status</th>
              <th>Resolved Date</th>
            </tr> 
          </thead> 
          <tbody> 
          <?php
        	foreach($services as $row){
				if($row->STATUS == 'INPROG') echo "<tr class='info'>";
				else if ($row->STATUS == 'OPEN') echo "<tr class='success'>";
				else echo "<tr>";
				echo "<td>". $row->ID ."</td>";
				echo "<td>". $row->CAPTION ."</td>";
				echo "<td>". $row->DATE_SUB ."</td>";
				echo "<td>". $row->SUBMITTED_BY ."</td>";
				echo "<td>". $row->UNIT_ID ."</td>";
				echo "<td>". $row->STATUS ."</td>";
				if($row->STATUS == 'CLOSE') echo "<td>". $row->LAST_UPDATED_DATE ."</td>";
				else echo "<td>-</td>";
				echo "</tr>";	
			}
		  ?>
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

/*var data = [
    [
        "Tiger Nixon",
        "System Architect",
        "Edinburgh",
        "5421",
        "2011/04/25",
        "$3,120",
        "2011/04/25"
    ],
    [
        "Garrett Winters",
        "Director",
        "Edinburgh",
        "8422",
        "2011/07/25",
        "$5,300",
        "2011/04/25"
    ]
]*/
//$('#myTable').dataTable();
$('#myTable').DataTable( {
    //data: data
} );	
</script>


