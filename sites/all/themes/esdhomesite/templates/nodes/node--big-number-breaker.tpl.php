<div class="medium-4 small-12 columns text-center" style="display: flex">
  <?php
    $file = file_load($node->field_background_image['und'][0]['fid']);
  ?>

  <div class="<?php echo $node->field_background_overlay_color['und'][0]['value'] ?>">
    <div class="big-number-breaker" style="background:url('<?php print file_create_url($file->uri); ?>') center top;background-size:cover;"></div>
  </div>

  <div class="columns align-middle breaker-content">
    <h1><?php echo $node->field_big_number_integer['und'][0]['value'] ?></h1>
    <?php if ($content['field_big_number']): ?>
      <h2><?php echo $node->field_big_number['und'][0]['value'] ?></h2>
    <?php endif; ?>
    <p><?php echo $node->field_big_number_headline['und'][0]['value'] ?></p>
        
    <?php if ($content['field_content_to_link_to']): ?>
    <a href="<?php echo url('node/' . $node->field_content_to_link_to['und'][0]['target_id'], array('absolute' => TRUE)); ?><?php echo $node->field_link_anchor_tag['und'][0]['value'] ?>" class="button breaker-button"><?php echo $node->field_link_text['und'][0]['value']?></a>
    <?php endif; ?>
  </div>

</div>


