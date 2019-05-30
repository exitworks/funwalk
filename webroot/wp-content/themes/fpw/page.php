<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

<div class="container">
    <div class="breadcrumb"><a href="/">FUN+WALK PROJECTトップ</a>　&gt;　<?php the_title(); ?></div>
    <div class="contents">
    
        <?php the_content()?>

        <?php
        if ( get_field('chk_show_sidenavi') == true ){
            get_sidebar();  
        }
         ?>
    </div>
</div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
