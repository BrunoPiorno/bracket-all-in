<div class="featured_post__item">
    <div class="row__cont">
        <div class="featured_post__item__image">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium');?>" alt="<?php echo get_the_title();?>" />
        </div>

        <div class="featured_post__item__cont">
            <div class="featured_post__item__date"><?php echo get_the_date( 'F j, Y');?></div>
            <a href="<?php the_permalink(); ?>" class="featured_post__item__title"><?php the_title();?></a>
            <div class="featured_post__item__text">
                <?php 
                echo ($summary = get_field('post_summary'))? $summary : wp_trim_words( get_the_content(), 40, '...' ); ?>
            </div>
            <a class="learnmore" href="<?php the_permalink(); ?>"><?php echo __('Read More','all-in'); ?></a>
        </div>
    </div>
</div>
