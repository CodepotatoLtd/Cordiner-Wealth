<?php $__env->startSection('content'); ?>

    <div class="bg-green py-4 <?php if(has_post_thumbnail()): ?> pb-2 <?php else: ?> pb-4 <?php endif; ?> h-auto lg:h-72">
        <div class="container">
            <div class="flex-row hidden lg:flex lg:px-4">
                <a href="<?php echo e(home_url('/')); ?>/us/meet-the-team" class="button inline-block bg-white white-bg-orange py-2 px-8 mb-4">< Back to Team</a>

            </div>
            <div class="flex flex-col items-center lg:items-start md:flex-row justify-center lg:px-4">
                <div class="w-full md:w-1/2 lg:w-3/12 px-4 lg:px-0 mb-4">
                    <div class="blog-image relative">
                        <?php the_post_thumbnail('full', array('class' => 'w-full')) ?>
                        <div class="absolute bottom-0 left-0 bg-white p-2 w-full">
                            <div class="montserrat-regular text-grey mb-1"><?php the_title() ?> <?php the_field('qualifications') ?></div>
                            <div class="text-green uppercase text-xs mb-4"><?php the_field('job_title') ?></div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-9/12 px-4 lg:px-12">
                    <div class="montserrat-light text-white text-xl leading-normal">
                        <?php the_field('intro_paragraph') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>








<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>