	<?php get_header(); ?>
	<?php
	//this is for variable
	$post_per_page_featured = 3;
	$post_per_page_main = 12;

	?>
	
 <!-- featured 
    ================================================== -->
    <section class="s-featured">
        <div class="row">
            <div class="col-full">

                <div class="featured-slider featured" data-aos="zoom-in">
					<?php $query = new WP_Query( array( 'meta_key' => 'featured', 'post_type' => 'post', 'post_status'=>'publish', 'posts_per_page' => $post_per_page_featured ) ); ?>

					<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>		
					
                    <div class="featured__slide">
                        <div class="entry">

                            <div class="entry__background" style="background-image:url('<?php echo get_post_meta( get_the_ID(), 'images', true );?>');"></div>
                            
                            <div class="entry__content">
                                <span class="entry__category">
								<?php the_category( ', ' ); ?>
								</span>

                                <h1><a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></h1>

                                <div class="entry__info">
                                    <a href="#0" class="entry__profile-pic">
                                        <?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?> 
                                    </a>
                                    <ul class="entry__meta">
                                        <li><?php the_author_posts_link(); ?></li>
                                        <li><?php the_time('F jS, Y'); ?></li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->
                            
                        </div> <!-- end entry -->
                    </div> <!-- end featured__slide -->

					<?php endwhile; wp_reset_postdata(); else : ?>

					<?php endif; ?>
					
                </div> <!-- end featured -->

            </div> <!-- end col-full -->
        </div>
    </section> <!-- end s-featured -->
	
    <!-- s-content
    ================================================== -->
    <section class="s-content">
        
        <div class="row entries-wrap wide">
            <div class="entries">
				<?php
				// Protect against arbitrary paged values
				$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
				 
				$args = array(
					'post_type' => 'post',
					'post_status'=>'publish',
					'posts_per_page' => $post_per_page_main,
					'paged' => $paged,
				);
				 
				$query = new WP_Query($args);
				?>

				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>			
				
                <article class="col-block">
                    
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                            <a href="<?php the_permalink(); ?>" class="item-entry__thumb-link">
								<?php if( get_post_meta( get_the_ID(), 'images', true ) == null): ?>
								<img src="<?php echo get_bloginfo('template_directory'); ?>/images/no-image.jpg" 
                                     srcset="<?php echo get_bloginfo('template_directory'); ?>/images/no-image.jpg 1x, <?php echo get_bloginfo('template_directory'); ?>/images/no-image.jpg 2x" alt="">
								<?php else: ?>							
                                <img src="<?php echo get_post_meta( get_the_ID(), 'images', true );?>" 
                                     srcset="<?php echo get_post_meta( get_the_ID(), 'images', true );?> 1x, <?php echo get_post_meta( get_the_ID(), 'images', true );?> 2x" alt="">
									 
								<?php endif; ?>
                            </a>
                        </div>
        
                        <div class="item-entry__text">    
                            <div class="item-entry__cat">
                                <?php the_category( ', ' ); ?>
                            </div>
    
                            <h1 class="item-entry__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                
                            <div class="item-entry__date">
                                <a href="<?php the_permalink(); ?>"><?php the_time('F jS, Y'); ?></a>
                            </div>
                        </div>
                    </div> <!-- item-entry -->

                </article> <!-- end article -->
				
				<?php endwhile; ?>

            </div> <!-- end entries -->
        </div> <!-- end entries-wrap -->

		
		
		<?php
        $pages = paginate_links( array(
            'format'  => 'page/%#%',
            'current' => $paged,
            'total'   => $query->max_num_pages,
            'mid_size'        => 2,
			'type'  => 'array',
            'prev_text'       => __('Prev'),
            'next_text'       => __('Next')
        ) );		
		?>		
        <div class="row pagination-wrap">
            <div class="col-full">
                <nav class="pgn" data-aos="fade-up">
                    <ul>
						<?php
							if(!empty($pages)){
								foreach($pages as $val){
									echo "<li>".$val."</li>";
								}
							}
						?>
                    </ul>
                </nav>
            </div>
        </div>
		
		<?php endif; ?>	

    </section> <!-- end s-content -->	
	
	<?php get_footer(); ?>