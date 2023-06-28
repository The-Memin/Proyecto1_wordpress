<?php
get_header();
?>
<h1>Template single.php</h1>

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
get_footer();
?>