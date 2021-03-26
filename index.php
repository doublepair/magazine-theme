<?php get_header();?>

<div class="content">

    <!--Post loop-->
    <?php
        if(have_posts()) : 
    ?>
    <?php 
        while(have_posts()) : the_post();
    ?>


    <!--Posts' cards-->
    <div class="card-group">
        <div class="card bg-dark">
        <img src="<?php get_post_gallery_images();?>" class="card-img-top" alt="<?php the_title(); ?>">
            <div class="card-body">
                <h5 class="card-title"><?php the_title();?></h5>
                <p class="card-text"><?php the_content();?></p>
                <p class="card-text"><small class="text-muted">
                    <i class="fa fa-clock-o"></i>
                    <?php the_time("j M, Y");?>
                    <i class="fa fa-thumb-tack"></i>
                    <?php the_category(" - ");?>
                </small></p>
                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Vai</a>
            </div>
        </div>
    </div>
    

        <article id=
                "post-<?php the_ID(); ?>"
                <?php post_class( );?>
            >
            <h2>
                <a href="<?php the_permalink();?>">
                    <?php the_title(); ?>
                </a>
            </h2>
            <p>
                <i class="fa fa-clock-o"></i>
                <?php the_time("j M, Y");?>
                <i class="fa fa-thumb-tack"></i>
                <?php the_category(" - ");?>
            </p>
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail("magazine-single", array("class" => "img-res", "alt" => get_the_title())); ?>
            </a>
            <?php the_excerpt();?>
        </article>
    <?php
        endwhile;
    ?>

    <?php /*paginate*/
        global $wp_query;
        $big = 999999999; 
        echo paginate_links(array(
            "base" => str_replace($big, "%#%", esc_url(get_pagenum_link($big))),
            "format" => "?paged=%#%",
            "current" => max(1, get_query_var("paged")),
            "total" => $wp_query->max_num_pages
        ));
    ?>

    <?php else : ?> 
        <h1 class="error-404"><?php esc_html_e("404");?></h1>
        <h3 class="error-404"><?php esc_html_e("Nessun risultato corrisponde ai parametri richiesti");?></h3>
    <?php endif; ?>

</div>

<aside class="sidebar">
    <?php get_sidebar();?> 
</aside>

<?php get_footer();?>