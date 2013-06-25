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
        
            <div id="portfolio-projects">
                <ul id="projects">
                	<?php
                		$raw_names = file('_include/members.txt', FILE_IGNORE_NEW_LINES);
                		$names = array();
                		foreach($raw_names as $row){
                			$names[] = explode(";", $row);
                		}
                		foreach($names as $name){
                    	echo '<li class="item-project span3 design">
                        	<h5>
                        	    <a href="'.$name[1].'" target="_blank">'.$name[0].'<br/>'.$name[2].'</a>
                        	</h5>
                        	<span class="arrow-port"></span>
                        
                        	<a class="hover-wrap fancybox" href="'.$name[1].'" data-fancybox-group="gallery" title="'.$name[0].'" target="_blank">
                            	<img src="_include/img/'.$name[0].'.jpg"/>
                            	<div class="overlay"></div>
                            	<i class="font-icon-plus"></i>
                       		</a>
                    	</li>';
                    	}
                    ?>
                    <!--<li class="item-project span3 digital">
                        <h5>
                            <a href="" target="_blank">Ben Miller</a>
                            <span class="arrow-port"></span>
                        </h5>
                        
                        <a class="hover-wrap fancybox" target="_blank" href="" data-fancybox-group="gallery" title="Advanced Search UI">
                            <img src="_include/img/portfolio/thumb/Ben Miller.jpg"/>
                            <div class="overlay"></div>
                            <i class="font-icon-plus"></i>
                        </a>
                    </li>
                    
                    <li class="item-project span3 icon">
                        <h5>
                            <a href="" target="_blank">Bo Harris</a>
                            <span class="arrow-port"></span>
                        </h5>
                        
                        <a target="_blank" class="hover-wrap fancybox" href="" data-fancybox-group="gallery" title="Secret App Icon">
                            <img src="_include/img/portfolio/thumb/Bo Harris.jpg"/>
                            <div class="overlay"></div>
                            <i class="font-icon-plus"></i>
                        </a>
                    </li>
                    
                    <li class="item-project span3 video">
                        <h5>
                            <a target="_blank" href="https://angel.co/brian-luftman">Brian Luftman</a>
                            <span class="arrow-port"></span>
                        </h5>
                        
                        <a target="_blank" class="hover-wrap fancybox-media" href="https://angel.co/brian-luftman" data-fancybox-group="video" title="Brian Luftman">
                            <img src="_include/img/portfolio/thumb/Brian Luftman.jpg" />
                            <div class="overlay"></div>
                            <i class="font-icon-plus"></i>
                        </a>
                    </li>
                    
                    <li class="item-project span3 design digital">
                        <h5>
                            <a target="_blank" href="https://angel.co/brianraney">Brian Raney</a>
                            <span class="arrow-port"></span>
                        </h5>
                        
                        <a target="_blank" class="hover-wrap fancybox" href="https://angel.co/brianraney" data-fancybox-group="gallery" title="Spotlight">
                            <img src="_include/img/portfolio/thumb/Brian Raney.jpg" />
                            <div class="overlay"></div>
                            <i class="font-icon-plus"></i>
                        </a>
                    </li>
                    
                    <li class="item-project span3 icon">
                        <h5>
                            <a target="_blank" href="https://angel.co/bryceanderson">Bryce Anderson</a>
                            <span class="arrow-port"></span>
                        </h5>
                        
                        <a target="_blank" class="hover-wrap fancybox" href="https://angel.co/bryceanderson" data-fancybox-group="gallery" title="Bryce Anderson">
                            <img src="_include/img/portfolio/thumb/Bryce Anderson.jpg" />
                            <div class="overlay"></div>
                            <i class="font-icon-plus"></i>
                        </a>
                    </li>
                    
                    <li class="item-project span3 video">
                        <h5>
                            <a target="_blank" href="https://angel.co/chris-young-5">Christopher H Young</a>
                            <span class="arrow-port"></span>
                        </h5>
                        
                        <a class="hover-wrap fancybox-media" href="https://angel.co/chris-young-5" data-fancybox-group="video" title="Christopher H Young">
                            <img src="_include/img/portfolio/thumb/Christopher H Young.jpg" />
                            <div class="overlay"></div>
                            <i class="font-icon-plus"></i>
                        </a>
                    </li>
                    
                    <li class="item-project span3 design">
                        <h5>
                            <a target="_blank" href="https://angel.co/drew-curtis">Drew Curtis</a>
                            <span class="arrow-port"></span>
                        </h5>
                        
                        <a target="_blank" class="hover-wrap fancybox" href="https://angel.co/drew-curtis" data-fancybox-group="gallery" title="Drew Curtis">
                            <img src="_include/img/portfolio/thumb/Drew Curtis.jpg" />
                            <div class="overlay"></div>
                            <i class="font-icon-plus"></i>
                        </a>
                    </li>
                    
                    <li class="item-project span3 digital">
                        <h5>
                            <a target="_blank" href="https://angel.co/elizabeth-rounsavall">Elizabeth Rounsavall</a>
                            <span class="arrow-port"></span>
                        </h5>
                        
                        <a target="_blank" class="hover-wrap fancybox" href="https://angel.co/elizabeth-rounsavall" data-fancybox-group="gallery" title="Elizabeth Rounsavall">
                            <img src="_include/img/portfolio/thumb/Elizabeth Rounsavall.jpg"/>
                            <div class="overlay"></div>
                            <i class="font-icon-plus"></i>
                        </a>
                    </li>
                    
                    <li class="item-project span3 design">
                        <h5>
                            <a href="single-project.html">Trick or Treat</a>
                            <span class="arrow-port"></span>
                        </h5>
                        
                        <a class="hover-wrap fancybox" href="_include/img/portfolio/full/14.jpg" data-fancybox-group="gallery" title="Trick or Treat">
                            <img src="_include/img/portfolio/thumb/14.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit." />
                            <div class="overlay"></div>
                            <i class="font-icon-plus"></i>
                        </a>
                    </li>
                    
                    <li class="item-project span3 design">
                        <h5>
                            <a href="single-project.html">LoveMonster</a>
                            <span class="arrow-port"></span>
                        </h5>
                        
                        <a class="hover-wrap fancybox" href="_include/img/portfolio/full/15.jpg" data-fancybox-group="gallery" title="LoveMonster">
                            <img src="_include/img/portfolio/thumb/15.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit." />
                            <div class="overlay"></div>
                            <i class="font-icon-plus"></i>
                        </a>
                    </li>
                    
                    <li class="item-project span3 icon">
                        <h5>
                            <a href="single-project.html">Bacon</a>
                            <span class="arrow-port"></span>
                        </h5>
                        
                        <a class="hover-wrap fancybox" href="_include/img/portfolio/full/04.jpg" data-fancybox-group="gallery" title="Bacon">
                            <img src="_include/img/portfolio/thumb/04.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit." />
                            <div class="overlay"></div>
                            <i class="font-icon-plus"></i>
                        </a>
                    </li>
                    
                    <li class="item-project span3 digital video">
                        <h5>
                            <a href="single-project.html">Shift</a>
                            <span class="arrow-port"></span>
                        </h5>
                        
                        <a class="hover-wrap fancybox-media" href="http://vimeo.com/29943426" data-fancybox-group="video" title="Shift">
                            <img src="_include/img/portfolio/thumb/07.jpg" alt="Shift" />
                            <div class="overlay"></div>
                            <i class="font-icon-plus"></i>
                        </a>
                    </li>
                    
                    <li class="item-project span3 design icon">
                        <h5>
                            <a href="single-project.html">Game Icon</a>
                            <span class="arrow-port"></span>
                        </h5>
                        
                        <a class="hover-wrap fancybox" href="_include/img/portfolio/full/02.jpg" data-fancybox-group="gallery" title="Game Icon">
                            <img src="_include/img/portfolio/thumb/02.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit." />
                            <div class="overlay"></div>
                            <i class="font-icon-plus"></i>
                        </a>
                    </li>
                    
                    <li class="item-project span3 video">
                        <h5>
                            <a href="single-project.html">Frame of Mind</a>
                            <span class="arrow-port"></span>
                        </h5>
                        
                        <a class="hover-wrap fancybox-media" href="http://vimeo.com/38940289" data-fancybox-group="video" title="Frame of Mind">
                            <img src="_include/img/portfolio/thumb/08.jpg" alt="Frame of Mind" />
                            <div class="overlay"></div>
                            <i class="font-icon-plus"></i>
                        </a>
                    </li>
                    
                    <li class="item-project span3 design">
                        <h5>
                            <a href="single-project.html">Brisk</a>
                            <span class="arrow-port"></span>
                        </h5>
                        
                        <a class="hover-wrap fancybox" href="_include/img/portfolio/full/16.jpg" data-fancybox-group="gallery" title="Brisk">
                            <img src="_include/img/portfolio/thumb/16.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit." />
                            <div class="overlay"></div>
                            <i class="font-icon-plus"></i>
                        </a>
                    </li>-->
                    
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
<section id="footer-credits">
	<div class="container">
    	<div class="row">
        	<div class="span12">
            	<p class="credits">&copy; 2013 Anubis. All rights reserved. Template by <a href="#">Alessio Atzeni</a>.</p>
            </div>
        </div>
    </div>
</section>
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