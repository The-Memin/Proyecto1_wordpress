<?php
get_header();
?>
<h1>Template Page.php</h1>

<h2><?php
    the_title();
?></h2>
<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		//
		// Post Content here
		echo '<div class="the_content">';
        the_content();
		echo '</div>';
		//
	} // end while
} // end if
?>
<?php
get_footer();
?>