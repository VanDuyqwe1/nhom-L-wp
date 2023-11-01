<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <header class="row entry-header-adjust title">
                    <div class="col-md-10 col-xs-9">
						<?php the_title( '<h1 class="entry-title entry-title-adjust">', '</h1>' ); ?>
                    </div>
                    <div class="col-md-2 col-xs-3">
                        <div class="headlinesdate">
                            <div class="headlinesdm">
                                <div class="headlinesday"><?php echo get_the_date( 'd', get_the_ID() ); ?></div>
                                <div class="headlinesmonth"><?php echo get_the_date( 'm', get_the_ID() ); ?></div>
                            </div>
                            <div class="headlinesyear">'<?php echo get_the_date( 'y', get_the_ID() ); ?></div>
                        </div>
                    </div>
					<?php twenty_twenty_one_post_thumbnail(); ?>
                </header><!-- .entry-header -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="overviewline"></div>
                    </div>
                </div>
                <div class="entry-content entry-content-adjust">
					<?php
					the_content();

					wp_link_pages(
						array(
							'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
							'after'    => '</nav>',
							/* translators: %: Page number. */
							'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
						)
					);
					?>
                </div><!-- .entry-content -->

                <footer class="entry-footer entry-footer-adjust">
					<?php twenty_twenty_one_posted_by(); ?>
                </footer>
                <!-- .entry-footer -->

				<?php if ( ! is_singular( 'attachment' ) ) : ?>
					<?php get_template_part( 'template-parts/post/author-bio' ); ?>
				<?php endif; ?>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
