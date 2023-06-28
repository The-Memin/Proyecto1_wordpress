<?php
/* template name: template_1 */
?>
<?php
    get_header();
?>

<h1>Custom template</h1>
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
$args = array(
    // Arguments for your query. 
	'post_type' => 'page'
);
// Custom query. 
$query = new WP_Query( $args );
//var_dump( $query );
if ($query -> have_posts() ) {
	
	while ($query -> have_posts() ) {
		$query -> the_post(); 
		//
		// Post Content here
		echo '<a href=" '. get_permalink() .' ">'.get_the_title().'</a> </br>';

		//
	} // end while
	wp_reset_postdata();
} // end if
?>

<?php
$args = array(
    // Arguments for your query. 
	'post_type' => 'post'
);
// Custom query. 
$query = new WP_Query( $args );
//var_dump( $query );
if ($query -> have_posts() ) {
	
	while ($query -> have_posts() ) {
		$query -> the_post(); 
		//
		// Post Content here
		echo '<a href=" '. get_permalink() .' ">'.get_the_title().'</a> </br>';

		//
	} // end while
	wp_reset_postdata();
} // end if
?>

<?php
    get_footer();
?>