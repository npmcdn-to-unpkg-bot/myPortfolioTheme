<?php
/**
 * The template for displaying the header
 *
 *
 * @link https://cms.dp.ua
 *
 * @package WordPress
 * @subpackage ZelentsovPortfolio
 * @since ZelentsovPortfolio 1.0
 */

header("Cache-Control: no-store");

?>
<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
	<meta charset="UTF-8">
	<title>Portfolio - ZelentsovSV</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Le styles -->
	<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>

	<link rel="apple-touch-icon" sizes="57x57" href="wp-content/themes/zelentsov-portfolio/faveicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="wp-content/themes/zelentsov-portfolio/faveicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="wp-content/themes/zelentsov-portfolio/faveicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="wp-content/themes/zelentsov-portfolio/faveicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="wp-content/themes/zelentsov-portfolio/faveicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="wp-content/themes/zelentsov-portfolio/faveicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="wp-content/themes/zelentsov-portfolio/faveicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="wp-content/themes/zelentsov-portfolio/faveicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="wp-content/themes/zelentsov-portfolio/faveicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="wp-content/themes/zelentsov-portfolio/faveicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="wp-content/themes/zelentsov-portfolio/faveicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="wp-content/themes/zelentsov-portfolio/faveicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="wp-content/themes/zelentsov-portfolio/faveicon/favicon-16x16.png">
	<link rel="manifest" href="wp-content/themes/zelentsov-portfolio/faveicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="wp-content/themes/zelentsov-portfolio/faveicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
</head>
<body data-spy="scroll">
	<div id="page-preloader"><span class="spinner"></span></div>
	<!-- start menu -->
	<header>
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		  	<div class="container">
		    	<div class="navbar-header">
		      		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
		          	</button>
		      	<a class="navbar-brand" href="#"><span class="glyphicon glyphicon-ok-sign"></span> CMS.dp.ua<p>web developer portfolio</p></a>
		    	</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="#home"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						<li><a href="#about"><span class="glyphicon glyphicon-user"></span> About</a></li>
						<li><a href="#portfolio"><span class="glyphicon glyphicon-list-alt"></span> Portfolio</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-phone"></span> Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>


