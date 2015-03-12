<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Landing Page</title>
 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
 
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/myconnect.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/gallery-effect.css"/>
  
</head>
 
<body>
 
<div class="popup">
 
<div class="container-fluid" style="margin-top:15%;">
 
  <div class="mid">
   
    <div class="row">
      <div class="col-sm-4 col-sm-offset-4 text-center">
      <img src="<?php echo base_url(); ?>assets/images/logo.png" style="width:300px;" class="brightness" />
      <h1 class="" style="color:white; margin-bottom:0px;">River Side Residences</h1>
      </div>
    </div><!-- /.row -->
     
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
      <hr />
      <?php 
	  	echo validation_errors(); 
	  	$attributes = array('class' => 'form-login form-inline', 'id' => 'myform', 'role' => 'form');
	  	echo form_open('landing/loginauth_controller', $attributes); 
	  ?>
        <!--<form class="form-login form-inline" role="form">-->
        
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
              <input name="username" id="username" class="form-control" type="text" placeholder="Username">
            </div>
          </div>
          
          <div class="form-group" style="margin-left:15px;">
            <div class="input-group">
              <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
              <input name="password" id="password" class="form-control" type="password" placeholder="Password">
            </div>
          </div>
          
          <input name="login" type="submit" value="Sign in" class="btn btn-primary col-sm-2 pull-right" />
          <!--<button type="submit" class="btn btn-primary col-sm-2 pull-right">Sign in</button>-->
          <!--<a href="home" class="btn btn-primary col-sm-2 pull-right">Sign in</a>-->
          <div style="margin: 5px 5px -5px 5px;" class="text-right">
            <a href="#" style="color:#fff;" data-toggle="modal" data-target="#myModal">Forgot Password ?</a>
          </div>
        <!--</form>-->
      </div><!-- /.col-sm-6 col-sm-offset-3 -->
    </div><!-- /.row -->
           
  </div><!-- /.mid -->
 
</div><!-- /.container-fluid -->
   
</div><!-- /.popup -->
<!-- /. -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="top:20%;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Enter your E-mail address</h4>
      </div>
      <div class="modal-body">
      
		<?php echo validation_errors(); ?>

		<?php echo form_open('form'); ?>
          <div class="form-group">
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
          </div>
        </form>  
              
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      
    </div>
  </div>
</div>


</body>
</html>