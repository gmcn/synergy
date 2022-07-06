<?php
$image = get_sub_field('image');
if ( !empty($image) ): ?>
  <div class="full-width-image" style="background: url(<?php echo $image['url']; ?>) center center / cover; background-attachment: fixed;">
    <!-- <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /> -->
  </div>
<?php endif; ?>
