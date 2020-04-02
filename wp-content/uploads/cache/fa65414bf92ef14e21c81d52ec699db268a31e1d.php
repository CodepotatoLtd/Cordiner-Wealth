<?php $__env->startSection('content'); ?>

  <?php if( have_rows('horizontal_panels') ): ?>
    <?php while ( have_rows('horizontal_panels') ) : the_row(); ?>

    <?php if(get_row_layout() === 'plan_blocks'): ?>

      <div class="py-4 px-4 md:px-4 lg:px-4 xl:px-0">
        <div class="container">
          <div class="flex flex-col md:flex-row lg:flex-row xl:flex-row mb-4">
            <div class="w-full h-auto md:h-48 lg:h-64 xl:h-2005 overflow-hidden md:w-1/2 md:pr-4">
              <div class="w-full mr-4 mb-4">
                <div class="bg-blue md:h-48 lg:h-64 xl:h-2005 px-8 py-7 relative">
                  <h1 class="text-white font-trajan text-12 mb-08"><?php the_sub_field('title') ?></h1>
                  <div class="text-white roboto-light text-sm mb-8"><?php the_sub_field('text') ?></div>
                  <a class="button red-bg-blue">Get Started</a>
                  <img class="absolute bottom-9.8 right-16 w-16 h-16 md:w-16 md:h-16 lg:w-32 lg:w-32" src="<?php the_sub_field('image') ?>" alt="Chess Pieces - Metis Financial Strategy">
                </div>
              </div>
            </div>
            <div class="w-full h-56 md:h-48 lg:h-64 xl:h-2005 overflow-hidden md:w-1/2">
              <div class="flex flex-row -mx-2">
                <div class="w-1/2 px-2">
                  <img src="<?php the_sub_field('block_top_middle') ?>" alt="">
                </div>
                <div class="w-1/2 pl-2">
                  <img src="<?php the_sub_field('block_top_right') ?>" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="flex flex-col md:flex-row lg:flex-row xl:flex-row">
            <div class="w-full md:h-26 lg:h-363 xl:h-46 overflow-hidden md:w-1/2 lg:w-1/2 xl:w-1/2 md:pr-4 lg:pr-4 xl:pr-4">
              <div class="flex flex-row -mx-2">
                <div class="w-full md:w-1/2 lg:w-1/2 xl:w-1/2 px-2">
                  <img class="w-full md:w-auto lg:w-auto xl:w-auto" src="<?php the_sub_field('block_bottom_left_one') ?>" alt="">
                </div>
                <div class="w-full hidden md:block lg:block xl:block md:w-1/2 lg:w-1/2 xl:w-1/2 px-2">
                  <img src="<?php the_sub_field('block_bottom_left_two') ?>" alt="">
                </div>
              </div>
            </div>
            <div class="hidden md:h-26 lg:h-363 xl:h-46 overflow-hidden md:block lg:block xl:block md:w-1/2 lg:w-1/2 xl:w-1/2">
              <div class="flex -mx-2">
                <div class="w-1/3 px-2">
                  <img src="<?php the_sub_field('block_bottom_right_one') ?>" alt="">
                </div>
                <div class="w-1/3 px-2">
                  <img src="<?php the_sub_field('block_bottom_right_two') ?>" alt="">
                </div>
                <div class="w-1/3 pl-2">
                  <img src="<?php the_sub_field('block_bottom_right_three') ?>" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <?php elseif(get_row_layout() === 'awards'): ?>

      <div class="bg-lightgrey text-center py-24 px-4 md:px-0">
        <div class="container">
          <div class="flex flex-col mb-12">
            <h2 class="font-trajan text-red text-175 pr-4 mb-4"><?php the_sub_field('title') ?></h2>
            <div class="roboto-light text-xl"><?php the_sub_field('text') ?></div>
          </div>
          <div class="w-1/3 lg:w-2/3 mx-auto">
            <?php if(have_rows('awards')): ?>
              <div class="flex flex-col lg:flex-row">
                <?php while(have_rows('awards')): ?> <?php the_row() ?>
                <?php if($i % 3 == 0): ?></div><div class="flex flex-col lg:flex-row"><?php endif; ?>
                <img class="mb-4 lg:mr-4" src="<?php the_sub_field('award') ?>">
                <?php $i++ ?>
                <?php endwhile; ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>

    <?php elseif(get_row_layout() === 'centered_image_under'): ?>

      <div class="bg-lightgrey text-center py-24 px-4 md:px-0">
        <div class="container">
          <div class="flex flex-col mb-12 w-1/2 mx-auto">
            <h2 class="font-trajan text-red text-175 pr-4 mb-4"><?php the_sub_field('title') ?></h2>
            <div class="roboto-light text-xl mb-4"><?php the_sub_field('text') ?></div>
            <img class="w-1/3 mx-auto" src="<?php the_sub_field('image') ?>">
          </div>
        </div>
      </div>

    <?php elseif(get_row_layout() === 'centered_ctas'): ?>

      <div class="bg-lightgrey text-center py-24 px-4 md:px-0 pb-40">
        <div class="container">
          <div class="flex flex-col mb-12">
            <h2 class="font-trajan text-red text-175 pr-4 mb-4"><?php the_sub_field('title') ?></h2>
            <div class="roboto-light text-xl"><?php the_sub_field('text') ?></div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="flex flex-col md:flex-row -mt-32">
          <?php if(have_rows('ctas')): ?>
            <?php $i = 1 ?>
            <?php while(have_rows('ctas')): ?> <?php the_row() ?>
            <div class="w-full lg:w-1/3 text-center mb-4 relative <?php if($i !== 3): ?> md:mr-4 <?php endif; ?>">
              <a href="<?php the_sub_field('link_url') ?>">
                <img class="mx-auto" src="<?php the_sub_field('image') ?>">
                <div class="button bg-red text-white text-center uppercase w-288 absolute bottom-1 left-50%" style="margin-left:-144px;"><?php the_sub_field('link_text') ?></div>
              </a>
            </div>
            <?php $i++ ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>


    <?php elseif(get_row_layout() === 'content_white'): ?>

      <div class="bg-white py-24 px-4 md:px-0">
        <div class="container">
          <div class="flex flex-col md:flex-row">
            <div class="w-full md:w-5/12 mb-4">
              <h2 class="font-trajan text-red text-175 pr-4"><?php the_sub_field('title') ?></h2>
            </div>
            <div class="w-full md:w-7/12">
              <div class="roboto-light text-grey text-md leading-snug md:text-base">
                <?php the_sub_field('text') ?>
              </div>
            </div>
          </div>
        </div>
      </div>

    <?php elseif(get_row_layout() === 'content_blue'): ?>

      <div class="bg-lightgrey py-24 px-4 md:px-0 <?php if(get_sub_field('add_ctas') === true): ?> pb-64 <?php endif; ?>">
        <div class="container">
          <div class="flex flex-col md:flex-row">
            <div class="w-full md:w-5/12 mb-4">
              <h2 class="font-trajan text-red text-175 pr-4"><?php the_sub_field('title') ?></h2>
            </div>
            <div class="w-full md:w-7/12">
              <div class="roboto-light text-md leading-snug md:text-base">
                <?php the_sub_field('text') ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php if(get_sub_field('add_ctas') === true): ?>
        <div class="container">
          <div class="flex flex-col md:flex-row -mt-40">
            <?php if(have_rows('ctas')): ?>
              <?php $i = 1 ?>
              <?php while(have_rows('ctas')): ?> <?php the_row() ?>
              <div class="w-full lg:w-1/3 text-center mb-4 relative <?php if($i !== 3): ?> md:mr-4 <?php endif; ?>">
                <a href="<?php the_sub_field('button_link') ?>">
                  <img class="mx-auto" src="<?php the_sub_field('image') ?>">
                  <div class="button bg-white text-center uppercase w-288 absolute bottom-1 left-50%" style="margin-left:-144px;"><?php the_sub_field('button_text') ?></div>
                </a>
              </div>
              <?php $i++ ?>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
      <?php endif; ?>

    <?php elseif(get_row_layout() === 'team_section'): ?>

      <div class="px-4 my-24">
        <div class="container">
          <div class="text-center my-24 w-2/3 mx-auto">
            <h2 class="font-trajan text-red mb-4"><?php the_sub_field('title') ?></h2>
            <p class="roboto-light text-xl text-grey mb-8"><?php the_sub_field('text') ?></p>
            <a class="button blue-bg-white" href="<?php the_sub_field('button_link') ?>"><?php the_sub_field('button_text') ?></a>
          </div>
          <div class="w-screen-135 md:w-full overflow-x-hidden">
            <div class="flex">
              <div class="flex flex-row">
                <div class="swiper-container">
                  <div class="swiper-wrapper">
                    <?php if(have_rows('columns')): ?>
                      <?php $i = 1; ?>
                      <?php while(have_rows('columns')): ?> <?php the_row() ?>
                      <div class="swiper-slide w-1/4 overflow-hidden <?php if($i % 2 == 0): ?> mt-0 lg:mt-24 xl:mt-24 <?php else: ?> mt-8 lg:mt-0 xl:mt-0 <?php endif; ?> <?php if($i == 6): ?> mr-0 <?php else: ?> mr-2 md:mr-4 <?php endif; ?>">
                        <?php if( have_rows('column') ): ?>
                          <?php while( have_rows('column')): ?> <?php the_row() ?>
                          <?php if(get_row_layout() === 'placeholder'): ?>
                            <img class="h-auto mb-2 lg:mb-4 xl:mb-4" src="<?php the_sub_field('placeholder_image') ?>">
                          <?php elseif(get_row_layout() === 'person'): ?>
                            <?php $posts = get_sub_field('team_members') ?>
                            <?php if($posts): ?>
                              <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo get_the_post_thumbnail($p->ID, 'full', array('class' => 'h-auto mb-2 lg:mb-4 xl:mb-4')) ?>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                          <?php endif; ?>
                          <?php endwhile; ?>
                        <?php endif; ?>
                      </div>
                      <?php $i++ ?>
                      <?php endwhile; ?>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <?php elseif(get_row_layout() === 'fees_table'): ?>

      <div class="px-4 my-24">
        <div class="container">
          <div class="hidden md:flex md:flex-row">
            <div class="w-1/3 bg-blue text-white roboto-light p-4">
              <?php the_sub_field('column_1_title') ?>
            </div>
            <div class="w-2/3">
              <div class="flex table-line-header">
                <div class="w-1/3 bg-lightgrey roboto-light p-4 text-center">
                  <?php the_sub_field('column_2_title') ?>
                </div>
                <div class="w-1/3 bg-lightgrey roboto-light p-4 text-center">
                  <?php the_sub_field('column_3_title') ?>
                </div>
                <div class="w-1/3 bg-lightgrey roboto-light p-4 text-center">
                  <?php the_sub_field('column_4_title') ?>
                </div>
              </div>
            </div>
          </div>

          <?php if(have_rows('table')): ?>
            <?php $i = 0 ?>
            <?php while(have_rows('table')): ?> <?php the_row() ?>
            <div class="table-title cursor-pointer w-full md:hidden rounded bg-white border border-bordergrey text-xs px-4 py-2 mb-4 relative z-10">
              <div class="flex flex-row justify-between">
                <div><?php the_sub_field('title') ?></div>
                <div>
                  <img class="table-arrow-down" src="<?= App\asset_path('images/icon-table-down.svg'); ?>">
                  <img class="table-arrow-up hidden" src="<?= App\asset_path('images/icon-table-up.svg'); ?>">
                </div>
              </div>
            </div>
            <div class="table-dropdown flex-row table-line mb-4 -mt-1 md:mb-0 md:mt-0 hidden md:flex">
              <div class="w-1/3 flex flex-col justify-center <?php if($i % 2 == 0): ?> w-1/2 bg-blue align-middle md:bg-tablelightgrey <?php else: ?> bg-blue md:bg-lightgrey <?php endif; ?> roboto-light text-xs md:text-base text-white md:text-black p-4 border-white border border-l-0 border-r-0 border-b-0">
                <?php the_sub_field('title') ?>
              </div>
              <div class="w-2/3">
                <div class="flex flex-col md:flex-row table-line">
                  <div class="flex flex-row md:hidden">
                    <div class="w-1/2 md:hidden <?php if($i % 2 == 0): ?> bg-lightgrey <?php else: ?> bg-tablelightgrey <?php endif; ?> roboto-light p-4 text-xs md:text-base text-center border-white border border-r-0 border-b-0">Zeus</div>
                    <div class="w-1/2 md:w-1/3 <?php if($i % 2 == 0): ?> bg-lightgrey <?php else: ?> bg-tablelightgrey <?php endif; ?> roboto-light p-4 text-xs md:text-base text-center border-white border border-r-0 border-b-0">
                      <?php the_sub_field('zeus') ?>
                    </div>
                  </div>
                  <div class="hidden md:block md:w-1/3 <?php if($i % 2 == 0): ?> bg-tablelightgrey <?php else: ?> bg-lightgrey <?php endif; ?> roboto-light p-4 text-xs md:text-base text-center border-white border border-r-0 border-b-0">
                    <?php the_sub_field('zeus') ?>
                  </div>
                  <div class="flex flex-row md:hidden">
                    <div class="w-1/2 md:hidden <?php if($i % 2 == 0): ?> bg-tablelightgrey <?php else: ?> bg-lightgrey <?php endif; ?> roboto-light p-4 text-xs md:text-base text-center border-white border border-r-0 border-b-0">Oceanus</div>
                    <div class="w-1/2 md:w-1/3 <?php if($i % 2 == 0): ?> bg-tablelightgrey <?php else: ?> bg-lightgrey <?php endif; ?> roboto-light p-4 text-xs md:text-base text-center border-white border border-r-0 border-b-0">
                      <?php the_sub_field('oceanus') ?>
                    </div>
                  </div>
                  <div class="hidden md:block md:w-1/3 <?php if($i % 2 == 0): ?> bg-tablelightgrey <?php else: ?> bg-lightgrey <?php endif; ?> roboto-light p-4 text-xs md:text-base text-center border-white border border-r-0 border-b-0">
                    <?php the_sub_field('oceanus') ?>
                  </div>
                  <div class="flex flex-row md:hidden">
                    <div class="w-1/2 md:hidden <?php if($i % 2 == 0): ?> bg-lightgrey <?php else: ?> bg-tablelightgrey <?php endif; ?> roboto-light p-4 text-xs md:text-base text-center border-white border border-r-0 border-b-0">Tethys</div>
                    <div class="w-1/2 md:w-1/3 <?php if($i % 2 == 0): ?> bg-lightgrey md:bg-tablelightgrey <?php else: ?> bg-tablelightgrey md:bg-lightgrey <?php endif; ?> roboto-light p-4 text-xs md:text-base text-center border-white border border-r-0 border-b-0">
                      <?php the_sub_field('tethys') ?>
                    </div>
                  </div>
                  <div class="hidden md:block md:w-1/3 <?php if($i % 2 == 0): ?> bg-lightgrey md:bg-tablelightgrey <?php else: ?> bg-tablelightgrey md:bg-lightgrey <?php endif; ?> roboto-light p-4 text-xs md:text-base text-center border-white border border-r-0 border-b-0">
                    <?php the_sub_field('tethys') ?>
                  </div>
                </div>
              </div>
            </div>
            <?php $i++ ?>
            <?php endwhile; ?>
          <?php endif; ?>

        </div>
      </div>

    <?php elseif(get_row_layout() === 'infographics'): ?>

      <div class="px-4 py-24 my-24 bg-lightgrey md:text-left">
        <div class="container">
          <h2 class="font-trajan text-red text-center mx-auto mb-8">Here's how they work</h2>
          <div class="flex flex-col md:flex-row">
            <div class="w-full md:w-445 lg:w-490 xl:w-512 relative mx-auto mb-8 md:mb-4 md:mr-8 lg:mr-24">
              <?php for($i = 1; $i < 7; $i++): ?>
                <a class="absolute rounded-full info-<?php echo $i ?>" href="#"></a>
                <img id="info-<?php echo $i ?>" class="mx-auto ig <?php if($i !== 1): ?> hidden <?php endif; ?>" src="<?= App\asset_path('images/infographic-'.$i.'.png'); ?>">
              <?php endfor; ?>
            </div>
            <div class="w-full md:w-1/2 mx-auto flex flex-col justify-start md:justify-center roboto-light leading-snug">
              <?php if(have_rows('graphics')): ?>
                <?php $n = 1 ?>
                <?php while(have_rows('graphics')): ?> <?php the_row() ?>
                <div class="it info-text-<?php echo $n ?> <?php if($n === 1): ?> block <?php else: ?> hidden <?php endif; ?>">
                  <h2 class="roboto-light text-xl flex flex-row items-center mb-8">
                    <div class="bg-red rounded-full w-8 lg:w-12 h-8 lg:h-12 text-center flex flex-col text-white justify-center mr-4"><?php echo $n ?></div> <?php the_sub_field('title') ?></h2>
                  <?php the_sub_field('text') ?>
                </div>
                <?php $n++ ?>
                <?php endwhile; ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>

    <?php elseif(get_row_layout() === 'be_inspired_cta'): ?>

      <div class="mt-24">
        <div class="container">
          <div class="flex flex-col md:flex-row">
            <div class="w-full md:w-3/4">
              <img src="<?= App\asset_path('images/bg-beinspired.png'); ?>">

            </div>
            <div class="md:w-1/2 bg-white text-center flex flex-col justify-center -mt-24 mx-4 px-4 md:px-12 py-8 md:-ml-24 md:my-6 lg:my-12 lg:px-20 lg:-ml-40 xl:-ml-48" style="box-shadow:0 2px 4px 0 rgba(0,0,0,0.50)">
              <h2 class="text-red font-trajan mb-4"><?php the_sub_field('title') ?></h2>
              <p class="mb-4 roboto-light text-lg"><?php the_sub_field('text') ?></p>
              <a class="button red-bg-white" href="<?php the_sub_field('button_link') ?>"><?php the_sub_field('button_text') ?></a>
            </div>
          </div>
        </div>
      </div>

    <?php elseif(get_row_layout() === 'challenge_cta'): ?>

      <div class="mt-24 mb-24">
        <div class="container">
          <div class="flex flex-col">
            <img class="xl:w-full" src="<?= App\asset_path('images/bg-large-cheetah.png'); ?>">
            <div class="bg-white -mt-8 md:-mt-40 lg:-mt-56 mx-4 md:mx-16 px-4 py-12 md:p-20 text-center" style="box-shadow:0 4px 5px 2px rgba(0,0,0,0.09)">
              <h2 class="text-blue font-trajan mb-4"><?php the_sub_field('title') ?></h2>
              <p class="text-grey roboto-light mb-8"><?php the_sub_field('text') ?></p>
              <a class="button blue-bg-white" href="<?php the_sub_field('button_link') ?>"><?php the_sub_field('button_text') ?></a>
            </div>
          </div>
        </div>
      </div>

    <?php elseif(get_row_layout() === 'news_section'): ?>

      <div class="bg-lightgrey px-4 pt-24 mt-32">
        <div class="container">

          <?php $query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => '1')) ?>

          <?php if($query->have_posts()): ?>
            <?php $i = 1 ?>
            <?php while($query->have_posts()): ?> <?php $query->the_post() ?>

            <div class="flex flex-col md:flex-row -mt-56 mb-24">
              <div class="w-full md:w-3/4 relative">
                <a href="<?php the_permalink() ?>">
                  <?php the_post_thumbnail('full') ?>
                  <img class="icon-play absolute top-0 left-1" src="<?= App\asset_path('images/icon-play.svg'); ?>">
                </a>
              </div>
              <div class="md:w-1/2 bg-white text-center flex flex-col justify-center z-10 -mt-24 mx-4 px-4 md:px-12 py-8 md:-ml-24 md:my-6 lg:my-20 lg:px-20 lg:-ml-40 xl:-ml-48" style="box-shadow:0 2px 4px 0 rgba(0,0,0,0.50)">
                <h2 class="text-red font-trajan mb-4"><?php the_title() ?> </h2>
                <div class="mb-4 roboto-light text-lg"><?php echo substr(get_the_content(), 0, 100).'...' ?></div>
              </div>
            </div>

            <?php endwhile; ?>
          <?php endif; ?>

          <div class="flex flex-row align-center">
            <a class="w-full md:w-1/3 mx-auto bg-red text-white text-lg roboto-light rounded py-3 px-4 cursor-pointer category-filter" href="#">
              Filter Content
              <img class="filter-arrow-down float-right" src="<?= App\asset_path('images/icon-filter-down.svg'); ?>">
              <img class="filter-arrow-up hidden float-right" src="<?= App\asset_path('images/icon-filter-up.svg'); ?>">
            </a>
          </div>
          <div class="w-full md:w-1/3 mx-auto bg-lightgrey filter-dropdown" style="display:none">
            <ul>
              <li class="show-all text-grey roboto-light p-4 border border-2 border-t-0 border-r-0 border-l-0"><a href="#">Show all</a></li>
              <?php $categories = get_categories(array('orderby' => 'name')); ?>
              <?php $count = count($categories); ?>
              <?php $i = 1; ?>
              <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="filter-item text-grey roboto-light p-4 <?php if($count !== $i): ?> border border-2 border-t-0 border-r-0 border-l-0 <?php endif; ?>" data-category="<?php echo $category->slug ?>"><a class="block" href="<?php the_permalink() ?>"><?php echo $category->name ?></a></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php $i++ ?>
            </ul>
          </div>
        </div>
      </div>

      <div class="bg-lightgrey px-4 py-24">
        <div class="container">
          <div class="grid">
            <?php $query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => '-1')) ?>

            <?php if($query->have_posts()): ?>
              <?php $i = 1 ?>
              <?php while($query->have_posts()): ?> <?php $query->the_post() ?>
              <?php $categories = get_the_category() ?>

                <?php if(get_field('type') === 'text-image'): ?>
                  <div class="grid-item text-image <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($category->slug); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>">
                      <div class="relative border-red border border-2 border-t-0 border-r-0 border-l-0">
                        <?php if(has_post_thumbnail()): ?>
                          <a href="<?php echo e(get_permalink()); ?>"><?php echo e(the_post_thumbnail('full')); ?></a>
                        <?php endif; ?>
                        <a href="<?php echo e(get_permalink()); ?>"><img class="absolute bottom-0 left-1" src="<?= App\asset_path('images/arrow-red.svg'); ?>"/></a>
                      </div>
                      <div class="bg-white text-grey roboto-light leading-normal p-4 pb-10 border border-lightgrey news-item-text">
                        <h3 class="text-grey text-xl roboto-light leading-normal mb-4"><a href="<?php echo e(get_permalink()); ?>"><?php echo e(the_title()); ?></a></h3>
                        <?php $search_text = get_the_excerpt(); ?>
                        <?php $tags = array("<p>", "</p>", "&nbsp;"); ?>
                        <?php $search_content = str_replace($tags, "", $search_text); ?>
                        <?php echo $search_content; ?>
                      </div>
                  </div>
                <?php elseif(get_field('type') === 'text-video'): ?>
                  <div class="grid-item text-video <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($category->slug); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>">
                      <div class="relative border-red border border-2 border-t-0 border-r-0 border-l-0">
                        <div class="bg-black">
                          <?php if(has_post_thumbnail()): ?>
                            <a href="<?php echo e(get_permalink()); ?>"><?php echo e(the_post_thumbnail('full', array('class' => 'opacity-50'))); ?></a>
                          <?php else: ?>
                            <a href="<?php echo e(get_permalink()); ?>"><img class="opacity-50" src="<?= App\asset_path('images/news-image-01.jpg'); ?>"/></a>
                          <?php endif; ?>
                        </div>
                        <a href="<?php echo e(get_permalink()); ?>"><img class="absolute top-0 left-1" src="<?= App\asset_path('images/icon-play.svg'); ?>" style="left:calc(50% - 44px); top:calc(50% - 44px);"/></a>
                        <a href="<?php echo e(get_permalink()); ?>"><img class="absolute bottom-0 left-1" src="<?= App\asset_path('images/arrow-red.svg'); ?>"/></a>
                      </div>
                      <div class="bg-white text-grey roboto-light leading-normal p-4 pb-10 border border-lightgrey news-item-text">
                        <h3 class="text-grey text-xl roboto-light leading-normal"><a href="<?php echo e(get_permalink()); ?>"><?php echo e(the_title()); ?></a></h3>
                      </div>
                  </div>
                <?php else: ?>
                  <div class="grid-item other <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($category->slug); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>">
                    <div class="bg-blue text-white text-xl roboto-light leading-normal p-4 pb-10 relative">
                      <a href="<?php echo e(the_permalink()); ?>"><?php echo e(the_title()); ?></a>
                      <a href="<?php echo e(the_permalink()); ?>"><img class="absolute bottom-0 left-4" src="<?= App\asset_path('images/arrow-white.svg'); ?>"/></a>
                    </div>
                    <div class="bg-white text-grey roboto-light leading-normal p-4 pb-10 border border-lightgrey news-item-text">
                      <?php $search_text = get_the_excerpt(); ?>
                      <?php $tags = array("<p>", "</p>", "&nbsp;"); ?>
                      <?php $search_content = str_replace($tags, "", $search_text); ?>
                      <?php echo $search_content; ?>
                    </div>
                  </div>
                <?php endif; ?>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>

        </div>

        <?php wp_reset_postdata() ?>

      </div>
    <?php endif; ?>

    <?php endwhile; ?>
  <?php endif; ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>