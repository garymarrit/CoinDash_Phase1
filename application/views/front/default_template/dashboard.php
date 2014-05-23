<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>CoinDash</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="stylesheet" href="<?php echo base_url() ?>css/dashboard/styles.min.css">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet' type='text/css'>
<link href='<?php echo base_url() ?>css/dashboard/default.css' rel='stylesheet' type='text/css' media='all' id='styleswitcher'>
<link href='<?php echo base_url() ?>css/dashboard/default.css' rel='stylesheet' type='text/css' media='all' id='headerswitcher'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries. Placeholdr.js enables the placeholder attribute -->
<!--[if lt IE 9]>
        <link rel="stylesheet" href="assets/css/ie8.css">
		<script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
        <script type="text/javascript" src="assets/plugins/charts-flot/excanvas.min.js"></script>
	<![endif]-->
<!-- The following CSS are included as plugins and can be removed if unused-->
<link rel='stylesheet' type='text/css' href='<?php echo base_url() ?>css/dashboard/jquery.pnotify.default.css' />
<link rel='stylesheet' type='text/css' href='<?php echo base_url() ?>css/dashboard/prettify.css' />
<link rel='stylesheet' type='text/css' href='<?php echo base_url() ?>css/dashboard/toggles.css' />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/dashboard/custom.css">
</head>

<body class="">
<div id="headerbar">
  <div class="container">
    <div class="row">
      <div class="col-xs-6 col-sm-2"> <a href="#" class="shortcut-tiles tiles-brown">
        <div class="tiles-body">
          <div class="pull-left"><i class="fa fa-pencil"></i></div>
        </div>
        <div class="tiles-footer"> Create Post </div>
        </a> </div>
      <div class="col-xs-6 col-sm-2"> <a href="#" class="shortcut-tiles tiles-grape">
        <div class="tiles-body">
          <div class="pull-left"><i class="fa fa-group"></i></div>
          <div class="pull-right"><span class="badge">2</span></div>
        </div>
        <div class="tiles-footer"> Contacts </div>
        </a> </div>
      <div class="col-xs-6 col-sm-2"> <a href="#" class="shortcut-tiles tiles-primary">
        <div class="tiles-body">
          <div class="pull-left"><i class="fa fa-envelope-o"></i></div>
          <div class="pull-right"><span class="badge">10</span></div>
        </div>
        <div class="tiles-footer"> Messages </div>
        </a> </div>
      <div class="col-xs-6 col-sm-2"> <a href="#" class="shortcut-tiles tiles-inverse">
        <div class="tiles-body">
          <div class="pull-left"><i class="fa fa-camera"></i></div>
          <div class="pull-right"><span class="badge">3</span></div>
        </div>
        <div class="tiles-footer"> Gallery </div>
        </a> </div>
      <div class="col-xs-6 col-sm-2"> <a href="#" class="shortcut-tiles tiles-midnightblue">
        <div class="tiles-body">
          <div class="pull-left"><i class="fa fa-cog"></i></div>
        </div>
        <div class="tiles-footer"> Settings </div>
        </a> </div>
      <div class="col-xs-6 col-sm-2"> <a href="#" class="shortcut-tiles tiles-orange">
        <div class="tiles-body">
          <div class="pull-left"><i class="fa fa-wrench"></i></div>
        </div>
        <div class="tiles-footer"> Plugins </div>
        </a> </div>
    </div>
  </div>
</div>
<header class="navbar navbar-inverse navbar-fixed-top" role="banner"  style="background-color: rgb(255, 255, 255); height: 50px; padding-top: 5px;"> <a id="leftmenu-trigger" class="tooltips" data-toggle="tooltip" data-placement="right" title="Toggle Sidebar"></a>
  <ul class="nav navbar-nav pull-right toolbar">
    <li class="dropdown" style="border:none !important;"> <a data-toggle="dropdown" class="dropdown-toggle username" href="#"><span class="hidden-xs"><span style="color:#999;">Profile Person</span> <i class="fa fa-caret-down" style="color:#333;"></i></span> <img alt="Dangerfield" src="<?php echo base_url() ?>images/dashboard/avtaar.png"></a>
      <ul class="dropdown-menu userinfo arrow">
        <li class="username"> <a href="#">
          <div class="pull-left"> <img alt="Jeff Dangerfield" src="<?php echo base_url() ?>images/dashboard/avtaar.png"> </div>
          <div class="pull-right">
            <h5>Dear, Profile Person!</h5>
          </div>
          </a> </li>
        <li class="userlinks">
          <ul class="dropdown-menu">
            <li><a href="#">Edit Profile <i class="pull-right fa fa-pencil"></i></a></li>
            <li><a href="#">Account <i class="pull-right fa fa-cog"></i></a></li>
            <li><a href="#">Help <i class="pull-right fa fa-question-circle"></i></a></li>
            <li class="divider"></li>
            <li><a class="text-right" href="<?php echo site_url('front/dashboard/logout') ?>">Sign Out</a></li>
          </ul>
        </li>
      </ul>
    </li>
  </ul>
  <a id="rightmenu-trigger" class="tooltips" data-toggle="tooltip" data-placement="left" title="Toggle Infobar" style="display:none;"></a>
  <div class="navbar-header pull-left"> <img src="<?php echo base_url() ?>images/dashboard/coin_dash.png" style="position:absolute; top:4px;"/> </div>
</header>
<div id="page-container"> 
  <!-- BEGIN SIDEBAR -->
  <nav id="page-leftbar" role="navigation"> 
    <!-- BEGIN SIDEBAR MENU -->
    <ul class="acc-menu" id="sidebar">
      <li class="divider"></li>
      <!--<li><a href="#"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>-->
      <li><a href="<?php echo site_url('front/dashboard') ?>"><i class="fa fa-bitcoin"></i><span>Trading</span> </a> 
        <!-- <ul class="acc-menu">
          <li><a href="#"><span>Tab1</span></a></li>
          <li><a href="#"><span>Tab2</span></a></li>

        </ul>--> 
      </li>
      <li><a href="<?php echo site_url('front/dashboard/wallet') ?>"><i class="fa fa-dollar"></i><span>Wallet</span> 
        <!--<span class="badge badge-indigo">4</span>--> 
        </a> 
        <!--<ul class='acc-menu'>
          <li><a href="#">Tab1</a></li>
          <li><a href="#">Tab2</a></li>

        </ul>--> 
      </li>
      <li><a href="<?php echo site_url('front/dashboard/account') ?>"><i class="fa fa-user"></i><span>Account</span> 
        <!--<span class="badge badge-info">12</span>--> 
        </a> 
        <!--<ul class="acc-menu">
          <li><a href="#">Tab1</a></li>
          <li><a href="#">Tab2</a></li>

        </ul>--> 
      </li>
    </ul>
    <!-- END SIDEBAR MENU --> 
  </nav>
  <div id="page-content">

	<?php echo $content_for_layout; ?>

</div>
  <!-- page-content -->
  
  <footer role="contentinfo">
    <div class="clearfix">    
    <span class="main_full_foot"> 
    <a href="<?php echo site_url('front/home/about_us') ?>" class="fotter_navi">About us </a> 
    <span>|</span> 
    <a href="<?php echo site_url('front/home/faq') ?>" class="fotter_navi">FAQ</a> 
     <span>|</span>
     <a href="<?php echo site_url('front/home/press') ?>" class="fotter_navi">Press</a> 
      <span>|</span>
     <a href="<?php echo site_url('front/home/jobs') ?>" class="fotter_navi">Jobs</a> 
      <span>|</span>
     <a href="<?php echo site_url('front/home/contact_us') ?>" class="fotter_navi">Contact Us</a>      
    </span>  
   	 <span>© 2014 Coindash - All rights reserved</span>
     <span style="float:right"> <a href="https://twitter.com" target="_blank" title="Twitter"> <span class="icon-circle_new large"> <i class="fa fa-twitter"></i> </span> </a> &nbsp; <a href="https://www.facebook.com" target="_blank" title="facebook"> <span class="icon-circle_new large"> <i class="fa fa-facebook"></i> </span></a></span>
     <button class="pull-right btn btn-inverse-alt btn-xs hidden-print" id="back-to-top"><i class="fa fa-arrow-up"></i></button>
    </div>
  </footer>
</div>
<!-- page-container --> 
<!--
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

<script>!window.jQuery && document.write(unescape('%3Cscript src="assets/js/jquery-1.10.2.min.js"%3E%3C/script%3E'))</script>
<script type="text/javascript">!window.jQuery.ui && document.write(unescape('%3Cscript src="assets/js/jqueryui-1.10.3.min.js'))</script>
--> 
<script type='text/javascript' src='<?php echo base_url() ?>js/dashboard/jquery-1.10.2.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url() ?>js/dashboard/jqueryui-1.10.3.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url() ?>js/dashboard/bootstrap.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url() ?>js/dashboard/enquire.js'></script> 
<script type='text/javascript' src='<?php echo base_url() ?>js/dashboard/jquery.cookie.js'></script> 
<script type='text/javascript' src='<?php echo base_url() ?>js/dashboard/jquery.nicescroll.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url() ?>js/dashboard/prettify.js'></script> 
<script type='text/javascript' src='<?php echo base_url() ?>js/dashboard/jquery.easypiechart.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url() ?>js/dashboard/jquery.sparklines.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url() ?>js/dashboard/toggle.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url() ?>js/dashboard/jquery.pnotify.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url() ?>js/dashboard/placeholdr.js'></script> 
<script type='text/javascript' src='<?php echo base_url() ?>js/dashboard/application.js'></script> 
<script type='text/javascript' src='<?php echo base_url() ?>js/dashboard/demo.js'></script>
</body>
</html>