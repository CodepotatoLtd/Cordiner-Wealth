<?php $__env->startSection('content'); ?>

      <div class="<?php if(get_field('type') === 'text-video'): ?> bg-blue <?php else: ?> bg-red <?php endif; ?> pt-8 <?php if(has_post_thumbnail() || (get_field('type') === 'text-video')): ?> pb-48 <?php else: ?> pb-4 <?php endif; ?>">
        <div class="container">

            <?php $category = get_the_category(); ?>

            <?php if(in_category($category[1]->name, $post = null)): ?>
                <a href="<?php echo e(home_url()); ?>/news/?c=<?php echo $category[1]->slug ?>" class="button roboto-light inline-block bg-white white-bg-red mb-4">< Back to the previous page</a>
            <?php elseif(in_category($category[0]->name, $post = null)): ?>
                <a href="<?php echo e(home_url()); ?>/news/?c=<?php echo $category[0]->slug ?>" class="button roboto-light inline-block bg-white white-bg-red mb-4">< Back to the previous page</a>
            <?php else: ?>
                <a href="<?php echo e(home_url()); ?>/news" class="button roboto-light inline-block bg-white white-bg-red mb-4">< Back to the previous page</a>
            <?php endif; ?>

          <div class="w-4/5 m-auto">
              <h1 class="trajan-regular text-white text-2xl"><?php echo e(the_title()); ?></h1>
              <span class="trajan-regular text-white text-xs"><?php the_time('F jS, Y'); ?></span>
          </div>
        </div>
      </div>
      <div class="bg-lightgrey pt-12">
        <div class="container">
            <div class="blog-media w-full lg:w-4/5 px-4 lg:px-0 m-auto">
                <?php if(get_field('type') === 'text-video'): ?>
                    <?php $video = explode('/', get_field('video_url')) ?>
                    <div class="-mt-56">
                        <div class="blog-video" style="padding:75% 0 0 0;position:relative;">
                            <iframe src="https://player.vimeo.com/video/<?php echo $video[3] ?>?title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:550px" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                        </div><script src="https://player.vimeo.com/api/player.js"></script>
                    </div>
                <?php elseif(has_post_thumbnail()): ?>
                    <div class="blog-image -mt-56" style="background:url('<?php echo get_the_post_thumbnail_url() ?>') no-repeat center center; background-size:cover">
                        <img src="<?php echo get_the_post_thumbnail_url() ?>" style=" visibility: hidden;">
                    </div>
                <?php endif; ?>
            </div>
          <?php while(have_posts()): ?> <?php the_post() ?>
            <?php echo $__env->make('partials.content-single-'.get_post_type(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          <?php endwhile; ?>

            <?php if(in_category($category[1]->name, $post = null)): ?>
                <a href="<?php echo e(home_url()); ?>/news/?c=<?php echo $category[1]->slug ?>" class="button roboto-light inline-block red-bg-white mb-4">< Back to the previous page</a>
            <?php elseif(in_category($category[0]->name, $post = null)): ?>
                <a href="<?php echo e(home_url()); ?>/news/?c=<?php echo $category[0]->slug ?>" class="button roboto-light inline-block red-bg-white mb-4">< Back to the previous page</a>
            <?php else: ?>
                <a href="<?php echo e(home_url('/')); ?>/news" class="button roboto-light inline-block red-bg-white mb-4">< Back to the previous page</a>
            <?php endif; ?>

        </div>
      </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>