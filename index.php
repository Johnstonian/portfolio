<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <title>Ryan Johnston - Web Developer</title>

  <meta name="description" content="Personal portfolio website for Ryan Johnston (aka Johnstonian)">
  <meta name="author" content="Ryan Johnston">
  <meta name="keywords" content="portfolio, web development, cv, resume">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link type="text/plain" rel="author" href="humans.txt" />

  <link href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!--[if lt IE 9]>
		<script src="js/html5shiv.min.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]-->

</head>
<body>

	<header role="banner" class="header">

			<div class="logo-header">
				<a href="#intro-section"><img src="images/logo_name.png" /></a>
			</div>

			<nav class="nav-collapse main-nav" role="navigation">
				<ul class="nav">
					<li class="nav-articles"><a href="#article-section">Articles</a></li>
					<li class="nav-about"><a href="#about-section">About</a></li>
					<li class="nav-work"><a href="#project-section" class="nav-active">Recent Work</a></li>
					<li class="nav-contact"><a href="#contact-section">Contact</a></li>
					<li class="nav-testimonials"><a href="#testimonial-section">Testimonials</a></li>
				</ul>
				
			</nav>

	</header>

	<section class="section  intro" id="intro-section">
		
		<div class="logo-holder">
			<a class="startBtn">
				<div class="ryan">
					<img src="images/logo.png" class="logo" alt="Ryan Johnston - Web Developer" />
				</div>
			</a>
			
			<a class="startBtn"><div class="ship-and-lasers"></div></a>

			<p class="start"><a class="alternate startBtn" href="#article-section">Start</a></p>
		</div>
		
		
		<div class="stars">
			<img src="images/stars.png" class="starImg" alt="" />
		</div>
	</section>
	
	<section class="section  articles" id="article-section">
		<div class="container">
			<h2 class="section-title">Articles</h2>

			<div class="section-border">
				<i class="icon-wrapper  fa  fa-pencil fa-2x"></i>
			</div>

		<div class="grid">
			<div class="column-article">

				<h3><a href="//johnstonianera.com/responsive-two-column-layout/">Building a Responsive Two Column Layout</a></h3>
				<div class="date-container">
					<p class="date">December 5, 2013</p>
				</div>
				<p>This tutorial will explain how to create a two column layout with one fixed column and one fluid column. The example is basic, but it can be expanded to have multiple columns, even fluid nested columns. We will start with a mobile first view that consists of the columns stacked on top of each other. We will later add media queries to make the columns sit side by side as screen size allows.</p>

				<p class="more"><a href="//johnstonianera.com/responsive-two-column-layout/">Keep Reading <i class="fa fa-long-arrow-right"></i></a></p>
			</div>

			<div class="column-article">

				<h3><a href="//johnstonianera.com/media-query-management/">Media Query Management</a></h3>
				<div class="date-container">
					<p class="date">November 27, 2013</p>
				</div>
				
				<p>Responsive web design is arguably the de facto standard in web design today. One of the major principles of RWD is implementing media queries into designs to make them more flexible and more adaptive to the media that renders them. There are many wonderful examples on the web that showcase the power of media queries and how they can facilitate more adaptive designs. The examples are often only a few lines of code. This is great for learning, but those examples do not scale well in a real world project. It’s not always obvious how to organize and maintain your style sheet that includes lots of media quries. Especially if you are relatively new to the field.</p>

				<p class="more"><a href="//johnstonianera.com/media-query-management/">Keep Reading <i class="fa  fa-long-arrow-right"></i></a></p>
			</div>

			<div class="column-article">

				<h3><a href="//johnstonianera.com/media-query-snippet-for-sublime-text/">Media Query Snippet for Sublime Text</a></h3>
				<div class="date-container">
					<p class="date">August 23, 2013</p>
				</div>
				<p>Declaring CSS Media Query rules has become standard practice during my recent responsive design projects. But declaring those rules has stunted my coding flow because I can never remember the correct syntax for a media query.</p>

				<p class="more"><a href="//johnstonianera.com/media-query-snippet-for-sublime-text/">Keep Reading <i class="fa  fa-long-arrow-right"></i></a></p>
			</div>

			<div class="column-article">

				<h3><a href="//johnstonianera.com/prepros/">Prepros: Preprocessing Made Easy</a></h3>
				<div class="date-container">
					<p class="date">August 14, 2013</p>
				</div>
				<p>Prepros makes it super simple to setup your project with the preprocessing juice it needs. It can do all the heavy lifting for you to preprocess javascript, css, and even images. It compiles LESS, Sass, Stylus, Jade, Slim, Coffeescript, LiveScript, Haml and Markdown. It also handles JS Concatenation. And it does this on the fly while developing in real time.</p>

				<p class="more"><a href="//johnstonianera.com/prepros/">Keep Reading <i class="fa  fa-long-arrow-right"></i></a></p>
			</div>

		</div>

		<a href="//johnstonianera.com">
			<div class="view-all-circle">
				<p class="view-all">View All</p>
			</div>	
		</a>

		</div>
	</section>
	
	<section class="section  about" id="about-section">
		<div class="container">
			<h2 class="section-title">About</h2>

			<div class="section-border">
				<i class="icon-wrapper  fa  fa-gamepad fa-2x"></i>
			</div>

			<p class="center"><strong>I build websites.</strong></p>

			<div class="grid">
				<div class="column-about">
					<p class="about-copy">I'm a full stack developer who loves the web. I'm passionate about semantic and standards based development. Efficient code, intuitive user experiences, and pushing CSS3 standards really knock my socks off. <!-- I'm excited about the future of the web and strive to make it a better experience every day. --></p>

					<p class="about-copy">Like many, I started with web development in the world of Geocities and Angelfire. My latest work has expanded into the modern web landscape of responsive design and mobile first methodologies.</p>
				</div>

				<div class="column-about">
					<p class="about-copy">In addition to my passion for the web, I also enjoy reading fiction, training for adventure runs, listening to music, playing soccer, and doing my best to keep the 80’s alive through my son and daughter by forcing pop culture references of the era upon them.</p>

					<p class="about-copy">I currently work at COUNTRY Financial where I develop dynamic applications for the web using PHP, MySQL, JavaScript, CSS3, and HTML5.</p>
				</div>
			</div>

			<div class="freelance">
				<p class="freelance-copy">Need help with a project? <br />
					<a class="medium  light-link" href="#contact-section">Send me a message</a> and I'll be glad to help!</a>
			</div>
		</div>

		<div class="ground-blue"></div>
		</div> 
	</section>

	<section class="section  skillset" id="skills">
		<div class="container">
			<div class="grid  center">
				<div class="pill">
					<div class="skill-wrapper">
					<div class="bolt-holder">
						<i class="bolt  white  fa  fa-bolt"></i>
					</div>
					<p>Skills</p>
					</div>
				</div>
				<div class="pill">
					<div class="skill-wrapper">
					<div class="check-holder">
						<i class="check  orange  fa  fa-check"></i>
					</div>
					<p>html</p>
					</div>
				</div>
				<div class="pill">
					<div class="skill-wrapper">
					<div class="check-holder">
						<i class="check  fa  fa-check"></i>
					</div>
					<p>css</p>
					</div>
				</div>
				<div class="pill">
					<div class="skill-wrapper">
					<div class="check-holder">
						<i class="check  fa  fa-check"></i>
					</div>
					<p>sass</p>
					</div>
				</div>
				<div class="pill">
					<div class="skill-wrapper">
					<div class="check-holder">
						<i class="check  fa  fa-check"></i>
					</div>
					<p>javascript</p>
					</div>
				</div>
				<div class="pill">
					<div class="skill-wrapper">
					<div class="check-holder">
						<i class="check  fa  fa-check"></i>
					</div>
					<p>php</p>
					</div>
				</div>
				<div class="pill">
					<div class="skill-wrapper">
					<div class="check-holder">
						<i class="check  fa  fa-check"></i>
					</div>
					<p>mysql</p>
					</div>
				</div>
				<div class="pill">
					<div class="skill-wrapper">
						<div class="check-holder">
							<i class="check  fa  fa-check"></i>
						</div>
						<p>wordpress</p>
					</div>
				</div>
				<div class="pill">
					<div class="skill-wrapper">
					<div class="check-holder">
						<i class="check  fa  fa-check"></i>
					</div>
					<p>git</p>
					</div>
				</div>
				<div class="pill">
					<div class="skill-wrapper">
					<div class="check-holder">
						<i class="check  fa  fa-check"></i>
					</div>
					<p>svn</p>
					</div>
				</div>
				<div class="pill">
					<div class="skill-wrapper">
					<div class="check-holder">
						<i class="check  fa  fa-check"></i>
					</div>
					<p>coldfusion</p>
					</div>
				</div>
				<div class="pill">
					<div class="skill-wrapper">
					<div class="check-holder">
						<i class="check  fa  fa-check"></i>
					</div>
					<p>jquery</p>
					</div>
				</div>
				<div class="pill">
					<div class="skill-wrapper">
					<div class="check-holder">
						<i class="check  fa  fa-check"></i>
					</div>
					<p>xslt</p>
					</div>
				</div>
				<div class="pill">
					<div class="skill-wrapper">
					<div class="check-holder">
						<i class="check  fa  fa-check"></i>
					</div>
					<p>xml</p>
					</div>
				</div>
				<div class="pill">
					<div class="skill-wrapper">
					<div class="check-holder">
						<i class="check  fa  fa-check"></i>
					</div>
					<p>db2</p>
					</div>
				</div>
				<div class="pill">
					<div class="skill-wrapper">
					<div class="check-holder">
						<i class="check  fa  fa-check"></i>
					</div>
					<p>iis</p>
					</div>
				</div>
				<div class="pill">
					<div class="skill-wrapper">
					<div class="check-holder">
						<i class="check  fa  fa-check"></i>
					</div>
					<p>apache</p>
					</div>
				</div>
				<div class="pill">
					<div class="skill-wrapper">
					<div class="check-holder">
						<i class="check  fa  fa-check"></i>
					</div>
					<p>linux</p>
					</div>
				</div>
				<div class="pill">
					<div class="skill-wrapper">
					<div class="check-holder">
						<i class="check  fa  fa-check"></i>
					</div>
					<p>java</p>
					</div>
				</div>
				<div class="pill">
					<div class="skill-wrapper">
					<div class="check-holder">
						<i class="check  fa  fa-check"></i>
					</div>
					<p>postgresql</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section  hobbies">
		<div class="container">
		<h2 class="section-title  white">In my free time, I enjoy...</h2>

			<div class="grid">
				<div class="column-hobby">
					<div class="hobby-icon">
						<svg version="1.1" id="music-note" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="92" viewBox="0 0 74.055 95.7" style="enable-background:new 0 0 74.055 95.7;" xml:space="preserve">
							<path class="hobby-logo" d="M20.55,11.5l0.003,59.334c-3.231-0.673-6.99-0.42-10.718,0.963C1.448,74.913-1.511,82.493,0.713,88.723
								c2.224,6.235,8.784,8.758,17.171,5.643c7.123-2.646,11.784-8.51,11.669-14.035c0,0,0-31.465,0-49.013l35.5-8.136v37.653
								c-3.231-0.673-6.99-0.42-10.718,0.963c-8.387,3.115-11.346,10.696-9.122,16.926c2.224,6.235,8.784,8.758,17.171,5.643
								c7.123-2.646,11.784-8.51,11.669-14.035V0L20.55,11.5z"/>
						</svg>
					</div>
					<div class="hobby-content">
						<h4>Music</h4>
						<p>Enjoy listening and playing music. I play guitar and bass, as well as the saxophone.</p>
					</div>
				</div>

				<div class="column-hobby">
					<div class="hobby-icon">
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100px" height="100px" viewBox="0 0 26 26" enable-background="new 0 0 26 26" xml:space="preserve">
							<g>
								<path class="hobby-logo" fill-rule="evenodd" clip-rule="evenodd" d="M20.876,9.221c-0.242-0.289-0.673-0.327-0.962-0.086l-1.894,1.591l-0.871-2.158
									c-0.031-0.081-0.078-0.149-0.132-0.209c-0.178-0.396-0.487-0.736-0.913-0.933c-0.185-0.084-0.376-0.129-0.567-0.151
									c-0.042-0.022-0.08-0.051-0.128-0.066L12.076,6.28c-0.187-0.051-0.375-0.018-0.529,0.072c-0.183,0.062-0.34,0.195-0.415,0.388
									L9.877,9.967c-0.136,0.351,0.038,0.747,0.39,0.885c0.35,0.136,0.747-0.039,0.884-0.391l1.06-2.725l1.518,0.422
									c-0.037,0.06-0.077,0.116-0.107,0.18l-1.946,4.218c-0.028,0.062-0.043,0.125-0.063,0.189l-2.365,3.965L5.29,18.034
									C4.842,18.369,4.747,19,5.078,19.448c0.333,0.449,0.966,0.544,1.413,0.213l4.05-1.395c0.124-0.09,0.214-0.208,0.282-0.335
									c0.051-0.054,0.109-0.097,0.148-0.164l1.41-2.364l2.503,2.133l-2.678,3.018c-0.369,0.416-0.332,1.057,0.086,1.425
									c0.417,0.371,1.056,0.332,1.427-0.086l3.342-3.765c0.104-0.116,0.166-0.25,0.208-0.39c0.025-0.076,0.025-0.155,0.031-0.234
									c0-0.04,0.015-0.076,0.012-0.113c-0.009-0.276-0.121-0.544-0.347-0.735l-2.303-1.964c0.166-0.158,0.307-0.346,0.409-0.567
									l1.492-3.231l0.478,1.273c0.02,0.113,0.058,0.224,0.138,0.317c0.072,0.086,0.164,0.143,0.262,0.183
									c0.01,0.005,0.022,0.006,0.034,0.009c0.062,0.022,0.125,0.043,0.19,0.046c0.077,0.007,0.155-0.003,0.234-0.025
									c0.002-0.001,0.003-0.001,0.003-0.001c0.021-0.005,0.042-0.001,0.063-0.01c0.111-0.042,0.196-0.113,0.269-0.196l2.718-2.307
									C21.241,9.94,21.119,9.51,20.876,9.221z"/>
								<circle class="hobby-logo" fill-rule="evenodd" clip-rule="evenodd" cx="17.438" cy="5.672" r="1.905"/>
							</g>
						</svg>
					</div>
					<div class="hobby-content">
						<h4>Running</h4>
						<p>Training for adventure runs like <a href="//thezombierun.com" target="zombie_run">The Zombie Run</a> and <a href="//warriordash.com" target="warrior_dash">Warrior Dash</a>.</p>
					</div>
				</div>

				<div class="column-hobby">
					<div class="hobby-icon">
						<svg version="1.1" id="Layer_13" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100px" height="100px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
						<path class="hobby-logo" d="M36.384,16.463c-4.489,1.82-8.517,4.496-11.971,7.949c-3.455,3.453-6.128,7.482-7.949,11.971
							c-1.758,4.336-2.65,8.918-2.65,13.617s0.892,9.281,2.65,13.615c1.821,4.49,4.495,8.518,7.949,11.971
							c3.454,3.455,7.481,6.129,11.971,7.949c4.336,1.76,8.917,2.65,13.617,2.65c4.7,0,9.28-0.892,13.616-2.65
							c4.488-1.82,8.518-4.494,11.971-7.949c3.455-3.453,6.129-7.48,7.949-11.971c1.758-4.334,2.648-8.916,2.648-13.615
							s-0.891-9.281-2.648-13.617c-1.82-4.488-4.496-8.518-7.949-11.971s-7.48-6.129-11.971-7.949c-4.336-1.758-8.916-2.648-13.616-2.648
							C45.301,13.814,40.72,14.705,36.384,16.463z M22.858,65.234c-1.743-1.094-3.349-2.355-4.771-3.838
							c-2.172-6.113-2.54-12.729-1.101-19.01c0.677-1.335,1.447-2.617,2.318-3.845c0.269-0.379,0.518-0.774,0.806-1.142l8.166,4.832
							c0,0.064,0,0.134,0,0.205c-0.021,4.392,0.425,8.752,1.313,13.049c0.003,0.019,0.006,0.031,0.01,0.048l-6.333,9.93
							C23.128,65.393,22.991,65.318,22.858,65.234z M47.138,82.02c1.409,0.719,2.858,1.326,4.347,1.82
							c-6.325,0.275-12.713-1.207-18.36-4.447l13.689,2.439C46.919,81.9,47.026,81.963,47.138,82.02z M47.088,79.549L30.934,76.67
							c-1.89-2.295-3.59-4.723-5.051-7.318c-0.372-0.66-0.787-1.301-1.102-1.99l6.327-9.92c0.14,0.035,0.296,0.072,0.473,0.119
							c3.958,1.058,7.986,1.812,12.042,2.402c0.237,0.033,0.435,0.063,0.604,0.08l7.584,13.113c-1.316,1.85-2.647,3.691-4.007,5.51
							C47.578,78.969,47.338,79.26,47.088,79.549z M73.965,73.963c-1.287,1.287-2.652,2.447-4.08,3.482
							c-0.238-1.894-0.646-3.75-1.223-5.564l8.092-15.096c2.229-1.014,4.379-2.166,6.375-3.592c0.26-0.185,0.477-0.392,0.646-0.619
							C83.188,60.375,79.918,68.01,73.965,73.963z M73.605,54.385c0.301,0.574,0.598,1.154,0.896,1.742l-7.816,14.58
							c-0.045,0.01-0.088,0.02-0.133,0.027c-4.225,0.789-8.484,1.209-12.779,1.229l-7.8-13.487c1.214-2.254,2.417-4.517,3.61-6.781
							c0.81-1.537,1.606-3.082,2.401-4.627l16.143-1.658C70.104,48.309,71.977,51.271,73.605,54.385z M70.33,37.092
							c-0.766,2.023-1.586,4.025-2.402,6.031l-15.725,1.615c-0.189-0.248-0.383-0.492-0.588-0.725c-1.857-2.103-3.726-4.193-5.592-6.289
							c0.017-0.021,0.034-0.037,0.051-0.056c-0.753-0.752-1.508-1.504-2.261-2.258l4.378-13.181c0.302-0.08,0.606-0.147,0.913-0.18
							c2.38-0.242,4.763-0.516,7.149-0.654c1.461-0.082,2.93-0.129,4.416-0.024L71.502,33.58C71.129,34.758,70.764,35.938,70.33,37.092z
							 M73.965,26.035c2.988,2.99,5.301,6.402,6.938,10.047c-2.025-1.393-4.188-2.539-6.463-3.473c-0.354-0.146-0.717-0.275-1.086-0.402
							L62.691,20.191c0.074-0.519,0.113-1.039,0.129-1.563C66.877,20.279,70.678,22.75,73.965,26.035z M39.148,17.996
							c0.042,0.031,0.062,0.057,0.086,0.064c2.437,0.842,4.654,2.082,6.744,3.553L41.888,33.93c-0.021,0.006-0.041,0.012-0.061,0.021
							c-0.837,0.346-1.69,0.656-2.514,1.031c-3.395,1.543-6.705,3.252-9.823,5.301l-8.071-4.775c0.012-0.252,0.055-0.508,0.141-0.736
							c0.542-1.444,1.075-2.896,1.688-4.311c0.472-1.09,1.01-2.143,1.597-3.172c0.384-0.424,0.782-0.844,1.192-1.254
							c3.833-3.832,8.363-6.553,13.186-8.162C39.198,17.912,39.172,17.953,39.148,17.996z"/>
						</svg>
					</div>
					<div class="hobby-content">
						<h4>Soccer</h4>
						<p>Participating/managing recreational leagues and coaching.</p>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section class="section  projects" id="project-section">
		<div class="container">
			<h2 class="section-title">Recent Work</h2>

			<div class="section-border">
				<i class="icon-wrapper  fa  fa-code fa-2x"></i>
			</div>

			<div class="grid">

				<div class="project">
					<h3>Business Retirement Solutions</h3>
					<div class="owl-carousel" id="brs-slideshow">
						<div class="screenshot"><img src="images/screenshots/brs/brs-full.png" alt="Business Retirement Solutions Website Screenshot" /></div>
						<div class="screenshot"><img src="images/screenshots/brs/brs-tablet.png" alt="Business Retirement Solutions Website Screenshot" /></div>
						<div class="screenshot"><img src="images/screenshots/brs/brs-mobile.png" alt="Business Retirement Solutions Website Screenshot" /></div>
					</div>
		  		
		  		<p class="url">url: <a href="//countryretirementplans.com" target="_blank"><strong>countryretirementplans.com</strong></a></p>
					<p><strong>type:</strong> website, responsive</p>
					<p class="technologies"><strong>technologies:</strong> <span class="link-color">html</span>, <span class="link-color">css</span>, <span class="link-color">sass</span>, <span class="link-color">php</span>, <span class="link-color">javascript</span>, <span class="link-color">wordpress</span>, <span class="link-color">modernizr</span>, <span class="link-color">jquery</span>, <span class="link-color">polyfills</span></p>

					<p><strong>description:</strong> Lead developer on COUNTRY's first responsive web design project. I worked with designers and usability folks to develop a responsive website tailored to educating potential clients on the retirement services that COUNTRY Financial has to offer. This website was built with WordPress and responsive design methodologies.</p>

					<p class="more"><a href="#">View Project <i class="fa fa-long-arrow-right"></i></a></p>
				</div>

				<div class="project">
					<h3>Affordable Healthcare Act</h3>

					<div class="owl-carousel" id="aca-slideshow">
						<div class="screenshot"><img src="images/screenshots/aca/aca-homepage.png" alt="Affordable Healthcare Act Website Screenshot" /></div>
						<div class="screenshot"><img src="images/screenshots/aca/aca-tablet.png" alt="Business Retirement Solutions Website Screenshot" /></div>
						<div class="screenshot"><img src="images/screenshots/aca/aca-mobile.png" alt="Business Retirement Solutions Website Screenshot" /></div>

						<div class="screenshot"><img src="images/screenshots/aca/aca-interactive-full.png" alt="Business Retirement Solutions Website Screenshot" /></div>
						<div class="screenshot"><img src="images/screenshots/aca/aca-interactive-tablet.png" alt="Business Retirement Solutions Website Screenshot" /></div>
						<div class="screenshot"><img src="images/screenshots/aca/aca-interactive-mobile.png" alt="Business Retirement Solutions Website Screenshot" /></div>
					</div>

					
					
					<p class="url">urls: <a href="http://www.countryaca.com">countryaca.com</a>, <a href="http://www.countryaca.com/interactive">countryaca.com/interactive</a></p>
					<p><strong>type:</strong> responsive website, javascript interactive</p>
					<p class="technologies"><strong>technologies:</strong> <span class="link-color">html</span>, <span class="link-color">css</span>, <span class="link-color">sass</span>, <span class="link-color">php</span>, <span class="link-color">javascript</span>, <span class="link-color">jquery</span>, <span class="link-color">wordpress</span>, <span class="link-color">modernizr</span>, <span class="link-color">polyfills</span></p>
					<p><strong>description:</strong> Lead Developer on COUNTRY Financial's second responsive design web project. I also created the COUNTRY Green Road javascript interactive that helps potential clients navigate Affordable Care Act program and decide if it is the right health care option.</p>
					
					
					<p class="more"><a href="#">View Project <i class="fa fa-long-arrow-right"></i></a></p>
				</div>
				
				<div class="project">
					<h3>COUNTRY Financial.com Mobile Website</h3>

					<div class="owl-carousel" id="cf-slideshow">
						<div class="screenshot"><img src="images/screenshots/cf/cf-homepage.png" alt="Affordable Healthcare Act Website Screenshot" /></div>
						<div class="screenshot"><img src="images/screenshots/cf/cf-form.png" alt="Business Retirement Solutions Website Screenshot" /></div>
						<div class="screenshot"><img src="images/screenshots/cf/cf-agent-locator.png" alt="Business Retirement Solutions Website Screenshot" /></div>
					</div>
					
					<p class="url">url: <a href="http://www.countryfinancial.com/mobile">countryfinancial.com/mobile</a></p>
					<p><strong>type:</strong> mobile website</p>
					<p class="technologies"><strong>technologies</strong>: <span class="link-color">html</span>, <span class="link-color">css</span>, <span class="link-color">jquery</span>, <span class="link-color">java</span></p>
					
					<p><strong>description:</strong> Lead developer in converting countryfinancial.com to a mobile version. Used jQuery Mobile for the framework. It was originally a sub-domain, but now is part of the main website. The mobile version of the site will load based on browser/device detection.</p>
					
					
					<p class="more"><a href="#">View Project <i class="fa fa-long-arrow-right"></i></a></p>
				</div>

				<div class="project">
					<h3>Simply Drive</h3>
					
					<div class="owl-carousel" id="simplydrive-slideshow">
						<div class="screenshot"><img src="images/screenshots/simplydrive/simply-drive-homepage.png" alt="Business Retirement Solutions Website Screenshot" /></div>
						<div class="screenshot"><img src="images/screenshots/simplydrive/simply-drive-form.png" alt="Business Retirement Solutions Website Screenshot" /></div>
						<div class="screenshot"><img src="images/screenshots/simplydrive/simply-drive-quiz.png" alt="Business Retirement Solutions Website Screenshot" /></div>
					</div>
					
					<p class="url">url: <a href="http://simplydrive.com/mobile/">simplydrive.com/mobile/</a>, <a href="http://simplydrive.com/course/lesson6.php">lesson6.php</a></p>
					<p><strong>type:</strong> website, mobile website, flash interactive</p>
					<p class="techonologies"><strong>technologies:</strong> <span class="link-color">html</span>, <span class="link-color">css</span>, <span class="link-color">javascript</span>, <span class="link-color">flash</span></p>
					<p><strong>description:</strong> Website created to provide information to students and parents about driving discounts teens can earn by following the Simply Drive program. The website also educates teens about the dangers of driving. The website was then converted to a custom mobile website. I also developed the flash interactive game that helps teach teens the dangers of distractions while driving.</p>
					

					<p class="more"><a href="#">View Project <i class="fa fa-long-arrow-right"></i></a></p>
				</div>
				<!-- 
				<div class="project">
					<div class="screenshot-container"><img src="images/screenshots/aca-desktop.png" alt="Affordable Healthcare Act Website Screenshot" /></div>
					<h3>Reading Time Pies (work in progress)</h3>
					<p class="url">url: <a href="https://johnstonianera.com/readingpie/" target="_blank">johnstonianera.com/readingpie</a></p>
					<p><strong>type:</strong> interactive web application using oAuth with Readmill API</p>
					<p class="technologies"><strong>technologies:</strong> <span class="link-color">html</span>, <span class="link-color">css</span>, <span class="link-color">php</span>, <span class="link-color">javascript</span>, <span class="link-color">oAuth</span>, <span class="link-color">Readmill API</span>, <span class="link-color">json</span></p>

					<p><strong>description:</strong> Allows a Readmill user view their reading statistics by viewing their reading times in a pie chart. Each book is divided into a pie slice to show the percentage of total reading time for each book. The user is able to drill down into each book in their library to see more details about the reading statistics for each given book. Also displays highlights for each book the user had read. This is a work in progress.</p>

					<p class="more"><a href="#">View Project <i class="fa fa-long-arrow-right"></i></a></p>
				</div>

				<div class="project">
					<div class="screenshot-container"><img src="images/screenshots/aca-desktop.png" alt="Affordable Healthcare Act Website Screenshot" /></div>
					<h3>Spin to Win</h3>
					
					<p class="url">url: <a href="http://johnstonianera.com/projects/spin-to-win">spin-to-win</a></p>
					<p><strong>type:</strong> interactive prize game</p>
					<p class="technologies"><strong>techonologies:</strong> <span class="link-color">html</span>, <span class="link-color">css</span>, <span class="link-color">php</span>, <span class="link-color">javascript</span>, <span class="link-color">flash</span>, <span class="link-color">mysql</span>, <span class="link-color">ajax</span></p>
					<p><strong>description:</strong> A lottery game created for the Road Trips and Guitar Picks campaign. A user logged in to the microsite each day and played the game to try and win a variety of RTGP products. The game was originally develped in Flash (ActionScript 3) and later converted to an HTML5/javascript game.</p>
					
					
					<p class="more"><a href="#">View Project <i class="fa fa-long-arrow-right"></i></a></p>
				</div>

				<div class="project">
					<div class="screenshot-container"><img src="images/screenshots/brsDesktop.png" alt="Business Retirement Solutions Website Screenshot" /></div>
					<h3>Sound Check</h3>
					
					<p class="url">url: link needed here</p>
					<p><strong>type:</strong> game</p>
					<p class="technologies"><strong>technologies:</strong> <span class="link-color">html</span>, <span class="link-color">flash actionscript 3</span></p>
					<p><strong>description:</strong> memory game (like simon) with increasing levels of difficulty. Players get more points with the highest level they achieve. Built in Flash ActionScript 3</p>
					

					<p class="more"><a href="#">View Project <i class="fa fa-long-arrow-right"></i></a></p>
				</div>

				<div class="project">
					<div class="screenshot-container"><img src="images/screenshots/aca-desktop.png" alt="Affordable Healthcare Act Website Screenshot" /></div>
					<h3>Memory Lane</h3>
					
					<p class="url">url: <a href="http://www.tripsandpicks.com/memory-lane">tripsandpicks.com/memory-lane</a></p>
					<p><strong>type:</strong> game</p>
					<p class="technologies"><strong>technologies:</strong> <span class="link-color">html</span>, <span class="link-color">css</span>, <span class="link-color">javascript</span></p>
					<p><strong>description:</strong> card memory game based on time. Built in flash actionscript 3.</p>
					

					<p class="more"><a href="#">View Project <i class="fa fa-long-arrow-right"></i></a></p>
				</div> -->
			</div>
	</section>

	<section class="section  contact" id="contact-section">
		<div class="container">
			<h2 class="section-title">Let's Chat...</h2>
			<form name="contact-form" id="contactForm" method="post" action"#">
				<fieldset>
					<label name="name-label" for="fullname">Full Name</label>
					<input type="text" class="fullname" name="fullname" placeholder="Full name" required />
					<label name="email-label" for="email">Email</label>
					<input type="email" class="email" name="email" placeholder="Email" required />
					<label name="message-label" for="message">Your message...</label>
					<textarea class="message" name="message" placeholder="Your message..." cols="30" rows="5" required></textarea>
					<input type="submit" name="Send" id="sendBtn" value="Send" /> 
				</fieldset>
			</form>
		</div>
	</section>

	<section class="section  testimonials" id="testimonial-section">
		<div class="container">
			<h2 class="section-title">Testimonials</h2>

			<div class="section-border">
				<i class="icon-wrapper  fa  fa-comments fa-2x"></i>
			</div>

			<div class="grid">

				<div class="quote">
					<div class="left-quote"><img src="images/quote.png" align="left" width="22" height="22" /></div>
					<div class="endorsement">
						<p>Ryan is fantastic web developer. I have enjoyed working with him. He always meets impossible deadlines. He is my go to guy for mobile development questions. Glad to have him as a colleague.</p>
						<p class="reference">Matt Christensen <span class="orange">| Web/Facebook Developer</span></p>
					</div>
				</div>

				<div class="quote">
					<div class="left-quote"><img src="images/quote.png" align="left" width="22" height="22" /></div>
					<div class="endorsement">
						<p>Ryan is a skillful and excellent programmer. He's a great colleague to work beside and definitely an asset to the company. Even when faced with impossible new ideas and designs, he always finds a way to implement them and make them work.</p>
						<p class="reference">Jason Kirchgessner <span class="orange">| Designer at Country Financial</span></p>
					</div>
				</div>

				<div class="quote">
					<div class="left-quote"><img src="images/quote.png" align="left" width="22" height="22" /></div>
					<div class="endorsement">
						<p>Ryan is dedicated, always willing to help, and always willing to learn something new. It's a pleasure to work with him.</p>
						<p class="reference">John Bowen <span class="orange">| Usability/Writer at Teleologic Learning Company</span></p>
					</div>
				</div>

				<div class="quote">
					<div class="left-quote"><img src="images/quote.png" align="left" width="22" height="22" /></div>
					<div class="endorsement">
						<p>Ryan was a great developer and was eager to learn new things. Good communicator and easy to get along with.</p>
						<p class="reference">Tom Gersic <span class="orange">| Director of Mobile Development at Salesforce.com</span></p>
				</div>

			</div>
			
		</div>
	</section>

	<footer class="footer">
		<div class="copyright">
			<p class="footer-copy">&copy; 2014 Ryan Johnston.</p>
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
			<a href="//facebook.com/ryan.g.johnston" alt="Facebook profile" target="facebook">
				<i class="fa fa-2x fa-facebook right"></i>
			</a>
		</div>
</body>

<script src="js/dev/allthejs.js"></script>
</html>