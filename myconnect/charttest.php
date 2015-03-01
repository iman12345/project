<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="assets/css/myconnect.css"/>

<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>

<!-- Chart -->
<link rel="stylesheet" type="text/css" href="assets/morrisjs/morris.css" />
<!-- Morris Charts JavaScript -->
<script src="assets/raphael/raphael.min.js"></script>
<script src="assets/morrisjs/morris.min.js"></script>

</head>

<body>

      <div id="monitor" class="panel panel-default tab-box">
        <div class="panel-heading">
          <h3 class="panel-title">
            <i class="fa fa-signal"></i> Monitoring report
          </h3>
    
          <ul class="nav nav-tabs">
            <li class="active">
              <a href="#fuel-tab" data-toggle="tab" data-identifier="line, donut">Fuel data</a>
            </li>
            <li> 
              <a href="#co2-tab" data-toggle="tab" data-identifier="bar1">Co2 data</a>
            </li>
          </ul>
        </div><!-- /.panel-heading -->
        <div class="panel-body">
          <div class="tab-content">
            <div id="fuel-tab" class="tab-pane active">
              <div class="row">
                <div class="col-sm-12 col-md-7 chart">
                  <div class="caption">
                    Fuel consumption last 12 months <span class="label label-default">Liter/100km</span>
                  </div>
                  <div id="fuel-consumption"></div>
                  <div class="legend">
                    <span id="city" class="label">City</span>
                    <span id="highway" class="label">Highway</span>
                    <span id="idle" class="label">Idle</span>
                  </div>
                </div><!-- /.col-sm-12 col-md-7 chart -->
                <div class="col-sm-12 col-md-5 chart">
                  <div class="caption">Fuel projection this month</div>
                  <div id="fuel-projection"></div>
                  <div class="legend">
                    <span id="projection" class="label">Projection</span>
     				<span id="today" class="label">Until today</span>
                  </div>
                </div><!-- /.col-sm-12 col-md-5 chart -->
              </div><!-- /.row -->
            </div><!-- /.tab-pane #fuel-tab -->
            <div id="co2-tab" class="tab-pane">
              <div class="row">
                <div class="col-xs-12 chart">
                  <div class="caption">
                    Monthly Co2 Emissions <span class="label label-default">g/km</span>
                  </div>
                  <div id="co2-emissions"></div>
                </div>
              </div>
            </div><!-- /.tab-pane #co2-tab -->
          </div><!-- /.tab-content -->
        </div><!-- /.panel-body -->
      </div><!-- /.panel panel-default tab-box -->  

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
	// on doc ready
		// Fuel consumption //
		// Data set for fuel consumption
		var fuel_data = [{
			"period": "2013-01",
			"city": 66,
			"highway": 34,
			"idle": 9
		}, {
			"period": "2013-02",
			"city": 62,
			"highway": 33,
			"idle": 8
		}, {
			"period": "2013-03",
			"city": 61,
			"highway": 32,
			"idle": 7
		}, {
			"period": "2013-04",
			"city": 66,
			"highway": 32,
			"idle": 6
		}, {
			"period": "2013-05",
			"city": 67,
			"highway": 31,
			"idle": 5
		}, {
			"period": "2013-06",
			"city": 68,
			"highway": 43,
			"idle": 7
		}, {
			"period": "2013-07",
			"city": 62,
			"highway": 32,
			"idle": 5
		}, {
			"period": "2013-08",
			"city": 61,
			"highway": 32,
			"idle": 5
		}, {
			"period": "2013-09",
			"city": 58,
			"highway": 32,
			"idle": 7
		}, {
			"period": "2013-10",
			"city": 60,
			"highway": 32,
			"idle": 7
		}, {
			"period": "2013-11",
			"city": 60,
			"highway": 32,
			"idle": 6
		}, {
			"period": "2013-12",
			"city": 62,
			"highway": 32,
			"idle": 8
		}];
		// Line chart parameters for fuel consumption
		var fuel_consumption = {
			element: 'fuel-consumption',
			hideHover: 'auto',
			data: fuel_data,
			xkey: 'period',
			xLabels: 'month',
			ykeys: ['city', 'highway', 'idle'],
			postUnits: ' l/100km',
			labels: ['City', 'Highway', 'Idle'],
			resize: true,
			lineColors: ['#A52A2A', '#72A0C1', '#7BB661'],
			//yLabelFormat: function(y) { return y.toString() + ' l/100km'; }
		}
	
		// Make a line chart from the parameters
		line = Morris.Line(fuel_consumption)
		// / Fuel consumption //
	
		// Fuel projection //
		// Data set for fuel projection
		var projection_data = [{
			label: 'Until today',
			value: 180
		}, {
			label: 'Projected',
			value: 400
		}, ]
		// Donut chart parameters for fuel projection
		var fuel_projection = {
			element: 'fuel-projection',
			hideHover: 'auto',
			resize: true,
			data: projection_data,
			colors: ['#7BB661', '#72A0C1'],
			formatter: function (y) {
				return y + " liters"
			}
		}
	
		// Make a donut chart from the parameters
		donut = Morris.Donut(fuel_projection)
		// / Fuel projection //
	
		// Fuel emissions //
		// Data set for fuel emissions
		var co2_data = [{
			month: 'Jan',
			emissions: 35
		}, {
			month: 'Feb',
			emissions: 37
		}, {
			month: 'Mar',
			emissions: 40
		}, {
			month: 'Apr',
			emissions: 38
		}, {
			month: 'Maj',
			emissions: 39
		}, {
			month: 'Jun',
			emissions: 42
		}, {
			month: 'Jul',
			emissions: 37
		}, {
			month: 'Aug',
			emissions: 65
		}, {
			month: 'Sep',
			emissions: 38
		}, {
			month: 'Okt',
			emissions: 45
		}, {
			month: 'Nov',
			emissions: 41
		}, {
			month: 'Dec',
			emissions: 41
		}]
		//Bar chart parameters for CO2 emissions
		var co2_emissions = {
			element: 'co2-emissions',
			resize: true,
			data: co2_data,
			xkey: 'month',
			ykeys: ['emissions'],
			labels: ['Co2 emissions'],
			barRatio: 0.4,
			xLabelAngle: 35,
			hideHover: 'auto',
			postUnits: ' g/km',
			formatter: function (y) {
				return y + " g/km"
			}
		}
	
		// Make a bar chart from the parameters
		bar1 = Morris.Bar(co2_emissions)
		// / Fuel emisisons //
	// / Morris graphs -------------------------------------------------------- //
	//-------------------------------------------------------------------------

</script>
</body>
</html>
