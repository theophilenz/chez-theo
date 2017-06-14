<?php get_header() ?>

<?php 
	if( is_404()) {
			get_template_part( 'content-parts/content', '404' );
	}
?>

<?php get_footer() ?>