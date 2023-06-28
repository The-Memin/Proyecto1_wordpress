<?php
/* template name: new template */
?>
<?php
    get_header();
?>

<h1>New Custom Template</h1>
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
define('POST_TYPE', 'post');
define('PAGE_TYPE', 'page');
$args = array(
    // Arguments for your query. 
	'post_type' => array('page', 'post')
);
// Custom query. 
$query = new WP_Query( $args );
//var_dump( $query );

if ($query -> have_posts() ) {
	
	while ($query -> have_posts() ) {
		$query -> the_post(); 
        $post_object = get_post(get_the_ID());
		// Post Content here
        $class = ($post_object->post_type == POST_TYPE) ? 'post_class' : 'page_class';
		echo '  <div class="permalink">
                    <a href=" '. get_permalink() .' ">'.get_the_title().'</a>
                    <div class="post_type '.$class.'">'.$post_object->post_type.'</div> </br>
                </div>';

		//
	} // end while
	wp_reset_postdata();
} // end if
?>

<?php
	the_field('name_page');
?>

<?php
    get_footer();
?>