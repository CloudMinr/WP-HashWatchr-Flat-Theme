<?php
/**
  * Template Name: HashWatchr
*/
?>
<?php
if ( ! is_user_logged_in() && $pagenow != 'wp-login.php' )
	  wp_redirect( wp_login_url(), 302 );
?>
<?php get_header(); ?>
<section id="page" style="padding: 0; margin: 0;">
    <div class="container" style="padding: 0; margin: 0;">
        <div id="content" class="site-content" role="main" style="padding: 0; margin: 0;">
            <?php /* The loop */ ?>
            <?php while ( have_posts() ) { the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="entry-content" style="padding: 0; margin: 0;">
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if ( is_search() ) { ?>
    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div>
    <?php } else { ?>
		
    <div class="entry-content" style="padding: 0; margin: 0;">
        <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', ZEETEXTDOMAIN ) ); ?>
    </div>
    <?php } //.entry-content ?>

</article><!--/#post-->

                </div>
            </article>
            <?php } ?>
        </div><!--/#content-->
    </div>
</section><!--/#page-->
<?php get_footer();
