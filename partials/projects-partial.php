	<section class="section  projects" id="project-section">
		<div class="container">
			<h2 class="section-title">Recent Work</h2>

			<div class="section-border">
				<i class="icon-wrapper  fa  fa-code fa-2x"></i>
			</div>

			<div class="grid">

			<?php

				$project_template = $mustache->loadTemplate('projects');

				$project_data = file_get_contents('data/projects.json'); 

				echo $project_template->render( json_decode($project_data) );
			?>

			</div>
		</div>
	</section>