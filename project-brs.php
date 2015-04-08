<?php require_once ('partials/header-partial.php'); ?>

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
	

<?php require_once('partials/footer-partial.php'); ?>