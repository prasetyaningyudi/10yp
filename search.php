<?php get_header(); ?>
<?php
//this is for variable
$post_per_page_featured = 3;
$post_per_page_main = 12;
$search_title = get_search_query();

?>
	
    <!-- s-content
    ================================================== -->
    <section class="s-content s-content--top-padding">
	
        <div class="row narrow">
            <div class="col-full s-content__header" data-aos="fade-up">
                <h1 class="display-1 display-1--with-line-sep">Search : <?php echo $search_title; ?></h1>
                <p class="lead">Berikut ini adalah list dari search terkait.</p>
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
					'tag' => $current_tag,
					'posts_per_page' => $post_per_page_main,
					'paged' => $paged,
				);
				 
				$query = new WP_Query($args);
				?>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>			
				
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
		
		<?php else: ?>
			<div class="" style="text-align:center;display:block;width:100%">
				<p class="lead" style="color:red;">Sorry, but nothing matched your search terms. Please try again with some different keywords.</p>
			</div>		

		<?php endif; ?>	

    </section> <!-- end s-content -->	
	
	<?php get_footer(); ?>