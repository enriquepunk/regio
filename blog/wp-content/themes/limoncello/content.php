	<article id="post-<?php the_ID(); ?>" class="entrada">
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
		<div class="featured-post">
			<?php _e( 'Featured post', 'twentytwelve' ); ?>
		</div>
		<?php endif; ?>
		<header class="entry-header">
						<?php if ( is_single() ) : ?>
							<div class="entry-title col-sm-12 text-left">
                            	<h1 class="entry-title"><?php the_title(); ?></h1>
							</div>

			<?php else : ?>
                            <div class="entry-title col-sm-12 text-left">
                                    <a href="<?php the_permalink(); ?>" class=""  rel="bookmark"><h1><?php the_title(); ?></h1></a>
                            </div>
                            <div class="col-sm-12 destacada">
								<?php the_post_thumbnail() ?>
							</div>

                           
                            
			<?php endif; // is_single() ?>


			<?php if ( comments_open() ) : ?>
<!--				<div class="comments-link">
					<?php comments_popup_link( '<span class="leave-reply btn btn-mini btn-inverse">' . __( 'Leave a reply', 'twentytwelve' ) . '</span>', __( '1 Reply', 'twentytwelve' ), __( '% Replies', 'twentytwelve' ) ); ?>
				</div> .comments-link -->
			<?php endif; // comments_open() ?>
		</header><!-- .entry-header -->

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
                    <div class="entry-summary">
                            <?php the_excerpt(); ?>

                    </div><!-- .entry-summary -->
                    
		<?php else : ?>
		<div class="entry-content justificado clearfix">

			<?php the_content( __( '<div class="read-more"><span>Leer más</span></div> ', 'twentytwelve' ) ); ?>
			
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
						
		</div><!-- .entry-content -->
		<?php endif; ?>

	</article><!-- #post -->
 
