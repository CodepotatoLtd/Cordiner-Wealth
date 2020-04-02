<article <?php post_class('single-post') ?>>
  <div class="flex flex-col-reverse lg:flex-row px-4 lg:px-0 pt-12 pb-6 lg:px-4">
    <div class="w-full lg:w-3/12 roboto-light xl:text-lg xl:leading-snug lg:mt-32 xl:mt-48 mb-8">
      <?php if(get_field('video_url')): ?>
        <div class="w-full relative bg-black">
            <?php $video_url = get_field('video_url') ?>
            <?php $video_url = explode('/', $video_url) ?>

            <a data-fancybox href="https://vimeo.com/<?php echo $video_url[3] ?>">
              <?php $hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/$video_url[3].php")); ?>
              <img class="opacity-50" src="<?php echo $hash[0]['thumbnail_large'] ?>">
              <img class="icon-play team-video absolute top-0 left-1" src="<?= App\asset_path('images/icon-play.svg'); ?>">
            </a>
        </div>
      <?php endif; ?>
    </div>
    <div class="w-full lg:w-9/12 roboto-light text-grey leading-snug lg:px-12 mb-4">
      <?php the_content() ?>
    </div>
  </div>
  <?php echo wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>

</article>


<div class="flex-row flex lg:hidden px-4">
    <a href="<?php echo e(home_url('/')); ?>/us/meet-the-team" class="button roboto-light inline-block blue-bg-white mb-4 w-full">< Back to Team</a>
</div>
