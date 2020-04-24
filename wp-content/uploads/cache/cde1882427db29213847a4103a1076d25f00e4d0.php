
<article <?php post_class('single-post') ?>>
    <div class="flex flex-col px-4 lg:px-0 pt-4 pb-24">
      <div class="w-4/5 roboto-light text-lg leading-snug lg:pr-20 mx-auto">
        <?php the_sub_field('introduction') ?>
      </div>
      <div class="w-full lg:w-4/5 roboto-light text-grey leading-snug mx-auto pt-8 md:pt-0">
        <?php the_content() ?>









      </div>
    </div>
    <?php echo wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>

</article>
