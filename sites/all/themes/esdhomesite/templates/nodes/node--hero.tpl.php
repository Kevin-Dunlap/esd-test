<?php
	$file = file_load($node->field_hero_image['und'][0]['fid']);
?>

<div class="row expanded hero-container" style="background:url('<?php print file_create_url($file->uri); ?>') center top;background-size:cover;">
</div>