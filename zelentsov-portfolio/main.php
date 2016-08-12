<?php
/**
 * The template for displaying the main
 *
 *
 * @link https://cms.dp.ua
 *
 * @package WordPress
 * @subpackage ZelentsovPortfolio
 * @since ZelentsovPortfolio 1.0
 */
?>

<div class="container-fluid" id="home">
	<div class="row">
		<section class="col-lg-12 hello col-sm-12 col-xs-12">
			<div class="row">
				<aside class="col-lg-6 imgCont col-sm-12 col-xs-12"></aside>
				<aside class="col-lg-4 textCont col-sm-12 col-xs-12">
					<h1>Welcome!</h1>
					<p>My name is <span><span>Ser</span>g<span>e</span>y</span>,</p>
					<p>I am a beginner web developer.</p>
				</aside>
			</div>
		</section>
	</div>
</div>
<div class="container-fluid" id="about">
	<div class="row">
		<section class="col-lg-12 about col-sm-12 col-xs-12">
			<div class="row">
				<article class="col-lg-12 col-sm-12 col-xs-12" ng-controller="myCtrl">
					<h1>About me</h1>
					<div class="row">
						<img src="../wp-content/themes/zelentsov-portfolio/img/i.jpg" alt="Zelentsov Sergey" class="col-lg-3 col-sm-12 col-xs-12 col-lg-offset-3">
						<div class="col-lg-4">
							<ul>
								<li>Full name: <span>Zelentsov Sergey</span>;</li>
								<li>From: <span>Ukraine, Dnipro</span>;</li>
								<li>Education: <span>a specialist in Economic Cybernetics at National Mining University in 2014 with distinction</span>;</li>
								<li>Download resume: <a download="Resume" href="../wp-content/themes/zelentsov-portfolio/resume/resume">Click me!</a>;</li>
							</ul>
						</div>
						<main class="col-lg-7 col-lg-offset-3 col-sm-12 col-xs-12">
							<ul>
								<li>HTML / CSS
								<div class="progress progress-striped active">
									<div class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
								  	</div>
								</div>
								</li>
								<li>javaScript / jQuery / Ajax
								<div class="progress progress-striped active">
									<div class="progress-bar pprogress-bar-info"  role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
								  	</div>
								</div>
								</li>
								<li>Photoshop / GIMP
								<div class="progress progress-striped active">
									<div class="progress-bar progress-bar-warning"  role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
								  	</div>
								</div>
								</li>
							</ul>
							<div class="row skills">
								<div class="col-lg-8">
									<ul>
										<li><span>CMS:</span> WordPress;</li>
										<li><span>Frameworks:</span> Twitter bootstrap, AngularJS;</li>
										<li><span>Database management system:</span> MySQL;</li>
										<li><span>Version control:</span> SmartGit;</li>
										<li><span>Preprocessors:</span> SASS;</li>
										<li><span>OS:</span> Ubuntu 15.04, Linux mint 18;</li>
									</ul>
								</div>
							</div>
						</main>
						<div class="col-lg-7 col-lg-offset-3" id="myAch">
							<img src="../wp-content/themes/zelentsov-portfolio/img/htmlcss.png" data-ng-click="fullImage($event)">
							<img src="../wp-content/themes/zelentsov-portfolio/img/Certificate-page-001-1.jpg" data-ng-click="fullImage($event)">
							<img src="../wp-content/themes/zelentsov-portfolio/img/javascript1.jpg" data-ng-click="fullImage($event)">
						</div>
					</div>
				</article>
			</div>
		</section>
	</div>
</div>
<div class="container-fluid" id="portfolio">
	<div class="row">
		<section class="col-lg-12 portfolio">
			<article class="col-lg-12">

			</article>
		</section>
	</div>
</div>