<div id="page-content-wrapper">
  <div class="container-fluid" style="font-size:90%;">
  
  <div class="row">
    <div class="col-sm-10">
  
    <div class="page-header">
      <h1>
        <small>Analytics</small>
      </h1>
    </div>
    
    <div class="row">
      <div class="col-sm-12">charts control goes here</div>
    </div>
    
    <div class="row" id="charts-row">
    
      <div class="col-sm-4">
        <div class="panel panel-default">
          <div class="panel-heading"><b>Top Categories By Sales</b></div>
          <div class="panel-body">
            <div class="row" id="chart-canvas">
              <div class="canvas-donut" style="float:left;margin-left:10px">
                <canvas class="chart" id="topcats_donut" ></canvas>Chart here
              </div><!-- /.canvas-donut -->
              <div class="fitin" style="display:inline-block;margin-left:20px;max-width:150px;"> 
                <div>
				  chart legends here
                </div>
              </div><!-- /.fitin --> 
            </div><!-- /.row #chart-canvas -->  
          </div><!-- /.panel-body -->
        </div><!-- /.panel panel-default -->
      </div><!-- /.col-sm-4 -->
      
      <div class="col-sm-4">
        <div class="panel panel-default">
          <div class="panel-heading"><b>Top Categories By Sales</b></div>
          <div class="panel-body">
            <div class="row" id="chart-canvas">
              <div class="canvas-donut" style="float:left;margin-left:10px">
                <canvas class="chart" id="topcats_donut" ></canvas>Chart here
              </div><!-- /.canvas-donut -->
              <div class="fitin" style="display:inline-block;margin-left:20px;max-width:150px;"> 
                <div>
				  chart legends here
                </div>
              </div><!-- /.fitin --> 
            </div><!-- /.row #chart-canvas -->  
          </div><!-- /.panel-body -->
        </div><!-- /.panel panel-default -->
      </div><!-- /.col-sm-4 -->
      
      <div class="col-sm-4">
        <div class="panel panel-default">
          <div class="panel-heading"><b>Top Categories By Sales</b></div>
          <div class="panel-body">
            <div class="row" id="chart-canvas">
              <div class="canvas-donut" style="float:left;margin-left:10px">
                <canvas class="chart" id="topcats_donut" ></canvas>Chart here
              </div><!-- /.canvas-donut -->
              <div class="fitin" style="display:inline-block;margin-left:20px;max-width:150px;"> 
                <div>
				  chart legends here
                </div>
              </div><!-- /.fitin --> 
            </div><!-- /.row #chart-canvas -->  
          </div><!-- /.panel-body -->
        </div><!-- /.panel panel-default -->
      </div><!-- /.col-sm-4 -->
    
    </div><!-- /.row #charts-row-->
    
    <div class="row">
      <div class="col-sm-12">
      
        <div class="panel panel-default">
          <div class="panel-heading">
        	<div class="row" style="padding-left:10px;padding-right:10px">
              <b>
                <span id="motit">Monthly Revenue</span>
                <span id="wktit" style="display:none">Weekly Revenue</span>
              </b>
        	  <div class="btn-group pull-right" role="group" aria-label="...">
                <a role="button" class="btn btn-sm btn-primary" id="mobutt" href="#monthly-line-chart">Monthly</a> 
                <a role="button" class="btn btn-sm btn-default" id="wkbutt" href="#weekly-line-chart">Weekly</a>        
              </div>
        	</div>
          </div><!-- /.panel-heading -->
          <div class="panel-body">
            <div class="canvas-wrapper">
        	  <canvas class="main-chart" id="monthly-line-chart" height="200" width="600"></canvas>
            </div>
            <div class="canvas-wrapper">
        	  <canvas class="main-chart" id="weekly-line-chart" height="200" width="600" style="display:none"></canvas>
            </div>
          </div><!-- /.panel-body -->
        </div><!-- /.panel panel-default -->
      
      </div><!-- /.col-sm-12 -->
    </div><!-- /.row -->
          
    </div><!-- /.col-sm-10 -->
