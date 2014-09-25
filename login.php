<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Landing Page</title>

<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="assets/css/gallery-effect.css"/>

<style>


.popup::after {
  content: "";
  background: url(assets/images/sd.jpg) no-repeat;
  background-size:  100% 100%;
  -webkit-filter: brightness(0.7) blur(3px); filter: brightness(0.7) blur(3px);
  opacity: 0.8;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  position: absolute;
  z-index: -1;   
}

.mid {
}

.form-login {
  background-color:rgba(0, 0, 0, 0.6);
  padding:10px;
	border: 0 none;
	border-radius: 3px;
	box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);

}

</style>

</head>

<body>

<div class="popup">

<div class="container-fluid" style="margin-top:15%;">

  <div class="mid">
  
    <div class="row">
      <div class="col-sm-4 col-sm-offset-4">
      <img src="assets/images/logo3.png" style="width:400px;" class="grayscale" />
      </div>
    </div><!-- /.row -->
    
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
      <hr />
        <form class="form-login form-inline" role="form">
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
              <input class="form-control" type="email" placeholder="Username">
            </div>
          </div>
          <div class="form-group" style="margin-left:15px;">
            <div class="input-group">
              <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
              <input class="form-control" type="password" placeholder="Password">
            </div>
          </div>
          <!--<button type="submit" class="btn btn-primary col-sm-3 pull-right">Sign in</button>-->
          <a href="index.php" class="btn btn-primary col-sm-3 pull-right">Sign in</a>
          <div style="margin: 5px 5px -5px 5px;">
          <a href="#" style="color:#fff;" class="pull-right">Forgot Password ?</a>
          <div class="checkbox">
            <label>
              <input type="checkbox"> <span style="vertical-align:top;color:#fff;">Remember me</span>
            </label>
          </div>
          </div>
        </form>
      </div><!-- /.col-sm-6 col-sm-offset-3 -->
    </div><!-- /.row -->
          
  </div><!-- /.mid -->

</div><!-- /.container-fluid -->
  
</div><!-- /.popup -->
<!-- /. -->
</body>
</html>