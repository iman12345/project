<!-- /. -->
<?php session_start(); define("KEY", "passed"); error_reporting(E_ALL & ~E_NOTICE) ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>MyConnect</title>

<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/icon2.ico" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/myconnect.css"/>  
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/jquery.dataTables.css"/>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/sidebar.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/datepicker3.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/msform.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/gallery-effect.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/wireframe.css"/>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.dataTables.js"></script>

<!-- Chart -->
<script type="text/javascript" src="assets/js/highcharts.js"></script>
<script type="text/javascript" src="assets/js/modules/exporting.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/morrisjs/morris.css"/>
<!-- Morris Charts JavaScript -->
<script src="<?php echo base_url(); ?>assets/raphael/raphael.min.js"></script>
<script src="<?php echo base_url(); ?>assets/morrisjs/morris.min.js"></script>

<!-- Scheduler -->
<script src='<?php echo base_url(); ?>assets/codebase/dhtmlxscheduler.js' type="text/javascript" charset="utf-8"></script>
<script src='<?php echo base_url(); ?>assets/codebase/ext/dhtmlxscheduler_timeline.js' type="text/javascript" charset="utf-8"></script>
<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>assets/codebase/dhtmlxscheduler.css'>

<script type="text/javascript">
$(function() {
    $( document ).tooltip({
      position: {
        my: "center bottom-5",
        at: "center top",
        using: function( position, feedback ) {
          $( this ).css( position );
          $( "<div>" )
            .addClass( "arrow" )
            .addClass( feedback.vertical )
            .addClass( feedback.horizontal )
            .appendTo( this );
        }
      }
    });
});
</script>

<style>
  .ui-tooltip, .arrow:after {
    background: black;
    border: 2px solid white;
  }
  .ui-tooltip {
    padding: 4px 8px;
    color: white;
    border-radius: 20px;
    font: bold 10px "Helvetica Neue", Sans-Serif;
    text-transform: uppercase;
    box-shadow: 0 0 7px black;
  }
  .arrow {
    width: 35px;
    height: 8px;
    overflow: hidden;
    position: absolute;
    left: 50%;
    margin-left: -17px;
    bottom: -8px;
  }
  .arrow.top {
    top: -8px;
    bottom: auto;
  }
  .arrow.left {
    left: 20%;
  }
  .arrow:after {
    content: "";
    position: absolute;
    left: 10px;
    top: -10px;
    width: 15px;
    height: 15px;
    box-shadow: 6px 5px 9px -9px black;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
  }
  .arrow.top:after {
    bottom: -10px;
    top: auto;
  }
  </style>

</head>

<body style="background-color:#FBFBFB; zoom: 90%;">

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="gallery">
          <a class="navbar-brand" href="home">
            <img style="width:75px; height:35px;" src="<?php echo base_url(); ?>assets/images/logo.png" class="brightness" /> MyConnect             
          </a>
          </div>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="<?php echo site_url(); ?>/notifications">
                <span class="glyphicon glyphicon-bell" style="font-size:1.5em; padding:0; margin:0;" aria-hidden="true"></span>
                <sup class="badge">42</sup>
              </a>
            </li>
            
            <li class="dropdown">
              <a href="#" style="padding:5px 15px;" class="dropdown-toggle" data-toggle="dropdown">
                <img class="img-circle" src="http://placehold.it/40" />
                <?php echo $user->FULL_NAME; ?>, <?php echo $apartment->NAME; ?> <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo site_url(); ?>/profile"><span style="margin-right:10px;" class="glyphicon glyphicon-user"></span>My Profile</a></li>
                <li><a href="<?php echo site_url(); ?>/notifications"><span style="margin-right:10px;" class="glyphicon glyphicon-bullhorn"></span>Notifications <small class="badge">42</small></a></li>
                <li><a href="#"><span style="margin-right:10px;" class="glyphicon glyphicon-cog"></span>Setting</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo site_url(); ?>/logout"><span style="margin-right:10px;" class="glyphicon glyphicon-log-out"></span>Log Out</a></li>
              </ul>
            </li>
          </ul>
          
          <!--
          <form class="navbar-form navbar-right" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
          -->
          
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

 	<div id="wrapper">
