<?php get_header() ?>

<?php 
	if( have_posts() ) {
		while( have_posts() ) { 
			the_post();
			get_template_part( 'content-parts/content', 'index' );
		}
	}
	else {
		get_template_part( 'content-parts/content', 'none' );
	}
?>

<?php get_footer() ?>