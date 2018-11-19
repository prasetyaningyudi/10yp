	<?php get_header(); ?>

    <!-- s-content
    ================================================== -->
    <section class="s-content s-content--top-padding s-content--narrow">

        <article class="row entry format-standard">
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
            <div class="entry__media col-full">
                <div class="entry__post-thumb" style="display:block;text-align:center">
                    <img src="<?php echo get_post_meta( get_the_ID(), 'images', true );?>" 
                         srcset="<?php echo get_post_meta( get_the_ID(), 'images', true );?> 2000w, 
                                 <?php echo get_post_meta( get_the_ID(), 'images', true );?> 1000w, 
                                 <?php echo get_post_meta( get_the_ID(), 'images', true );?> 500w" 
                         sizes="(max-width: 2000px) 100vw, 2000px" alt="<?php the_title(); ?>">
                </div>
            </div>

            <div class="entry__header col-full">
                <h1 class="entry__header-title display-1">
                    <?php the_title(); ?>
                </h1>
                <ul class="entry__header-meta">
                    <li class="date"><?php the_time('F jS, Y') ?></li>
                    <li class="byline">
                        By 
                        <?php the_author() ?>
                    </li>
                </ul>
            </div>

            <div class="col-full entry__main">

				<?php the_content(); ?>

                <div class="entry__taxonomies">
                    <div class="entry__cat">
                        <h5>Posted In: </h5>
                        <span class="entry__tax-list">
							<?php the_category(' ') ?> 
                        </span>
                    </div> <!-- end entry__cat -->

                    <div class="entry__tags">
                        <h5>Tags: </h5>
                        <span class="entry__tax-list entry__tax-list--pill">
							<?php the_tags( '', ' ', '' ); ?> 
                        </span>
                    </div> <!-- end entry__tags -->
                </div> <!-- end s-content__taxonomies -->
				
                <div class="entry__author">
				<?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?> 
                    <img src="images/avatars/user-03.jpg" alt="">

                    <div class="entry__author-about">
                        <h5 class="entry__author-name">
                            <span>Posted by</span>
                            <?php the_author_posts_link(); ?>
                        </h5>

                        <div class="entry__author-desc">
                            <p>
								<?php echo get_the_author_meta('description')?>
                            </p>
                        </div>
                    </div>
                </div>

            </div> <!-- s-entry__main -->

        </article> <!-- end entry/article -->

		<?php endwhile; ?>

        <div class="s-content__entry-nav">
            <div class="row s-content__nav">
                <div class="col-six s-content__prev">
                    <a href="#0" rel="prev">
                        <span>Previous Post</span>
                        <?php $prev_post = get_previous_post();
						if (!empty( $prev_post )): ?>
						  <a href="<?php echo $prev_post->guid ?>"><?php echo $prev_post->post_title ?></a>
						<?php endif ?>
                    </a>
                </div>
                <div class="col-six s-content__next">
                    <a href="#0" rel="next">
                        <span>Next Post</span>
                        <?php $next_post = get_next_post();
						if (!empty( $next_post )): ?>
						  <a href="<?php echo $next_post->guid ?>"><?php echo $next_post->post_title ?></a>
						<?php endif ?>
                    </a>
                </div>
            </div>
        </div> <!-- end s-content__pagenav -->

		<?php else : ?>
			<p class="center">
			<?php _e("Sorry, but you are looking for something that isn't here."); ?>
			</p>		
		<?php endif; ?>

		<?php
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif; 
		?>

    </section> <!-- end s-content -->	
	
	<?php get_footer(); ?>