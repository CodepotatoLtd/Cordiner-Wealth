<article <?php post_class('post-panel') ?>>
  <header>
    <?php
      $cat = \App\Controllers\App::parent_category();
    ?>
    <p class="post-panel-title" style="background-color: <?php echo e(get_field('colour', $cat)); ?>"><?php echo e($cat->name); ?></p>
  </header>
  <div class="entry-summary">
    <?php echo $__env->make('partials/entry-meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php if( get_field('is_external_link') === true ): ?>
      <h2 class="entry-title"><a href="<?php echo e(get_field('external_link')); ?>" target="_blank" style="color: <?php echo e(get_field('colour', $cat)); ?>"><?php echo e(get_the_title()); ?></a></h2>
      <?php the_excerpt() ?>
      <a href="<?php echo e(get_field('external_link')); ?>" target="_blank" class="button is-fullwidth-mobile is-dark-grey"><?php echo e(get_field('link_text')); ?></a>
    <?php else: ?>
      <h2 class="entry-title"><a href="<?php echo e(get_permalink()); ?>" style="color: <?php echo e(get_field('colour', $cat)); ?>"><?php echo e(get_the_title()); ?></a></h2>
      <?php the_excerpt() ?>
      <a href="<?php echo e(get_permalink()); ?>" class="button is-fullwidth-mobile is-dark-grey">VIEW</a>
    <?php endif; ?>

  </div>
</article>
