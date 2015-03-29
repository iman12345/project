<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/carousel-mini.css"/>

<div id="page-content-wrapper">
  <div class="container-fluid" style="font-size:90%;">
    
    <div class="row">
      <div class="col-sm-10">
      
    <div class="page-header">
      <h1>
        <small>Maintenance Services</small>
        <!--<button style="margin-top:-5px;" type="button" class="btn btn-primary btn-md pull-right" data-toggle="modal" data-target="#bookModal">
          <span class="glyphicon glyphicon-calendar"></span> Submit New Request
        </button>-->
      </h1>
    </div>
        
        <div class="row">
		  <div class="col-sm-12 text-right">
          
            <button class="btn btn-success" type="submit" data-toggle="modal" data-target="#bookModal"><span class="glyphicon glyphicon-plus"></span> Add New</button>
            <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-trash"></span> Delete Selected Item(s)</button>
          
          </div>        
        </div>
        <br />
    <!-- content table 
    REQUEST_ID
    SUBMITTED_BY
    UNIT NUMBER
    CAPTION
    DATE_SUB
    DATE_RESOLVED
    STATUS -->    
      <table id="myTable" class="table table-striped table-hover table-bordered"> 
        <thead> 
          <tr> 
            <th class="no-sort"><input type="checkbox" id="checkall" value="Check All"></th>
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
				echo "<td align='center'><input type='checkbox' class='case' tabindex='-1'></td>";
				echo "<td><a id='ID-".$row->ID."' class='edit' tabindex='0'>". $row->ID ."</a></td>";
				echo "<td><a id='CAPTION-".$row->ID."' class='edit' tabindex='0'>". $row->CAPTION ."</td>";
				echo "<td><a id='DATE_SUB-".$row->ID."' class='edit' tabindex='0'>". $row->DATE_SUB ."</td>";
				echo "<td><a id='SUBMITTED_BY-".$row->ID."' class='edit' tabindex='0'>". $row->SUBMITTED_BY ."</td>";
				echo "<td><a id='UNIT_ID-".$row->ID."' class='edit' tabindex='0'>". $row->UNIT_ID ."</td>";
				echo "<td><a id='STATUS-".$row->ID."' class='edit' tabindex='0'>". $row->STATUS ."</td>";
				if($row->STATUS == 'CLOSE') echo "<td>". $row->LAST_UPDATED_DATE ."</td>";
				else echo "<td>-</td>";
				echo "</tr>";	
			}
		?>
        </tbody> 
  	  </table> 
      <?php echo current_url(); ?>/data1.json
      <table data-toggle="table" data-url="<?php echo current_url(); ?>/data1.json" data-cache="false" data-height="299" data-sort-name="name" data-sort-order="desc">
        <thead>
            <tr>
                <th data-field="id">Item ID</th>
                <th data-field="name">Item Name</th>
                <th data-field="price">Item Price</th>
            </tr>
        </thead>
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
              <input type="text" class="form-control" id="servicesDate" style="position: relative; z-index: 100000;" placeholder="mm/dd/yyyy" title="format : mm/dd/yyyy">
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

$("#servicesDate").datepicker();

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
//$('#myTable').DataTable( {
    //data: data
//} );
  	var table = $('#myTable').DataTable({
    	columnDefs: [
      		{ targets: 'no-sort', orderable: false }
    	],
    	"order": [[ 1, "asc" ]],
      pageLength: 15,    
      "aLengthMenu": [[15, 35, 100, -1], [15, 35, 100, "All"]]
  	}); 
  	
  	//check all
  	$("#checkall").click(function(){
    	$('.case').prop('checked',this.checked);
  	});
	
</script>

<?php 
/**/
	$edit_script = "<script>"; 
  	$edit_script .= "  $.fn.editable.defaults.mode = 'inline';";
  	$edit_script .= "  $.fn.editable.defaults.showbuttons = false;";
  	$edit_script .= "$(document).ready(function(){";
  	foreach ($services as $row){
  		$edit_script .= "  $('#CAPTION-".$row->ID."').editable();";
	}
  	$edit_script .= "}); ";
	$edit_script .= '</script>';
  	echo $edit_script;

?>
<script>
/*
$(document).ready(function(){  
	$('#CAPTION-1').editable();  
	$('#CAPTION-2').editable();  
	$('#CAPTION-3').editable();  
	$('#CAPTION-4').editable(); 
	$('#CAPTION-5').editable();
}); 
*/
</script>



