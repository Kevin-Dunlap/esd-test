<?php
	$file = file_load($node->field_hero_image['und'][0]['fid']);
?>

<div class="row expanded hero-container" style="background:url('<?php print file_create_url($file->uri); ?>') center top;background-size:cover;">
	<div class="row centered align-middle">
		<div class="large-6 large-centered column">
			<h1><?php print render($content['field_hero_heading']) ?></h1>
		</div>
	</div>
</div>