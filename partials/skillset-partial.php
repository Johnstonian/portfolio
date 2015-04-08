	<section class="section  skillset" id="skills">
		<h2 class="hidden">Skillset</h2>
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
				
<?php

	$skillset_template = $mustache->loadTemplate('skillset');

	$skillset_data = file_get_contents('data/skillset.json'); 

	echo $skillset_template->render( json_decode($skillset_data) );
?>

			</div>
		</div>
	</section>