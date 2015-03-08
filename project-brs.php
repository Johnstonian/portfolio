<?php 
	header('X-UA-Compatible: IE=edge,chrome=1');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

  <title>Ryan Johnston - Web Developer</title>

  <meta name="description" content="Personal portfolio website for Ryan Johnston (aka Johnstonian)">
  <meta name="author" content="Ryan Johnston">
  <meta name="keywords" content="portfolio, web development, cv, resume">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png" />

  <link type="text/plain" rel="author" href="humans.txt" />

  <link href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!--[if lt IE 9]>
		<script type="text/javascript" src="js/iehacks/html5shiv.min.js"></script>
		<script type="text/javascript" src="js/iehacks/respond.min.js"></script>
	<![endif]-->

</head>
<body>

	<header role="banner" class="header">

			<div class="logo-header-right">
				<img src="images/logo_name.png" />
			</div>

			<nav class="main-nav-left" role="navigation">
				<ul class="nav">
					<li><a href="index.php#brs-project"><i class="fa fa-long-arrow-left"></i> Back</a></li>
				</ul>
				
			</nav>

	</header>
	
	<section class="section">
		<div class="container">
			<h1 class="project-title">Business Retrement Solutions</h1>

			<img src="images/screenshots/brs/brs-big.jpg" alt="BRS screenshot" />

			<h2 class="title">Introduction</h2>
			<p>There were many coding, design, and usability issues to work through on this project. It was the team's first foray into mobile-first, responsive web design. The team had been reading about mobile-first and responsive web design for a few years, but we had not been able to try out what we had learned on an actual project until recently.</p>

			<p>On this project I will be focusing on the problems we solved with the site's navigation. We had to figure out a way to make sure that all sections of the site could be accessed regardless of the user's screen size. But how do we do that when we have main navigation, secondary navigation, AND breadcrumbs?</p>

			<h2 class="title">Mobile Solution</h2>
			<p>On the smallest screen sizes (read mobile) there simply isn't room for secondary navigation and breadcrumbs, so we opted to only show the main navigation. However, we didn't want to take up valuable screen space with navigation. We wanted the user to focus on the content, so we coded and designed a "hamburger" menu icon that would show the main navigational links when the icon was tapped or clicked.</p> 

			<figure class="figure">
				<img src="images/screenshots/brs/brs-hamburger.jpg" alt="BRS hamburger icon" />
				<figcaption>Image is 2x bigger than normal</figcaption>
			</figure>

			<p>Once the icon was clicked, the user is taken to the bottom of the site where they can view a list of the main navigation. If they click on a corresponding down arrow, they can see secondary navigation and also tertiary navigational items; as well as jump back to the top of the site.</p>

			<figure class="figure">
				<img src="images/screenshots/brs/brs-mobile-nav.jpg" alt="BRS mobile navigation" />
				<figcaption>Mobile view shows primary, secondary, and teritary navigation</figcaption>
			</figure>

			<h2 class="title">Tablet and Beyond</h2>
			<p>Once the display is wide enough, we replace the hamburger icon and mobile navigation with a horizontal list of navigational items in the header.</p>

			<figure class="figure">
				<img src="images/screenshots/brs/brs-tablet-nav.jpg" alt="BRS tablet navigation" />
				<figcaption>Tablet navigation</figcaption>
			</figure>

			<p>If you are on a desktop, or any device that allows for a hover action, you will be able to see secondary and tertiary navigation in a drop down menu. If you aren't using a device that allows for hover actions (read table and mobile devices), you can still click on the main navigational items or choose an option from the secondary navigation that is now visible as a left column.</p>


			<figure class="figure">
				<img src="images/screenshots/brs/brs-tablet-nav-secondary.jpg" alt="BRS tablet secondary navigation" />
				<figcaption>Tablet navigation, showing secondary pages</figcaption>
			</figure>

			<figure class="figure">
				<img src="images/screenshots/brs/brs-left-nav.jpg" alt="BRS left navigation" />
				<figcaption>Left-hand secondary navigation</figcaption>
			</figure>

			<p>As the screen size increases, we show breadcrumbs to help the user quickly identify where they are on the site. As the screen size allows, all the navigation gets more spacing and eventually there is enough room to display the main nav in bigger text and in the header banner.</p>

			<figure class="figure">
				<img src="images/screenshots/brs/brs-desktop-nav.jpg" alt="BRS desktop navigation" />
				<figcaption>Desktop navigation in header</figcaption>
			</figure>

			<h2 class="title">Future Proof</h2>
			<p>At the beginning stages of development we started with three general breakpoints for handling of desktop, tablet, mobile sizes. We also designed the site to be future proof by adding in multiple viewport rules that are guided by the design and not the screen size. Crafting the site in this way ensures that the site's content is accessible to everyone, regardless of screen size or device. Please check out the website to see how the breakpoints are guided by the design and not necessarily screen size. This is the case not only for navigational items, but for columns, images, spacing, and font sizes.</p>

			<p class="more"><a href="//countryretirementplans.com" title="COUNTRY Financial Retirement Plans.com" target="brs">COUNTRY&reg; Financial Retirement Plans <i class="fa fa-long-arrow-right"></i></a></p>

		</div>
	</section>
	

	<footer class="footer">
		<div class="copyright">
			<p class="footer-copy">&copy; <?php echo date("Y"); ?> Ryan Johnston. <a href="humans.txt">humans.txt</a></p>
		</div>
		
		<div class="social-links">
			<a href="//github.com/Johnstonian" alt="GitHub profile" target="github">
				<i class="fa fa-2x fa-github right"></i>
			</a>
			<a href="//twitter.com/johnstonian" alt="twitter profile" target="twitter">
				<i class="fa fa-2x fa-twitter right"></i>
			</a>
			<a href="//linkedin.com/pub/ryan-johnston/8/103/5bb" alt="LinkedIn profile" target="linkedin">
				<i class="fa fa-2x fa-linkedin right"></i>
			</a>
		</div>
</body>
<script src="js/main.min.js"></script>
<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="css/ie-styles.css">
	<script type="text/javascript" src="js/iehacks/validate/jquery.validate.js"></script>
<![endif]-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-621676-2', 'johnstonianera.com');
  ga('send', 'pageview');

</script>

</html>