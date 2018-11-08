	<?php get_header(); ?>
	
    <!-- s-content
    ================================================== -->
    <section class="s-content s-content--top-padding s-content--narrow">
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
        <div class="row narrow">
            <div class="col-full s-content__header">
                <h1 class="display-1 display-1--with-line-sep"><?php the_title(); ?></h1>
                <p class="lead"><?php echo get_post_meta( get_the_ID(), 'subtitle', true );?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-full s-content__main">
                <p>
                    <img src="<?php echo get_post_meta( get_the_ID(), 'images', true );?>" 
                         srcset="<?php echo get_post_meta( get_the_ID(), 'images', true );?> 2000w, 
                                 <?php echo get_post_meta( get_the_ID(), 'images', true );?> 1000w, 
                                 <?php echo get_post_meta( get_the_ID(), 'images', true );?> 500w" 
                         sizes="(max-width: 2000px) 100vw, 2000px" alt="">
                </p>

				<?php the_content(); ?>

            </div> <!-- s-content__main -->
        </div> <!-- end row -->
		
		<?php endwhile; ?>

		<?php else : ?>
			<p class="center">
			<?php _e("Sorry, but you are looking for something that isn't here."); ?>
			</p>		
		<?php endif; ?>			

    </section> <!-- end s-content -->
	
	<?php get_footer(); ?>