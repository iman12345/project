
<div id="page-content-wrapper">
  <div class="container-fluid" style="font-size:90%; zoom: 90%;">
  
  <div class="row" style="margin-top:20px;">
    <div class="col-sm-10" id="body">
    
  	  <!-- Analytics Header -->
	  <div class="row clearfix">
        <div class="col-sm-4">
            <ul class="nav nav-pills nav-justified" role="tablist" id="myTab">
              <li role="presentation" class="active">
                <a href="#main" aria-controls="main" role="tab" data-toggle="tab" data-identifier="paymentChart, monthlyChart">Main</a>
              </li>
              <li role="presentation" class="">
                <a href="#servicereq" aria-controls="servicereq" role="tab" data-toggle="tab" data-identifier="donut4, donut5">Service Request</a>
              </li>
            </ul>
        </div>
        <div class="col-sm-3 pull-right text-right">    
          <a id="print" role="button" class="btn btn-primary" href="#"><span class="glyphicon glyphicon-print"></span> Print</a>        
          <a id="export" role="button" class="btn btn-primary" href="#"><span class="glyphicon glyphicon-export"></span> Export</a>        
        </div> 
      </div><!-- /.row -->

      <hr style="margin-bottom:10px;margin-top:10px" /> 
                     
      <div class="row" style="padding-left: 15px"> 
        <form class="form-inline" role="form" action="">    
          <div class="form-group" style="margin-bottom:0px">
            <div class="input-group">
              <div class="input-group-addon">From</div>
              <input id="from" name="from" type="text" value="" class="form-control" title="From">
            </div>                                                                                                                                                              
          </div>
          <div class="form-group" style="margin-bottom:0px">
            <div class="input-group">       
              <div class="input-group-addon">To</div>
              <input id="to" name="to" type="text" value="" class="form-control" title="To">
            </div>
          </div>
          <div class="form-group" style="margin-bottom:0px">
            <div class="input-group">       
              <div class="input-group-addon">Apartment</div>
              <input id="apartment" name="apartment" type="text" value="" class="form-control" title="Apartment">
            </div>
          </div>
          <div class="form-group" style="margin-bottom:0px">
            <div class="input-group">
              <button type="submit" class="btn btn-success">Filter</button>   
            </div>
          </div>
        </form> 
	  </div><!-- /.row -->   
		    
      <hr style="margin-bottom:10px;margin-top:10px" />
             
      <!-- Analytics Body -->    
      <div class="tab-content">
      
        <div role="tabpanel" class="tab-pane active" id="main">
      	  <div class="row" id="donutCharts">
        
              <div class="col-sm-4">
                <div class="panel panel-default">
                  <div class="panel-heading"><b>Top 5 Features</b></div>
                    <table class="table table-hover table-bordered">
                      <tbody>
                        <tr>
                          <td width="1%">1.</td>
                          <td>Events</td>
                        </tr>
                        <tr>
                          <td>2.</td>
                          <td>Service Request</td>
                        </tr>
                        <tr>
                          <td>3.</td>
                          <td>Facilities Book</td>
                        </tr>
                        <tr>
                          <td>4.</td>
                          <td>Payments</td>
                        </tr>
                        <tr>
                          <td>5.</td>
                          <td>Others</td>
                        </tr>
                      </tbody>
                    </table>
                </div><!-- /.panel panel-default -->
              </div><!-- /.col-sm-4 -->
          
              <div class="col-sm-4">
                <div class="panel panel-default">
                  <div class="panel-heading"><b>Most Booked Facility</b></div>
                    <table class="table table-hover table-bordered">
                      <tbody>
                        <tr>
                          <td width="1%">1.</td>
                          <td>Tenis Court</td>
                        </tr>
                        <tr>
                          <td>2.</td>
                          <td>Badminton Court</td>
                        </tr>
                        <tr>
                          <td>3.</td>
                          <td>Community Room A</td>
                        </tr>
                        <tr>
                          <td>4.</td>
                          <td>Community Room B</td>
                        </tr>
                        <tr>
                          <td>5.</td>
                          <td>Others</td>
                        </tr>
                      </tbody>
                    </table>
                </div><!-- /.panel panel-default -->
              </div><!-- /.col-sm-4 -->
          
              <div class="col-sm-4">
                <div class="panel panel-default">
                  <div class="panel-heading"><b>Payments</b></div>
                  <div class="panel-body">
                    <div id="morris-donut-chart3" style="height:135px;"></div>
                  </div><!-- /.panel-body -->
                </div><!-- /.panel panel-default -->
              </div><!-- /.col-sm-4 -->
        
          </div><!-- /.row #donutCharts -->
        
          <div class="row" id="areaChart1">
          
              <div class="col-sm-12">
              
                  <div id="monitor" class="panel panel-default tab-box">
                    <div class="panel-heading">
                      <h3 class="panel-title">
                        <i class="fa fa-signal"></i> New Sign ups
                      </h3>
                
                      <ul class="nav nav-tabs">
                        <li class="active">
                          <a href="#fuel-tab" data-toggle="tab" data-identifier="monthlyChart">Monthly</a>
                        </li>
                        <li> 
                          <a href="#co2-tab" data-toggle="tab" data-identifier="weeklyChart">Weekly</a>
                        </li>
                      </ul>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">
                      <div class="tab-content">
                        <div id="fuel-tab" class="tab-pane active">
                          <div class="row">
                            <div class="col-md-12 chart">
                              <div id="morris-area-chart"></div>
                            </div><!-- /.col-sm-12 col-md-7 chart -->
                          </div><!-- /.row -->
                        </div><!-- /.tab-pane #fuel-tab -->
                        <div id="co2-tab" class="tab-pane">
                          <div class="row">
                            <div class="col-md-12 chart">
                              <div id="morris-area-chart2"></div>
                            </div>
                          </div>
                        </div><!-- /.tab-pane #co2-tab -->
                      </div><!-- /.tab-content -->
                    </div><!-- /.panel-body -->
                  </div><!-- /.panel panel-default tab-box -->  
              
              </div><!-- /.col-sm-12 -->
          
          </div><!-- /.row #areaChart1 -->
        </div><!-- /.tab-pane #main -->
       
        <div role="tabpanel" class="tab-pane" id="servicereq">
      
            <div class="row" id="donutCharts">
            
              <div class="col-sm-4">
                <div class="panel panel-default">
                  <div class="panel-heading"><b>Service Request</b></div>
                  <div class="panel-body">
                    <div id="morris-donut-chart4" style="height:200px;"></div>
                  </div><!-- /.panel-body -->
                </div><!-- /.panel panel-default -->
              </div><!-- /.col-sm-4 -->
              
              <div class="col-sm-4">
                <div class="panel panel-default">
                  <div class="panel-heading"><b>Average Resolutions</b></div>
                  <div class="panel-body">
                    <div id="morris-donut-chart5" style="height:200px;"></div>
                  </div><!-- /.panel-body -->
                </div><!-- /.panel panel-default -->
              </div><!-- /.col-sm-4 -->
        
            </div><!-- /.row #donutCharts -->
             
        </div><!-- /.tab-pane #servicereq -->
      
      </div><!-- /.tab-content -->
    
    <!------------------------------------------------------------------------------------------------>
    
    <!------------------------------------------------------------------------------------------------>
              
    </div><!-- /.col-sm-10 #body -->
    
<script>

	$('.datepicker2').datepicker({
		format: 'dd M yyyy'	
	});
	
	$('#myTab a').on('shown.bs.tab', function (e) {
		var types = $(this).attr("data-identifier");
		var typesArray = types.split(",");
		$.each(typesArray, function (key, value) {
			eval(value + ".redraw()");
		})
	});
		
	var payment = {
        element: 'morris-donut-chart3',
        data: [{
            label: "Success",
            value: 12
        }, {
            label: "Pending",
            value: 30
        }, {
            label: "Failed",
            value: 20
        }],
        resize: true,
    }	
	
	paymentChart = Morris.Donut(payment)
	
	var test2 = {
        element: 'morris-donut-chart4',
        data: [{
            label: "Download Sales",
            value: 12
        }, {
            label: "In-Store Sales",
            value: 30
        }, {
            label: "Mail-Order Sales",
            value: 20
        }],
        resize: true,
    }
	
	donut4 = Morris.Donut(test2)

    var test3 = {
        element: 'morris-donut-chart5',
        data: [{
            label: "Download Sales",
            value: 12
        }, {
            label: "In-Store Sales",
            value: 30
        }, {
            label: "Mail-Order Sales",
            value: 20
        }],
        resize: true,
    }
	donut5 = Morris.Donut(test3)

	
</script>
<script>

	//-------------------------------------------------------------------------
	$('ul.nav a').on('shown.bs.tab', function (e) {
		var types = $(this).attr("data-identifier");
		var typesArray = types.split(",");
		$.each(typesArray, function (key, value) {
			eval(value + ".redraw()");
		})
	});
	// Morris graphs ---------------------------------------------------------- //
	var monthly = {
        element: 'morris-area-chart',
        data: [{ 
			mth: '2015-01', 
		  	a: 100
		}, { 
			mth: '2015-02', 
			a: 75
		}, {
			mth: '2015-03', 
			a: 50 
		}, { 
			mth: '2015-04', 
			a: 75 
		}, { 
			mth: '2015-05', 
			a: 50 
		}, { 
			mth: '2015-06', 
			a: 75
		}, { 
			mth: '2015-07',
			 a: 100
		}],
        xkey: 'mth',
		ykeys: ['a'],
		labels: ['Sign'],
        resize: true,
		xLabelFormat: function (x) {
			  var IndexToMonth = [ "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Okt", "Nov", "Dec" ];
			  var month = IndexToMonth[ x.getMonth() ];
			  var year = x.getFullYear();
			  return month + ' ' + year;
		  },
	  dateFormat: function (x) {
			  var IndexToMonth = [ "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Okt", "Nov", "Dec" ];
			  var month = IndexToMonth[ new Date(x).getMonth() ];
			  var year = new Date(x).getFullYear();
			  return month + ' ' + year;
		  }
    }
	
	monthlyChart = Morris.Area(monthly)
	
	var weekly = {
        element: 'morris-area-chart2',
        data: [{
            period: '2015 W0',
            a: 2666,
        }, {
            period: '2015 W1',
            a: 2778,
        }, {
            period: '2015 W2',
            a: 8432,
        }, {
            period: '2015 W3',
            a: 4235,
        }],
        xkey: 'period',
		xLabels: 'week',
        ykeys: ['a'],
        labels: ['Sign'],
        hideHover: 'auto',
        resize: true,
		xLabelFormat: function (x) {
			  var prefixes = ['Week 1', 'Week 2', 'Week 3', 'Week 4', 'Week 5'];
			  return prefixes[0 | new Date(x).getDate() / 7];
		  },
	  	dateFormat: function (x) {
			  var prefixes = ['Week 1', 'Week 2', 'Week 3', 'Week 4', 'Week 5'];
			  return prefixes[0 | new Date(x).getDate() / 7];
		  }
    }
	
	weeklyChart = Morris.Area(weekly)
	// / Morris graphs -------------------------------------------------------- //
	//-------------------------------------------------------------------------

</script>

    