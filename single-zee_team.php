<?php
get_header();

if(have_posts()){ while ( have_posts() ) { the_post();
				
  $id = get_the_ID();
  
	echo do_shortcode('[zee_team id="'.$id.'"]');
	
} }

get_footer();
?>
