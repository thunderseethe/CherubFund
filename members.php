<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->
<head>

<!-- Meta Tags -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Members | Cherub Fund</title>   

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

</head>


<body>

<!-- Header -->
<?php include '_include/php/header.php'; ?>
<!-- End Header -->

<!-- Start Section Title -->
<section id="title-page">
	<h2>Our Members</h2>
    <span class="arrow"></span>
</section>
<!-- End Section Ttile -->


<div id="content">
    <!-- Start Section Portfolio Filter
    <section id="portfolio-filter" class="container margin-50">
        <div class="row">
            <div class="span12">
            
                <div class="dropdown">
                    <div class="dropmenu">
                        <p class="selected">All Projects</p>
                        <i class="font-icon-arrow-simple-down"></i>
                    </div>
                    
                    <div class="dropmenu-active">
                        <ul class="option-set" data-option-key="filter">
                            <li><a class="selected drop-selected" href="#filter" data-option-value="*">All Projects</a></li>
                            <li><a href="#filter" data-option-value=".design">Design</a></li>
                            <li><a href="#filter" data-option-value=".digital">Digital</a></li>
                            <li><a href="#filter" data-option-value=".icon">Icon</a></li>
                            <li><a href="#filter" data-option-value=".video">Video</a></li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    End Section Portfolio Filter -->
    
    <!-- Start Section Portfolio Projects -->
    <section id="portfolio" class="container">
        <div class="row">
        
            <div id="portfolio-projects" align=center>
                <ul id="projects">
                	<?php
                		$raw_names = file('_include/members.txt', FILE_IGNORE_NEW_LINES);
                		$names = array();
                		foreach($raw_names as $row){
                			$names[] = explode(";", $row);
                		}
                		foreach($names as $name){
                    	echo '<li class="item-project span3 design" style="width:120px;height:120px;">
                        	<div class="title">
                        	    <a href="'.$name[1].'" target="_blank">'.$name[0].'<br/>'.$name[2].'</a>
                        	</div>
                        	<span class="arrow-port"></span>
                        
                        	<a class="hover-wrap fancybox" href="'.$name[1].'" data-fancybox-group="gallery" title="'.$name[0].'" target="_blank">
                            	<img src="_include/img/'.$name[0].'.jpg"/>
                            	<div class="overlay"></div>
                            	<i class="font-icon-plus"></i>
                       		</a>
                    	</li>';
                    	}
                    ?>         
                </ul>
            </div>
        </div>
    </section>
    <!-- End Section Portfolio Projects -->
</div>



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

<!-- Js -->
<?php include '_include/php/js.php'; ?>
<!-- End Js -->

</body>
</html>