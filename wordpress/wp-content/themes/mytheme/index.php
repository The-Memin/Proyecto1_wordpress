<?php
    get_header();
?>
    <?php
        if (is_front_page()) {
            echo '<h1>Hola mundo</h1>';
        }
        if (is_page()) {
            echo '<h1>Esto es un template de pagina</h1>';
        }
    ?>
    <h2><?php
        the_title();
    ?></h2>
    <?php 
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post(); 
            //
            // Post Content here
            the_content();
            //
        } // end while
    } // end if
    ?>

    <?php
        $post_object = get_post(get_the_ID());
        var_dump($post_object);
        
        //echo $post_object->post_date;
    ?>
<?php
    get_footer();
?>