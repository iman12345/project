<!-- /. -->
<?php if(!defined("KEY")) die("script cannot be accessed directly."); ?>

<link rel="stylesheet" type="text/css" href="assets/css/carousel-mini.css"/>

<div id="page-content-wrapper">
  <div class="container-fluid" style="font-size:90%;">
      
    <div class="page-header">
      <h1>
        <small>Local Services</small>
        <button style="margin-top:-5px;" type="button" class="btn btn-success btn-md pull-right" id="create-event">
          <span class="glyphicon glyphicon-calendar"></span> Order a Service
        </button>
      </h1>
    </div>
    
    <!-- CAROUSEL -->
    <div class="row">
      <div class="col-sm-12">
        <div id="serviceCarousel" class="carousel slide">
          <!-- Carousel items -->
            <div class="carousel-inner">
              <?php for($i=0;$i<4;$i++){ ?><!-- Create 4 slides -->
              <div class="item <?php if($i==0) echo "active"; ?>">
                <div class="row">
                  <?php for($j=0;$j<4;$j++){ ?><!-- make 4 items per slide -->
                  <div class="col-sm-3">
                    <a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                    <div class="container">
                      <div class="carousel-caption">
                        <h3>TITLE <?php echo $i." ".$j; ?></h3>
                      </div><!-- /.carousel-caption -->
                    </div><!-- /.container -->
                  </div><!-- /.col-sm-6 col-xs-12 -->
                  <?php } ?> 
                </div><!-- /.row -->
              </div><!-- /.item -->
              <?php } ?>   
            </div><!-- /.carousel-inner --> 
            <a class="left carousel-control" href="#serviceCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left glyphicon-4"></i></a>
            <a class="right carousel-control" href="#serviceCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right glyphicon-4"></i></a>
        </div><!-- /#serviceCarousel -->
	  </div><!-- /.col-md-2 -->
    </div><!-- /.row -->
    <!-- CAROUSEL END -->
        
    <!-- START THE FEATURETTES -->
	<hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="500x500" src="http://placehold.it/500">
        </div>
    </div>

	<hr class="featurette-divider">

	<div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="500x500" src="http://placehold.it/500">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
		</div>
	</div>
    <!-- /END THE FEATURETTES -->
    
    <!-- /FOOTER -->
    <hr class="featurette-divider">
    
    <footer>
      <p class="pull-right">
        <a href="#">Back to top <span class="glyphicon glyphicon-circle-arrow-up"></span></a>
      </p>
	</footer>
    
  </div><!-- /.container-fluid -->
</div><!-- /.page-content-wrapper -->
      
<script>
	
	$('#serviceCarousel').carousel({
		interval: 5000
	});

</script>

<!-- DIALOG FORM -->
<div id="dialog-form" title="Service Order">

    <form role="form">
      <div class="form-group">
        <label for="inputType">Type</label>
        <select name="service_type" class="form-control">
          <option>-- Select a service type --</option>
        </select>
      </div>
      <div class="form-group">
        <label for="inputDate">Date</label>
        <input type="text" class="form-control datepicker" id="inputDate" placeholder="mm/dd/yyyy" title="format : mm/dd/yyyy">
      </div>
      <div class="form-group">
        <label for="inputImg">Image</label>
        <input type="file" id="inputImg" class="btn btn-default">
        <p class="help-block">type : .jpg .png</p>
      </div>
      <hr />
      <div class="form-group pull-right">
        <button type="submit" class="btn btn-info">Submit</button>
        <button type="button" class="btn btn-warning" id="dialog-close">Cancel</button>
      </div>
    </form>      

</div>

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

$(".datepicker").datepicker();

</script>


