<?php $__env->startSection('content'); ?>

    <div class="bg-blue py-4 <?php if(has_post_thumbnail()): ?> pb-2 <?php else: ?> pb-4 <?php endif; ?> h-auto lg:h-72">
        <div class="container">
            <div class="flex-row hidden lg:flex lg:px-4">
                <a href="<?php echo e(home_url('/')); ?>/us/meet-the-team" class="button roboto-light inline-block bg-white white-bg-red mb-4">< Back to Team</a>

            </div>
            <div class="flex flex-col items-center lg:items-start md:flex-row justify-center lg:px-4">
                <div class="w-full md:w-1/2 lg:w-3/12 px-4 lg:px-0 mb-4">
                    <div class="blog-image relative">
                        <?php the_post_thumbnail('full', array('class' => 'w-full')) ?>
                        <div class="absolute bottom-0 left-0 bg-white p-2 w-full">
                            <div class="roboto-light text-grey mb-1"><?php the_title() ?> <?php the_field('qualifications') ?></div>
                            <div class="text-blue uppercase text-xs mb-4"><?php the_field('job_title') ?></div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-9/12 px-4 lg:px-12">
                    <div class="roboto-light text-white text-xl leading-normal">
                        <?php the_field('intro_paragraph') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-lightgrey">
        <div class="container">
            <?php while(have_posts()): ?> <?php the_post() ?>
                <?php echo $__env->make('partials.content-single-'.get_post_type(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php endwhile; ?>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>