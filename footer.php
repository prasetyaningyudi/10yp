    <!-- s-extra
    ================================================== -->
    <section class="s-extra">

        <div class="row">

            <div class="col-seven md-six tab-full popular">
				<!-- Bottom widget 1 -->
				<?php if ( is_active_sidebar( 'bottom_1' ) ) : ?>
					<?php dynamic_sidebar( 'bottom_1' ); ?>
				<?php endif; ?>				
            </div> <!-- end popular -->

            <div class="col-four md-six tab-full end">
                <div class="row">
                    <div class="col-six md-six mob-full categories widgetlist">
						<!-- Bottom widget 2 -->
						<?php if ( is_active_sidebar( 'bottom_2' ) ) : ?>
							<?php dynamic_sidebar( 'bottom_2' ); ?>
						<?php endif; ?>								
                    </div> <!-- end categories -->
        
                    <div class="col-six md-six mob-full sitelinks widgetlist">
						<!-- Bottom widget 3 -->
						<?php if ( is_active_sidebar( 'bottom_3' ) ) : ?>
							<?php dynamic_sidebar( 'bottom_3' ); ?>
						<?php endif; ?>							
                    </div> <!-- end sitelinks -->
                </div>
            </div>
        </div> <!-- end row -->

    </section> <!-- end s-extra -->	
	
    <!-- s-footer
    ================================================== -->
    <footer class="s-footer">

        <div class="s-footer__main">
            <div class="row">
                
                <div class="col-six tab-full s-footer__about">
                        
					<!-- Footer widget 1 -->
					<?php if ( is_active_sidebar( 'footer_1' ) ) : ?>
						<?php dynamic_sidebar( 'footer_1' ); ?>
					<?php endif; ?>	

                </div> <!-- end s-footer__about -->

                <div class="col-six tab-full s-footer__subscribe">
                        
					<!-- Footer widget 2 -->
					<?php if ( is_active_sidebar( 'footer_2' ) ) : ?>
						<?php dynamic_sidebar( 'footer_2' ); ?>
					<?php endif; ?>

                </div> <!-- end s-footer__subscribe -->

            </div>
        </div> <!-- end s-footer__main -->

        <div class="s-footer__bottom">
            <div class="row">

                <div class="col-six">
                    <ul class="footer-social">
                        <li>
                            <a href="#0"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#0"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#0"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#0"><i class="fab fa-youtube"></i></a>
                        </li>
                        <li>
                            <a href="#0"><i class="fab fa-pinterest"></i></a>
                        </li>
                    </ul>
                </div>

                <div class="col-six">
                    <div class="s-footer__copyright">
                        <span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved. Proudly powered by <a href="https://wordpress.org/" target="_blank">Wordpress</a>
						<br>This theme is costumized with <i class="fa fa-heart" aria-hidden="true" style="color:red"></i> by <a href="http://yudiprasetya.com">YudiPrasetya</a>, based on a beautiful html template from <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</span>
                    </div>
                </div>
                
            </div>
        </div> <!-- end s-footer__bottom -->

        <div class="go-top">
            <a class="smoothscroll" title="Back to Top" href="#top"></a>
        </div>

    </footer> <!-- end s-footer -->	

    <!-- Java Script
    ================================================== -->
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/plugins.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/main.js"></script>

</body>

</html>