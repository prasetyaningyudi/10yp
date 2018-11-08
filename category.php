<?php get_header(); ?>
<?php
//this is for variable
$post_per_page_featured = 3;
$post_per_page_main = 12;
$currentCategory = single_cat_title("", false);
?>
	
    <!-- s-content
    ================================================== -->
    <section class="s-content s-content--top-padding">
	
        <div class="row narrow">
            <div class="col-full s-content__header" data-aos="fade-up">
                <h1 class="display-1 display-1--with-line-sep">Category : <?php echo $currentCategory; ?></h1>
                <p class="lead">Berikut ini adalah list post dari kategori terkait.</p>
            </div>
        </div>	
        
        <div class="row entries-wrap add-top-padding wide">
            <div class="entries">
				<?php
				// Protect against arbitrary paged values
				$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
				 
				$args = array(
					'post_type' => 'post',
					'post_status'=>'publish',
					'category_name' => $currentCategory,
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