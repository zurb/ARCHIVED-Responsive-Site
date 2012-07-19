<?
  $version = "3.0";
?>
<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- For third-generation iPad with high-resolution Retina display: -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/favicons/apple-touch-icon-144x144-precomposed.png">
  <!-- For iPhone with high-resolution Retina display: -->
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/favicons/apple-touch-icon-114x114-precomposed.png">
  <!-- For first- and second-generation iPad: -->
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/favicons/apple-touch-icon-72x72-precomposed.png">
  <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
  <link rel="apple-touch-icon-precomposed" href="images/favicons/apple-touch-icon-precomposed.png">
  <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->

  <link rel="icon" href="images/favicons/favicon.ico" type="image/x-icon" />

  <meta name="keywords" content="foundation, design, frameworks, framework, css framework, html framework, html5, css3, SASS, SCSS, compass, responsive, design" />
  <meta name="description" content="Foundation by ZURB is the most advanced responsive front-end framework in the world." />
  <meta name="author" content="ZURB, inc. ZURB network also includes zurb.com" />
  <meta name="copyright" content="ZURB, inc. Copyright (c) 2012" />

	<title>Responsive Design</title>

	<!-- Included CSS Files -->
  <link rel="stylesheet" href="http://www.zurb.com/assets/foundation.top-bar.css">
  <link rel="stylesheet" href="http://www.zurb.com/assets/zurb.mega-drop.css">
	<link rel="stylesheet" href="stylesheets/foundation-style/globals.css">
	<link rel="stylesheet" href="stylesheets/foundation-style/typography.css">
	<link rel="stylesheet" href="stylesheets/foundation-style/grid.css">
	<link rel="stylesheet" href="stylesheets/foundation-style/ui.css">
	<link rel="stylesheet" href="stylesheets/foundation-style/buttons.css">
	<link rel="stylesheet" href="stylesheets/foundation-style/tabs.css">
	<link rel="stylesheet" href="stylesheets/foundation-style/navbar.css">
	<link rel="stylesheet" href="stylesheets/foundation-style/forms.css">
	<link rel="stylesheet" href="stylesheets/foundation-style/orbit.css">
	<link rel="stylesheet" href="stylesheets/foundation-style/reveal.css">
	<link rel="stylesheet" href="stylesheets/app.css">


	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body>


  <!-- ZURBar -->
  <div class="container top-bar home-border">
    <div class="attached">
      <div class="name" onclick="void(0);">
        <span><a href="http://zurb.com">ZURB</a> <a href="#" class="toggle-nav"></a></span>
  		</div>

  		<ul class="right">
  			<li>
  			  <a href="index.php" <?php if (isset($featuresTab)) echo 'class="current"'; ?>>Home</a>
  			</li>
  			<li>
  			  <a href="articles.php" <?php if (isset($caseStudiesTab)) echo 'class="current"'; ?>>Articles</a>
  			</li>
  			<li>
  			  <a href="tools.php">Tools and Tips</a>
  			</li>
  		 <!-- <li>
  		    <a href="http://github.com/zurb/foundation">GitHub</a>
  			</li> -->
  			<li class="download"><a class="small blue nice button src-download" href="download.php">Download Foundation</a></li>
  		</ul>
  	</div>
  </div>

  <!-- INSERT MEGA DROP DOWN HERE -->
  <?php
  $megadropfile = 'cache/navigation_bar.html';

  if (file_exists($megadropfile)) {
      include $megadropfile;
  }
  ?>

  <!-- /ZURBar -->
