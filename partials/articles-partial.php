	<section class="section  articles" id="article-section">
		<div class="container">
			<h2 class="section-title">Articles</h2>

			<div class="section-border">
				<i class="icon-wrapper  fa  fa-pencil fa-2x"></i>
			</div>

		<div class="grid">
		
		<?php
			$article_template = $mustache->loadTemplate('articles');

			$article_data = file_get_contents('data/articles.json'); 

			echo $article_template->render( json_decode($article_data) );
		?>

		</div>

		<a href="//johnstonianera.com">
			<div class="view-all-circle">
				<p class="view-all">View More</p>
			</div>	
		</a>

		</div>
	</section>