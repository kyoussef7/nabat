<?php
/**
 * The Template for displaying all single posts.
 *
 * @package theretailer
 * @since theretailer 1.0
 */

get_header(); ?>

<div class="global_content_wrapper single-post">

    <div class="article_content <?php echo GBT_Opt::getOption( 'post_sidebar', true ) ? 'page_has_sidebar page_has_sidebar_right' : ''; ?>">

		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

                <div class="clr"></div>

				<?php theretailer_content_nav( 'nav-below' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
				?>

			<?php endwhile; // end of the loop. ?>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->

	</div>

    <?php if( GBT_Opt::getOption( 'post_sidebar', true ) ) { ?>

        <div class="page_sidebar page_sidebar_right">
    		<?php get_sidebar(); ?>
        </div>

        <div class="clear"></div>

    <?php } ?>

</div>

<div class="gbtr_widgets_footer_wrapper">
	<?php get_template_part("light_footer"); ?>
	<?php get_template_part("dark_footer"); ?>
</div>

<?php get_footer(); ?>
