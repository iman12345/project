<div id="page-content-wrapper">
  <div class="container-fluid" style="font-size:90%;">
  
  <div class="row" style="margin-top:20px;">
    <div class="col-sm-10" id="body">
    
	  <div class="row">
        <div class="col-sm-1">
          <i class="glyphicon glyphicon-credit-card"></i>
        </div>
        
        <div class="col-sm-11">
          <div class="pull-right text-right">
            <span class="well well-sm"><i class='glyphicon glyphicon-ok text-success'></i> : Payment Success</span>
            <span class="well well-sm"><i class='glyphicon glyphicon-exclamation-sign text-warning'></i> : Pending Payment</span>
            <span class="well well-sm"><i class='glyphicon glyphicon-remove text-danger'></i> : Payment Failed</span>
          </div>
        </div>
      </div>
      
      <hr />
      
      <div class="row">
        <div class="col-sm-6 col-sm-offset-6 text-right">
          <div class="form-group form-inline">
            <label for="apartment">Select Apartment : </label>
            <select class="form-control" id="apartment">
              <option>Apartment 1</option>
              <option>Apartment 2</option>
              <option>Apartment 3</option>
              <option>Apartment 4</option>
              <option>Apartment 5</option>
            </select>
          </div>
        </div>
      </div>
    
      <div class="table-container table-responsive">  
      <table id="paymentsTable" class="table table-bordered table-striped table-hover table-condensed">
        <thead>
          <tr>
            <th>Unit</th>
            <th>Jan</th>
            <th>Feb</th>
            <th>Mar</th>
            <th>Apr</th>
            <th>May</th>
            <th>Jun</th>
            <th>Jul</th>
            <th>Aug</th>
            <th>Sep</th>
            <th>Oct</th>
            <th>Nov</th>
            <th>Dec</th>
          </tr>
        </thead>
        <tbody class="text-center">
        </tbody>
      </table>
    </div>
      
    </div><!-- /.col-sm-10 #body -->
<script>

var data = [
    [
        "1A",
        "<i class='glyphicon glyphicon-remove text-danger'></i>",
        "<i class='glyphicon glyphicon-remove text-danger'></i>",
        "<i class='glyphicon glyphicon-remove text-danger'></i>",
        "<i class='glyphicon glyphicon-remove text-danger'></i>",
        "<i class='glyphicon glyphicon-exclamation-sign text-warning'></i>",
        "<i class='glyphicon glyphicon-exclamation-sign text-warning'></i>",
        "<i class='glyphicon glyphicon-exclamation-sign text-warning'></i>",
        "<i class='glyphicon glyphicon-exclamation-sign text-warning'></i>",
        "<i class='glyphicon glyphicon-ok text-success'></i>",
        "<i class='glyphicon glyphicon-ok text-success'></i>",
        "<i class='glyphicon glyphicon-ok text-success'></i>",
        "<i class='glyphicon glyphicon-ok text-success'></i>",
    ],
    [
        "1B",
        "<i class='glyphicon glyphicon-ok text-success'></i>",
        "<i class='glyphicon glyphicon-ok text-success'></i>",
        "<i class='glyphicon glyphicon-ok text-success'></i>",
        "<i class='glyphicon glyphicon-ok text-success'></i>",
        "<i class='glyphicon glyphicon-remove text-danger'></i>",
        "<i class='glyphicon glyphicon-remove text-danger'></i>",
        "<i class='glyphicon glyphicon-remove text-danger'></i>",
        "<i class='glyphicon glyphicon-remove text-danger'></i>",
        "<i class='glyphicon glyphicon-exclamation-sign text-warning'></i>",
        "<i class='glyphicon glyphicon-exclamation-sign text-warning'></i>",
        "<i class='glyphicon glyphicon-exclamation-sign text-warning'></i>",
        "<i class='glyphicon glyphicon-exclamation-sign text-warning'></i>",
    ],
    [
        "1C",
        "<i class='glyphicon glyphicon-ok text-success'></i>",
        "<i class='glyphicon glyphicon-exclamation-sign text-warning'></i>",
        "<i class='glyphicon glyphicon-remove text-danger'></i>",
        "<i class='glyphicon glyphicon-ok text-success'></i>",
		"<i class='glyphicon glyphicon-exclamation-sign text-warning'></i>",
        "<i class='glyphicon glyphicon-remove text-danger'></i>",
        "<i class='glyphicon glyphicon-ok text-success'></i>",
		"<i class='glyphicon glyphicon-exclamation-sign text-warning'></i>",
        "<i class='glyphicon glyphicon-remove text-danger'></i>",
        "<i class='glyphicon glyphicon-ok text-success'></i>",
	    "<i class='glyphicon glyphicon-exclamation-sign text-warning'></i>",
        "<i class='glyphicon glyphicon-remove text-danger'></i>",
    ],
    [
        "1D",
        "<i class='glyphicon glyphicon-ok text-success'></i>",
        "<i class='glyphicon glyphicon-ok text-success'></i>",
        "<i class='glyphicon glyphicon-exclamation-sign text-warning'></i>",
        "<i class='glyphicon glyphicon-exclamation-sign text-warning'></i>",
        "<i class='glyphicon glyphicon-remove text-danger'></i>",
        "<i class='glyphicon glyphicon-remove text-danger'></i>",
        "<i class='glyphicon glyphicon-ok text-success'></i>",
        "<i class='glyphicon glyphicon-ok text-success'></i>",
        "<i class='glyphicon glyphicon-exclamation-sign text-warning'></i>",
        "<i class='glyphicon glyphicon-exclamation-sign text-warning'></i>",
        "<i class='glyphicon glyphicon-remove text-danger'></i>",
        "<i class='glyphicon glyphicon-remove text-danger'></i>",
    ],
    [
        "1E",
        "<i class='glyphicon glyphicon-ok text-success'></i>",
        "<i class='glyphicon glyphicon-ok text-success'></i>",
        "<i class='glyphicon glyphicon-ok text-success'></i>",
        "<i class='glyphicon glyphicon-ok text-success'></i>",
        "<i class='glyphicon glyphicon-exclamation-sign text-warning'></i>",
        "<i class='glyphicon glyphicon-exclamation-sign text-warning'></i>",
        "<i class='glyphicon glyphicon-exclamation-sign text-warning'></i>",
        "<i class='glyphicon glyphicon-exclamation-sign text-warning'></i>",
        "<i class='glyphicon glyphicon-remove text-danger'></i>",
        "<i class='glyphicon glyphicon-remove text-danger'></i>",
        "<i class='glyphicon glyphicon-remove text-danger'></i>",
        "<i class='glyphicon glyphicon-remove text-danger'></i>",
    ]
]

$('#paymentsTable').DataTable({
	aaData: data,
	"aoColumnDefs": [
		{ "iDataSort": 1, "aTargets": [ 0 ] }
    ]
});

</script>
      