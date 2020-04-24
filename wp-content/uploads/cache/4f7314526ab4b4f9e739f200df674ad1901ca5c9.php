<?php $__env->startSection('content'); ?>

      <div class="pt-8 <?php if(has_post_thumbnail()): ?> pb-48 <?php else: ?> pb-4 <?php endif; ?>">
        <div class="container">

            <?php $category = get_the_category(); ?>

            <?php if(in_category($category[1]->name, $post = null)): ?>
                <a href="<?php echo e(home_url()); ?>/insights/?c=<?php echo $category[1]->slug ?>" class="button montserrat-medium inline-block white-bg-orange px-4 py-2 mb-4">< Back to the previous page</a>
            <?php elseif(in_category($category[0]->name, $post = null)): ?>
                <a href="<?php echo e(home_url()); ?>/insights/?c=<?php echo $category[0]->slug ?>" class="button montserrat-medium inline-block white-bg-orange px-4 py-2 mb-4">< Back to the previous page</a>
            <?php else: ?>
                <a href="<?php echo e(home_url('/')); ?>/insights" class="button montserrat-medium inline-block white-bg-orange px-4 py-2 mb-4">< Back to the previous page</a>
            <?php endif; ?>

          <div class="w-4/5 m-auto">
              <h1 class="montserrat-regular text-2xl"><?php echo e(the_title()); ?></h1>
              <span class="montserrat-regular text-xs"><?php the_time('F jS, Y'); ?></span>
          </div>
        </div>
      </div>
      <div class="bg-lightgrey pt-12">
        <div class="container">
            <div class="blog-media w-full lg:w-4/5 px-4 lg:px-0 m-auto">
                <?php if(has_post_thumbnail()): ?>
                    <div class="blog-image -mt-56" style="background:url('<?php echo get_the_post_thumbnail_url() ?>') no-repeat center center; background-size:cover">
                        <img src="<?php echo get_the_post_thumbnail_url() ?>" style=" visibility: hidden;">
                    </div>
                <?php endif; ?>
            </div>
          <?php while(have_posts()): ?> <?php the_post() ?>
            <?php echo $__env->make('partials.content-single-'.get_post_type(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          <?php endwhile; ?>

            <?php if(in_category($category[1]->name, $post = null)): ?>
                <a href="<?php echo e(home_url()); ?>/insights/?c=<?php echo $category[1]->slug ?>" class="button montserrat-medium inline-block white-bg-orange px-4 py-2 mb-4">< Back to the previous page</a>
            <?php elseif(in_category($category[0]->name, $post = null)): ?>
                <a href="<?php echo e(home_url()); ?>/insights/?c=<?php echo $category[0]->slug ?>" class="button montserrat-medium inline-block white-bg-orange px-4 py-2 mb-4">< Back to the previous page</a>
            <?php else: ?>
                <a href="<?php echo e(home_url('/')); ?>/insights" class="button montserrat-medium inline-block white-bg-orange px-4 py-2 mb-4">< Back to the previous page</a>
            <?php endif; ?>

        </div>
      </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>