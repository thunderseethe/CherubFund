<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->
<head>

<!-- Meta Tags -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Home | Cherub Fund</title>   

<meta name="description" content="" /> 

<!-- Mobile Specifics -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="HandheldFriendly" content="true"/>
<meta name="MobileOptimized" content="320"/>   

<!-- Mobile Internet Explorer ClearType Technology -->
<!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

<!-- Bootstrap -->
<link href="_include/css/bootstrap.min.css" rel="stylesheet">

<!-- Revolution Slider -->
<link href="_include/rs-plugin/css/settings.css" rel="stylesheet">

<!-- Main Style -->
<link href="_include/css/main.css" rel="stylesheet">

<!-- FancyBox -->
<link href="_include/css/fancybox/jquery.fancybox.css" rel="stylesheet">

<!-- Font Icons -->
<link href="_include/css/fonts.css" rel="stylesheet">

<!-- Shortcodes -->
<link href="_include/css/shortcodes.css" rel="stylesheet">

<!-- Responsive -->
<link href="_include/css/responsive.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="_include/css/custom.css" rel="stylesheet">

<!-- Google Font -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

<!-- Fav Icon -->
<link rel="shortcut icon" href="#">

<link rel="apple-touch-icon" href="#">
<link rel="apple-touch-icon" sizes="114x114" href="#">
<link rel="apple-touch-icon" sizes="72x72" href="#">
<link rel="apple-touch-icon" sizes="144x144" href="#">

<!-- JS -->
<?php include '_include/php/js.php'; ?>
<!-- End JS -->

<!-- Modernizr -->
<script src="_include/js/modernizr.js"></script>

<!-- Analytics -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-4910263-10']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<!-- End Analytics -->

<!-- JS Scrolling -->
<script type="text/javascript">
$(document).ready(function(){
	jQuery('.aboutLink').click(function(e){
		e.preventDefault();
		jQuery('html,body').scrollTo(jQuery('#about').offset().top-10)
	});
});
</script>
<!-- END Scrolling -->
</head>


<body>

<!-- Header -->
<?php include '_include/php/header.php'; ?>
<!-- End Header -->

<!-- Start Slider -->
<section id="image-static">
    <div class="fullimage-container">
    	<div class="pattern"></div>
        <img src="_include/img/slider-images/slider_mem.jpg" />
    </div>
</section>
<!-- End Slider -->

<!-- Start Intro Box -->  
<section id="intro-box" class="margin-80">
	<div class="container">
    	<div class="row">
        	<div class="span12">
            	<h3>We bring a personal and effective approach to every project we work on, which is why our clients love us and why they keep coming back.</h3>
                <span class="arrow"></span>
            </div>
        </div>
    </div>
</section>
<!-- End Intro Box -->

<section id="about-section">
	<div class="container">
		<div class="row">
			<div class="span12" align="center">
				<h3 id="about">About Cherub Fund</h3>	
				<p>
				The Cherub Fund was formed in 2013 in order to grow the startup community in Kentucky.  The fund is comprised of entrepreneurs, angel investors and supporters of entrepreneurs.  
				</p>
			</div>
		</div>
	</div>
</section>
<section id="principles" class="margin-80">
	<span class="arrow-down"></span>
    <span class="arrow"></span>
	<div class="container">
		<div class="row">
			<div class="span12">
				<h3 align="center">We operate on 3 guiding principles</h3>
			</div>
			<div class="span4">
				<b>All deals will be entreprenuer friendly</b>
				<p>Most of us are entrepreneurs ourselves or have been entrepreneurs at one time.  We know what its like to get started and want to make the deal as friendly and beneficial to the entrepreneur as possible.</p>
			</div>
			<div class="span4">
				<b>We will invest often and quickly</b>
				<p>The fund will make 6 investments over the course of the first year.  We typically decide on a deal within 2-3 weeks of the time that we start looking at a company.  We can usually tell within 1-2 meetings and by reviewing your AngelList profile if we want to work with a company or not.</p>
			</div>
			<div class="span4">
				<b>Everything is simple</b>
				<p>We minimize paperwork and keep the terms simple.  We take common stock and operate with option agreements with companies in which we invest.</p>
			</div>
		</div>
	</div>
</section>
<section class="margin-80">
	<div class="container">
		<div class="row">
			<div class="span12" align="center">
				<h4>Investment Process</h4>
				<img src="_include/img/hold.svg" />
			</div>
		</div>
	</div>
</section>
<!-- Start Footer -->
<footer>
	<div class="container">
    	<div class="row">
        	<nav id="social-footer">
                <ul>
                    <li><a href="#" title=""><i class="font-icon-social-twitter"></i></a></li>
                    <li><a href="#" title=""><i class="font-icon-social-facebook"></i></a></li>
                    <li><a href="#" title=""><i class="font-icon-social-dribbble"></i></a></li>
                    <li><a href="#" title=""><i class="font-icon-social-behance"></i></a></li>
                    <li><a href="#" title=""><i class="font-icon-social-email"></i></a></li>
                </ul>
            </nav>
        </div>
    </div>
</footer>
<!-- End Footer -->

<!-- Start Credits -->
<?php include '_include/php/credit.php'; ?>
<!-- End Credits -->

<!-- Back To Top -->
<a id="back-to-top" href="#">
	<i class="font-icon-arrow-simple-up"></i>
</a>
<!-- End Back to Top -->

</body>
</html>