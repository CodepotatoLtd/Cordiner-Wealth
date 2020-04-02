<?php $__env->startSection('content'); ?>

    <?php if(have_posts()): ?>
        <div class="section is-white-with-blue-title">
            <div class="container">
                <div class="heading has-border-bottom">
                    <h1 class="title" data-aos="fade-up"><?php echo e(get_field('blue_title', 60)); ?></h1>
                </div>
                <div class="columns">
                    <div class="column">
                        <p data-aos="fade-left" data-aos-delay="300"><?php echo get_field('intro', 60); ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if(!have_posts()): ?>
        <div class="alert alert-warning">
            <?php echo e(__('Sorry, no results were found.', 'sage')); ?>

        </div>
        <?php echo get_search_form(false); ?>

    <?php endif; ?>

    <div class="container">
        <div class="columns is-multiline is-centered is-main-blog-bit">
            <?php $i = 1; ?>
            <?php while(have_posts()): ?> <?php the_post(); ?>
            <div class="column is-4" data-aos="fade-up" data-aos-delay="<?php echo e($i * 200); ?>">
                <?php echo $__env->make('partials.content-'.get_post_type(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <?php $i++; ?>
            <?php endwhile; ?>
        </div>
    </div>

    <div class="section is-grey-with-grey-title">
        <div class="container">
            <div class="heading has-border-bottom">
                <h1 class="title" data-aos="fade-up"><?php echo e(get_field('educational_videos_title', 60)); ?></h1>
            </div>
            <div class="columns">
                <div class="column">
                    <p data-aos="fade-left" data-aos-delay="300"><?php echo e(get_field('educational_intro', 60)); ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <?php
            $vids = \App\Controllers\App::grab_three_vids();
        ?>
        <div class="columns is-multiline is-centered is-main-blog-bit">
            <?php $i = 1; ?>
            <?php while($vids->have_posts()): ?> <?php $vids->the_post() ?>
            <div class="column is-4">
                <div class="vid-block" data-aos="fade-up" data-aos-delay="<?php echo e($i * 200); ?>">
                    <div class="content-wrap">
                        <?php echo the_content(); ?>

                    </div>
                    <?php
                        $post_tags = get_the_tags();
                    ?>
                    <?php if( $post_tags ): ?>
                        <div class="tags">
                            <?php $__currentLoopData = $post_tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <span class="tag"><?php echo e($tag->name); ?></span>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php $i++; ?>
            <?php endwhile; ?>
            <?php
                wp_reset_query();
            ?>
        </div>

        <div class="navigation mb-30"><p class="is-pulled-right newer"><?php previous_posts_link('Newer posts'); ?></p>
            <p class="older"><?php next_posts_link('Older posts'); ?></p>
            <div class="clearfix"></div>
        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.insights', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>