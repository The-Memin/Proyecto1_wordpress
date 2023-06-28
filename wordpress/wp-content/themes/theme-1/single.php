<?php get_header();?>

    <!-- contenido articulo -->
    <div class="container">
        <div class="row">
            <!-- articulo -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="col-12 col-md-9 my-5">
            <?php if ( has_post_thumbnail() ) {the_post_thumbnail('post-thumbnails', array('class' => 'img-fluid'));} ?>
                <h2 class="my-3"><?php the_title();?></h2>
                <p class="lead"><?echo get_the_date();?></p>
                <div class="text-justify">
                    <?php the_excerpt();?>
                    <?php the_content();?> 
                </div>
            </div>
            <?php endwhile; endif;?>
            <!-- fin articulo -->

            <!-- aside -->
            <div class="col-12 col-md-3">
                <?php get_sidebar();?>
            </div>
            <!-- fin aside -->
        </div>
    </div>
    <!-- fin contenido articulo -->

<?php get_footer();?>