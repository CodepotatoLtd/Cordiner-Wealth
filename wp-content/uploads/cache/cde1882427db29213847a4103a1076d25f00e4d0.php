
<article <?php post_class('single-post') ?>>
    <div class="flex flex-col px-4 lg:px-0 pt-4 pb-24">
      <div class="w-4/5 roboto-light text-lg leading-snug lg:pr-20 mx-auto">
        <?php the_sub_field('introduction') ?>
      </div>
      <div class="w-full lg:w-4/5 roboto-light text-grey leading-snug mx-auto pt-8 md:pt-0">
        <?php the_content() ?>
          <div class="blog-disclaimer">
              <p class="font-bold">Disclaimer</p><br>

              <p>Metis Ireland Financial Planning Ltd t/a Metis Ireland is regulated by the Central Bank of Ireland.</p><br>

              <p>All content provided in these blog posts is intended for information purposes only and should not be interpreted as financial advice. You should always engage the
                  services of a fully qualified independent financial adviser before entering any financial contract. Metis Ireland Financial Planning Ltd t/a Metis Ireland will not be
                  held responsible for any actions taken as a result of reading these blog posts.</p>
          </div>
      </div>
    </div>
    <?php echo wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>

</article>
