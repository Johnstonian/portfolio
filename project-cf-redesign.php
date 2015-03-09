<?php require_once ('includes/header.php'); ?>

	<header role="banner" class="header">

			<div class="logo-header-right">
				<img src="images/logo_name.png" />
			</div>

			<nav class="main-nav-left" role="navigation">
				<ul class="nav">
					<li><a href="/#cf-redesign-project"><i class="fa fa-long-arrow-left"></i> Back</a></li>
				</ul>
				
			</nav>

	</header>
	
	<section class="section">
		<div class="container">
			<h1 class="project-title">COUNTRY Financial Redesign</h1>

			<img src="images/screenshots/cf-redesign/cf-redesign-big.jpg" alt="COUNTRY Financial screenshot" />

			<h2 class="title">Introduction</h2>
			<p>Due to workload and manpower, an outside firm was contracted to redesign countryfinancial.com. The result of the contract was a project that was built with a desktop-to-mobile approach. Our internal team decided we wanted to take our development a step further and refactor the CSS and HTML to reap the many benefits of a mobile-first, responsive design approach. We also wanted to create a living styleguide so that we could continue to showcase brand changes internally and to vendors that we will partner with in the future.</p>

			<h2 class="title">A New Approach</h2>
			<p>The original redesign, which was built with a desktop-to-mobile perspective (commonly known as the <a  href="http://bradfrost.com/blog/web/how-much-does-a-responsive-web-design-cost/" target="responsive-web-design-cost">shoehorn approach</a>) didn’t sit well with our developer and designer team. We decided to rebuild the entire css from the ground up with progressive enhancement in mind. During that process we reworked the grid system and navigational items. Paired down a lot of classes that weren’t needed and reduced the CSS footprint from 7,000 lines to 1,500. We also developed base components that we could stack upon and extend as needed. We also decided to use Sass to help with the architecture change by separating the CSS into smaller files that were easier to manage. We then used Grunt to process, lint, and minify our CSS and JavaScript.</p> 

			<h2 class="title">Developing A Styleguide</h2>
			<p>During the “redesign 2.0”, we wanted to create and maintain a styleguide. The styleguide needed to be minimal and not overly fancy, while showcasing the components we built. We also wanted the CSS and HTML to be visible for each component so that developers could see the underlying structure and easily copy/paste components into their working prototypes. We didn’t have the luxury of running the many popular ruby or node based styleguide generators. But we did have access to PHP, so we chose the excellent and minimal <a href="https://github.com/bjankord/Style-Guide-Boilerplate" target="styleguide-bolierplate">Styleguide Boilerplate</a> by <a href="http://brettjankord.com/" target="brett-jankord">Brett Jankord</a>.</p>

			<p>This styleguide allowed us to not worry about the look and feel of the styleguide because that structure was already in place. We could leave those bits in the background and focus on importing our HTML snippets into the styleguide architecture. Marketing and Branding divisions are now using the styleguide we created as a living document that they can use while developing campaigns and continue with the company’s branding initiative. The styleguide also forced us to develop a language for our components which has been an invaluable and unforeseen outcome of the project.</p>

			<h2 class="title">Conclusion</h2>
			<p>There is still a lot of work to be done to optimize the site, but our team has set a solid foundation that is modular and easily extendable as we move forward. The styleguide helps us keep tabs on what we’ve already built and allows us to quickly build prototypes for development and testing of new components and templates. Using grunt allows us to quickly spin up local environments to develop those prototypes.</p>

			<p class="more"><a href="//countryfinancial.com" title="COUNTRY Financial.com" target="country financial">COUNTRY&reg; Financial<i class="fa fa-long-arrow-right"></i></a></p>

		</div>
	</section>
	

<?php require_once('includes/footer.php'); ?>