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
    	
        <div style="overflow-x: scroll; font-size: .8em;" id="ajaxTable">
        <table id="promoLocalTable" class="table table-striped table-hover table-bordered table-condensed"> 
          <thead> 
            <tr> 
              <th class="no-sort"><input type="checkbox" id="checkall" value="Check All"></th>
              <th>ID</th> 
              <th>Apartment ID</th> 
              <th>Type</th> 
              <th>Name</th> 
              <th>Description</th>
              <th>Date</th>
              <th>Posting ID</th>
              <th>Image</th>
              <th>Category</th>
              <th>Expire Date</th>
              <th>Created By</th>
              <th>Created Date</th>
              <th>Updated By</th>
              <th>Updated Date</th>
            </tr> 
          </thead> 
          <tbody> 
			<?php
                foreach($promolocal as $row){
					echo "<tr>";
                    echo "<td align='center'><input type='checkbox' class='case' tabindex='-1'></td>";
                    echo "<td><a id='ID-".$row->ID."' class='edit' tabindex='0'>". $row->ID ."</a></td>";
                    echo "<td><a id='APARTMENT_ID-".$row->ID."' class='edit' tabindex='0'>". $row->APARTMENT_ID ."</td>";
                    echo "<td><a id='TYPE-".$row->ID."' class='edit' tabindex='0'>". $row->TYPE ."</td>";
                    echo "<td><a id='NAME-".$row->ID."' class='edit' tabindex='0'>". $row->NAME ."</td>";
                    echo "<td><a id='DESCRIPTION-".$row->ID."' class='edit' tabindex='0'>". $row->DESCRIPTION ."</td>";
                    echo "<td><a id='DATE-".$row->ID."' class='edit' tabindex='0'>". $row->DATE ."</td>";
					echo "<td><a id='POSTING_ID-".$row->ID."' class='edit' tabindex='0'>". $row->POSTING_ID ."</td>";
					echo "<td><a id='IMAGE-".$row->ID."' class='edit' tabindex='0'>". $row->IMAGE ."</td>";
					echo "<td><a id='CATEGORY-".$row->ID."' class='edit' tabindex='0'>". $row->CATEGORY ."</td>";
					echo "<td><a id='EXPIRE_DATE-".$row->ID."' class='edit' tabindex='0'>". $row->EXPIRE_DATE ."</td>";
					echo "<td><a id='CREATED_BY-".$row->ID."' class='edit' tabindex='0'>". $row->CREATED_BY ."</td>";
					echo "<td><a id='CREATED_DATE-".$row->ID."' class='edit' tabindex='0'>". $row->CREATED_DATE ."</td>";
					echo "<td><a id='LAST_UPDATED_BY-".$row->ID."' class='edit' tabindex='0'>". $row->LAST_UPDATED_BY ."</td>";
					echo "<td><a id='LAST_UPDATED_DATE-".$row->ID."' class='edit' tabindex='0'>". $row->LAST_UPDATED_DATE ."</td>";
                    echo "</tr>";	
                }
            ?>
          </tbody> 
  	    </table>
        </div> 
          
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
	autoclose: true,
    todayHighlight: true
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

  	var table = $('#promoLocalTable').DataTable({
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
  	$edit_script .= "$(document).ready(function(){";
  	$edit_script .= "  $.fn.editable.defaults.mode = 'inline';";
  	$edit_script .= "  $.fn.editable.defaults.showbuttons = false;";
	$edit_script .= "  var baseurl = '".base_url()."';";
	$edit_script .= "  var updateurl = baseurl+'index.php/promos-local/update';";
	//$edit_script .= "alert(updateurl);";
  	foreach ($promolocal as $row){
  		//$edit_script .= "  $('#APARTMENT_ID-".$row->ID."').editable();";
		$edit_script .= "$('#APARTMENT_ID-".$row->ID."').editable({
							url: updateurl,
							pk: ".$row->ID.",
							validate: function(value) {
								if($.trim(value) == '') {
									return 'This field is required';
								}
							},
							success: function(response, newValue) {
								if(!response.success) return response.msg;
							}
						});";
						
		$edit_script .= "$('#TYPE-".$row->ID."').editable({
							url: updateurl,
							pk: ".$row->ID.",
							validate: function(value) {
								if($.trim(value) == '') {
									return 'This field is required';
								}
							},
							success: function(response, newValue) {
								if(!response.success) return response.msg;
							}
						});";
							
  		$edit_script .= "$('#NAME-".$row->ID."').editable({
							url: updateurl,
							pk: ".$row->ID.",
							validate: function(value) {
								if($.trim(value) == '') {
									return 'This field is required';
								}
							},
							success: function(response, newValue) {
								if(!response.success) return response.msg;
							}
						});";
		
		$edit_script .= "$('#DESCRIPTION-".$row->ID."').editable({
							url: updateurl,
							pk: ".$row->ID.",
							success: function(response, newValue) {
								if(!response.success) return response.msg;
							}
						});";
		
		$edit_script .= "$('#DATE-".$row->ID."').editable({
							url: updateurl,
							pk: ".$row->ID.",
							validate: function(value) {
								if($.trim(value) == '') {
									return 'This field is required';
								}
							},
							success: function(response, newValue) {
								if(!response.success) return response.msg;
							}
						});";
		
		$edit_script .= "$('#POSTING_ID-".$row->ID."').editable({
							url: updateurl,
							pk: ".$row->ID.",
							validate: function(value) {
								if($.trim(value) == '') {
									return 'This field is required';
								}
							},
							success: function(response, newValue) {
								if(!response.success) return response.msg;
							}
						});";
		
		$edit_script .= "$('#IMAGE-".$row->ID."').editable({
							url: updateurl,
							pk: ".$row->ID.",
							success: function(response, newValue) {
								if(!response.success) return response.msg;
							}
						});";
		
		$edit_script .= "$('#CATEGORY-".$row->ID."').editable({
							url: updateurl,
							pk: ".$row->ID.",
							validate: function(value) {
								if($.trim(value) == '') {
									return 'This field is required';
								}
							},
							success: function(response, newValue) {
								if(!response.success) return response.msg;
							}
						});";
		
		$edit_script .= "$('#EXPIRE_DATE-".$row->ID."').editable({
							url: updateurl,
							pk: ".$row->ID.",
							validate: function(value) {
								if($.trim(value) == '') {
									return 'This field is required';
								}
							},
							success: function(response, newValue) {
								if(!response.success) return response.msg;
							}
						});";
		
		$edit_script .= "$('#CREATED_BY-".$row->ID."').editable({
							url: updateurl,
							pk: ".$row->ID.",
							validate: function(value) {
								if($.trim(value) == '') {
									return 'This field is required';
								}
							},
							success: function(response, newValue) {
								if(!response.success) return response.msg;
							}
						});";
		
		$edit_script .= "$('#CREATED_DATE-".$row->ID."').editable({
							url: updateurl,
							pk: ".$row->ID.",
							validate: function(value) {
								if($.trim(value) == '') {
									return 'This field is required';
								}
							},
							success: function(response, newValue) {
								if(!response.success) return response.msg;
							}
						});";
		
		$edit_script .= "$('#LAST_UPDATED_BY-".$row->ID."').editable({
							url: updateurl,
							pk: ".$row->ID.",
							validate: function(value) {
								if($.trim(value) == '') {
									return 'This field is required';
								}
							},
							success: function(response, newValue) {
								if(!response.success) return response.msg;
							}
						});";
		
		$edit_script .= "$('#LAST_UPDATED_DATE-".$row->ID."').editable({
							url: updateurl,
							pk: ".$row->ID.",
							validate: function(value) {
								if($.trim(value) == '') {
									return 'This field is required';
								}
							},
							success: function(response, newValue) {
								if(!response.success) return response.msg;
							}
						});";
						
	}
  	$edit_script .= "}); ";
	$edit_script .= '</script>';
  	echo $edit_script;

?>

<?php 
/*
	$js = "<script>"; 
  	$js .= "$(document).ready(function(){";
	$js .= "	var baseurl = '".base_url()."';";
	$js .= "	var refurl = baseurl+'index.php/promos-local/update';";
	$js .= "	alert(refurl);";
	$js .= "	function refresh_blog(){
			  		$.ajax({
			  			url: 'refurl',
						type: 'POST',
						cache: false,
			  			success: function(html){
			  				$('#ajaxTable').html(html)
			  			}
			  		});
			  	}";

	$js .= "}); ";
	$js .= '</script>';
  	echo $js;
*/
?>

