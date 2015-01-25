<div id="page-content-wrapper">
  <div class="container-fluid" style="font-size:90%;">
  
  <div class="row" style="margin-top:20px;">
    <div class="col-sm-10">
    
  		<!-- Analytics Header -->
	  <div class="row clearfix">
        <div class="col-sm-4">
          <div class="btn-group btn-group-justified" role="group" aria-label="...">
            <a role="button" class="btn btn-primary" href="#">Main</a>
            <a role="button" class="btn btn-default" href="#">Service Request</a>
          </div>
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
    <div class="row" id="charts-row">
    
      <div class="col-sm-4">
        <div class="panel panel-default">
          <div class="panel-heading"><b>Top Categories By Sales</b></div>
          <div class="panel-body">
            <div id="morris-donut-chart" style="height:200px;"></div>
          </div><!-- /.panel-body -->
        </div><!-- /.panel panel-default -->
      </div><!-- /.col-sm-4 -->
      
      <div class="col-sm-4">
        <div class="panel panel-default">
          <div class="panel-heading"><b>Top Categories By Sales</b></div>
          <div class="panel-body">
            <div id="morris-donut-chart2" style="height:200px;"></div>
          </div><!-- /.panel-body -->
        </div><!-- /.panel panel-default -->
      </div><!-- /.col-sm-4 -->
      
      <div class="col-sm-4">
        <div class="panel panel-default">
          <div class="panel-heading"><b>Top Categories By Sales</b></div>
          <div class="panel-body">
            <div id="morris-donut-chart3" style="height:200px;"></div>
          </div><!-- /.panel-body -->
        </div><!-- /.panel panel-default -->
      </div><!-- /.col-sm-4 -->
    
    </div><!-- /.row #charts-row-->
    
    <div class="row">
      <div class="col-sm-12">
      
        <div class="panel panel-default">
          <div class="panel-heading clearfix">
            <b class="pull-left panel-title">New Sign Up</b>
            <div class="col-sm-2 pull-right" style="padding:0px;">
              <div class="btn-group btn-group-justified" role="group" aria-label="...">
                <a role="button" class="btn btn-primary" href="#">Weekly</a>
                <a role="button" class="btn btn-default" href="#">Monthly</a>
              </div>
            </div>
          </div><!-- /.panel-heading -->
          <div class="panel-body">
            <div id="morris-area-chart" style="height:200px;"></div>
          </div><!-- /.panel-body -->
        </div><!-- /.panel panel-default -->
      
      </div><!-- /.col-sm-12 -->
    </div><!-- /.row -->
    
    
<ul class="nav nav-tabs" role="tablist" id="myTab">
  <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
  <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
  <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
  <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
</ul>

<div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="home">...</div>
  <div role="tabpanel" class="tab-pane" id="profile">...</div>
  <div role="tabpanel" class="tab-pane" id="messages">...</div>
  <div role="tabpanel" class="tab-pane" id="settings">...</div>
</div>

<script>
  $(function () {
    $('#myTab a:last').tab('show')
  })
</script>    
          
    </div><!-- /.col-sm-10 -->
    
<script>

	$('.datepicker2').datepicker({
		format: 'dd M yyyy'	
	});
	
    Morris.Donut({
        element: 'morris-donut-chart',
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
		colors: ['#ff0000','#00ff00','#0000ff']
    });	
	
	Morris.Donut({
        element: 'morris-donut-chart2',
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
		colors: ['#ff0000','#00ff00','#0000ff']
    });	
	
	Morris.Donut({
        element: 'morris-donut-chart3',
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
		colors: ['#ff0000','#00ff00','#0000ff']
    });	
	
	Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '2010 Q1',
            iphone: 2666,
            ipad: null,
            itouch: 2647
        }, {
            period: '2010 Q2',
            iphone: 2778,
            ipad: 2294,
            itouch: 2441
        }, {
            period: '2010 Q3',
            iphone: 4912,
            ipad: 1969,
            itouch: 2501
        }, {
            period: '2010 Q4',
            iphone: 3767,
            ipad: 3597,
            itouch: 5689
        }, {
            period: '2011 Q1',
            iphone: 6810,
            ipad: 1914,
            itouch: 2293
        }, {
            period: '2011 Q2',
            iphone: 5670,
            ipad: 4293,
            itouch: 1881
        }, {
            period: '2011 Q3',
            iphone: 4820,
            ipad: 3795,
            itouch: 1588
        }, {
            period: '2011 Q4',
            iphone: 15073,
            ipad: 5967,
            itouch: 5175
        }, {
            period: '2012 Q1',
            iphone: 10687,
            ipad: 4460,
            itouch: 2028
        }, {
            period: '2012 Q2',
            iphone: 8432,
            ipad: 5713,
            itouch: 1791
        }],
        xkey: 'period',
        ykeys: ['iphone'],
        labels: ['iPhone'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true,
		lineColors: ['#0000ff']
    });

</script>
    