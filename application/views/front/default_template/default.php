<!DOCTYPE html>
<!--[if IE 8]> <html class="no-js lt-ie9 ie8" lang="en"> <![endif]-->
<!--[if IE 9]> <html class="ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<!-- Metas
	================================================== -->
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, user-scalable=no, target-densitydpi=device-dpi"/>
<meta name="description" content="Birva Creative Studio - Bootstrap Multipurpose One Page HTML Theme" />
<meta name="keywords" content="Bootstrap 3,html5,css3,jquery,portfolio,creative,design,personal" />
<meta name="author" content="" />
<script src="<?php echo base_url() ?>js/jquery-1.10.2.min.js" type="text/javascript"></script>
<!-- Page Title 
	================================================== -->
<title>Coin Dash :: Bitcoin Project</title>

<!-- Favicon 
	================================================== -->
<link rel="shortcut icon" href="<?php echo base_url() ?>images/favicon.ico"/>

<!-- Google fonts
	================================================== -->
<link href='http://fonts.googleapis.com/css?family=Oswald:300,400,500,700' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,600,700,800,300' rel='stylesheet' type='text/css' />

<!-- bootstrap v3.0.2
	==================================================-->
<link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap.css">
<!--font-awesome
	================================================== -->
<link rel="stylesheet" href="<?php echo base_url() ?>css/font-awesome.css">
<!-- CSS Custom
	================================================== -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/perfect-scrollbar.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/magnific-popup.css">
<link rel="stylesheet" type="text/css" id="color" href="css/colors/color-default.css">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

<script>
  jQuery(doucument).ready(function() {
  
  jQuery("#myModal").live("click", function() {
        jQuery("#myModal iframe").attr("src", jQuery("#myModal iframe").attr("src"));
});  
});
  
  </script>

</head>

<body data-twttr-rendered="true" data-spy="scroll" data-target="#my-nav">
<!-- pre loder -->
<div id="preloader">
  <div id="status">&nbsp;</div>
  <!-- /status --> 
</div>
<!-- Navigation Bar -->
<div class="navbar navbar-fixed-top whitenav minified">
  <div class="container"> 
    <!-- mobile menu -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="<?php echo site_url() ?>"><img class="logo" src="<?php echo base_url() ?>images/04_small-logo.png" alt=""></a> </div>
    <!-- desktop menu -->
    <nav id="my-nav" class="navbar-collapse collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li class="sell_l">Sell: $983.48</li>
        <li class="sell_l">Buy: $483.48</li>
        <li class="<?php if(isset($url) && $url==site_url()){ echo "active"; } ?>"><a href="<?php echo site_url(); ?>">Home</a></li>
        <li class="<?php if(isset($url) && $url==site_url('front/dashboard')){ echo "active"; } ?>"><a href="<?php echo site_url('front/dashboard') ?>">Trade</a></li>
        <li class="<?php if(isset($url) && $url==site_url('front/dashboard/account')){ echo "active"; } ?>"><a href="<?php echo site_url('front/dashboard/account') ?>">Account</a></li>
        <li class="<?php if(isset($url) && $url==site_url('front/home/login')){ echo "active"; } ?>"><a href="<?php echo site_url('front/home/login') ?>">Signin</a></li>
        <li class="<?php if(isset($url) && $url==site_url('front/home/register')){ echo "active"; } ?>"><a href="<?php echo site_url('front/home/register') ?>">Signup</a></li>
        <!--<li class=""><a href="#">Work</a></li>
		<li class=""><a href="#">Testimonials</a></li>
		<li class=""><a href="#">Blog</a></li>
		<li class=""><a href="#">Contact</a></li>-->
      </ul>
    </nav>
  </div>
</div>
<!-- End of Navigation Bar --> 

<!-- Header Part Finish -->

	<?php echo $content_for_layout; ?>

<!-- Footer Part Starts -->
<!-- Footer -->
<?php if(isset($home)){ $cls = ''; } else { $cls = 'for_bottom'; } ?>
<div class="footer <?php echo $cls ?>">
  <div class="container" style="padding-top:10px; padding-bottom:10px;"> 
    <!-- Footer logo--> 
    <!--<div class="main-photo">
	<img width="120" height="120" class="banner-logo pulsate-opacity" src="images/01_logo.png" alt="">
	</div>--> 
    <!-- Footer social icon --> 
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
   
    
    
     <span class="fotter_navi">© 2014 Coindash - All rights reserved</span> <span style="float:right"> <a title="Twitter" target="_blank" href="https://twitter.com" > <span class="icon-circle_new large"> <i class="fa fa-twitter"></i> </span> </a> &nbsp; <a title="facebook" target="_blank" href="https://www.facebook.com"> <span class="icon-circle_new large"> <i class="fa fa-facebook"></i> </span></a></span> </div>
</div>
<!-- End of Footer --> 

<!-- Scroll top -->
<div class="scrolltotop"> <i class="fa fa-chevron-up"></i> </div>
<!-- End scroll top --> 

<!-- Bootstrap core JavaScript, plugin and custom scripts
================================================== --> 

<script src="<?php echo base_url() ?>js/bootstrap.js"></script> 
<script type="text/javascript" src="<?php echo base_url() ?>js/modernizr.js"></script> 
<script type="text/javascript" src="<?php echo base_url() ?>js/jquery.funnyText.js"></script> 
<script type="text/javascript" src="<?php echo base_url() ?>js/masonry.js"></script> 
<script src="<?php echo base_url() ?>js/jquery.easypiechart.min.js"></script> 
<script src="<?php echo base_url() ?>js/jquery.appear.js"></script> 
<script type="text/javascript" src="<?php echo base_url() ?>js/jquery.cslider.js"></script> 
<script type="text/javascript" src="<?php echo base_url() ?>js/jquery.mixitup.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url() ?>js/classie.js"></script> 
<script type="text/javascript" src="<?php echo base_url() ?>js/imagesloaded.js"></script> 
<script type="text/javascript" src="<?php echo base_url() ?>js/jquery.parallax-1.1.3.js"></script> 
<script type="text/javascript" src="<?php echo base_url() ?>js/parallaxInit.js"></script> 
<script type="text/javascript" src="<?php echo base_url() ?>js/jquery.flexisel.js"></script> 
<script type="text/javascript" src="<?php echo base_url() ?>js/jquery.mousewheel.js"></script> 
<script type="text/javascript" src="<?php echo base_url() ?>js/perfect-scrollbar.js"></script> 
<script type="text/javascript" src="<?php echo base_url() ?>js/carousel-slider.js"></script> 
<script type='text/javascript' src="<?php echo base_url() ?>js/jquery.magnific-popup.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url() ?>js/jquery.flexslider-min.js"></script> 
<script type="text/javascript" src="<?php echo base_url() ?>js/jquery.easing.1.3.js"></script> 
<script type="text/javascript" src="<?php echo base_url() ?>js/tweetable.jquery.js"></script> 
<script type="text/javascript" src="<?php echo base_url() ?>js/jquery.timeago.js"></script> 
<script src="<?php echo base_url() ?>js/jquery.placeholder.js"></script> 
<script type="text/javascript" src="<?php echo base_url() ?>js/scripts.js"></script> 
<script type="text/javascript" src="<?php echo base_url() ?>js/switcher.js"></script> 
<script>
jQuery(document).ready(function() {
	// Pie Charts
	'use strict';
	var pieChartClass = 'pieChart',
    pieChartLoadedClass = 'pie-chart-loaded';
	function initPieCharts() {
		var chart = $('.' + pieChartClass);
		chart.each(function() {
			$(this).appear(function() {
				var $this = $(this),
					chartBarColor = ($this.data('bar-color')) ? $this.data('bar-color') : "#F6464A",
					chartBarWidth = ($this.data('bar-width')) ? ($this.data('bar-width')) : 150
				if( !$this.hasClass(pieChartLoadedClass) ) {
					$this.easyPieChart({
						animate: 2000,
						size: chartBarWidth,
						lineWidth: 6,
						scaleColor: false,
						trackColor: "#eeeeee",
						barColor: chartBarColor,
					}).addClass(pieChartLoadedClass);
				}
			});
		});
	}
	initPieCharts();
});
</script> 
<script type="text/javascript">
		$(document).ready(function() {
			'use strict';
			$('.funny-text').funnyText({
				speed: 700,
				activeColor: '#F6464A',
				color: '#fff',
				fontSize: '1em',
				borderColor: 'none'
			});
			
		});
	</script> 
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46212898-1', 'naiknikunj.me');
  ga('send', 'pageview');

</script>
</body>
</html>