<?php get_header(); ?>
<div class="row">
<?php 
if( have_posts() ):
    while( have_posts() ): the_post(); echo 'THIS IS THE FORMAT: '.get_post_format(); ?>
    
       <?php get_template_part('content',get_post_format()); ?> 
       
    <?php endwhile;
endif;
?>
    </div>

        <div class="col-xs-12 col-sm-4">
            <?php get_sidebar(); ?>
        </div>
</div>
<?php get_footer(); ?>
