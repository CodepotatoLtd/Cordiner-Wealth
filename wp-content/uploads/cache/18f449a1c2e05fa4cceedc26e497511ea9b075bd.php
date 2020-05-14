
<header class="relative">

  <div class="contact-bar bg-darkblue text-right text-white text-08 py-1 hidden lg:block xl:block">
    <div class="container">
      <a href="mailto:<?php echo e(get_field('email', 'options')); ?>" class="text-white">
        <?php echo e(get_field('email', 'options')); ?>

      </a>
      <span class="text-white mx-3">|</span>
      <a href="tel:<?php echo e(get_field('telephone', 'options')); ?>" class="text-white">
        <?php echo e(get_field('telephone', 'options')); ?>

      </a>
    </div>
  </div>

  <div class="navbar bg-white">
    <div class="container">
      <a href="<?php echo e(home_url('/')); ?>" class="logo block bg-white float-left mt-2 lg:mt-4 lg:w-auto xl:h-auto">
        <img src="<?= App\asset_path('images/cordiner-wealth.svg'); ?>" alt="Cordiner Wealth Logo" data-aos="fade">
      </a>

      <div class=" py-165 lg:py-195 xl:py-195">
          <div class="mobile-menu flex flex-row items-center justify-end lg:hidden xl:hidden">
            <a href="mailto:<?php echo e(get_field('email', 'options')); ?>" class="mr-4">
              <img src="<?php echo e(\App\asset_path('images/email-dark.svg')); ?>" alt="Email us">
            </a>
            <div class="h-6 w-px mr-4"></div>
            <a href="tel:<?php echo e(get_field('telephone', 'options')); ?>" class="mr-4">
              <img src="<?php echo e(\App\asset_path('images/telephone-dark.svg')); ?>" alt="Phone us">
            </a>
            <div class="h-6 w-px mr-4"></div>
            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
              <img src="<?php echo e(\App\asset_path('images/hamburger.svg')); ?>" alt="Phone us">
            </a>
          </div>
          <div class="desktop-menu hidden flex flex-row lg:flex xl:flex lg:flex-row xl:flex-row lg:content-around xl:content-around">
            <div class="mx-auto">
              <?php if(has_nav_menu('primary_navigation')): ?>
                <?php echo wp_nav_menu([
                    'theme_location'    => 'primary_navigation',
                    'depth'             => 2,
                    'container'         => false,
                    'menu_class'        => 'navbar-menu',
                    'menu_id'           => 'primary-menu',
                    'after'             => "</div>",
                    'walker'            => new \App\BulmaNavWalker(),
                    'items_wrap'        => '%3$s'
                    ]); ?>

              <?php endif; ?>
            </div>
            <div class="ml-auto" data-aos="fade-left">
              <a class="button white-bg-orange py-2 px-6" target="_blank" href="<?php echo e(get_field('client_login', 'options')); ?>">Client Login</a>
            </div>
          </div>

      </div>

    </div>
  </div>

  <div id="mobile-menu" class="hidden flex-col bg-green text-white text-left px-6 pt-2 pb-8 relative sm:relative md:relative lg:absolute">
    <?php if(has_nav_menu('primary_navigation')): ?>
      <?php echo wp_nav_menu([
          'theme_location'    => 'primary_navigation',
          'depth'             => 2,
          'container'         => false,
          'menu_class'        => 'navbar-menu',
          'menu_id'           => 'primary-menu',
          'after'             => "</div>",
          'walker'            => new \App\BulmaNavWalker(),
          'items_wrap'        => '%3$s'
          ]); ?>

    <?php endif; ?>
    <a class="button white-bg-orange lg:white-bg-orange mt-8 float-left inline-block w-1/2" target="_blank" href="<?php echo e(get_field('client_login', 'options')); ?>">Client Login</a>
  </div>

</header>


