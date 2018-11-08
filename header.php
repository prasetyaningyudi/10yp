<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/base.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/vendor.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/main.css">

    <!-- script
    ================================================== -->
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/modernizr.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="<?php echo get_bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo get_bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon">

	<?php wp_head();?>
</head>


<body id="top">

    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
	
    <!-- header
    ================================================== -->
    <header class="s-header header">
        <div class="header__logo">
            <a class="logo" href="<?php echo get_bloginfo( 'wpurl' );?>">
                <!--<img src="images/logo.svg" alt="Homepage">-->
				<span style="color:#222222;font-weight:500">yudiprasetya.</span><span style="color:#FF5D00;font-weight:500">com</span>
            </a>
        </div> <!-- end header__logo -->

        <a class="header__search-trigger" href="#0"></a>
        <div class="header__search">

            <form role="search" method="get" class="header__search-form" action="#">
                <label>
                    <span class="hide-content">Search for:</span>
                    <input type="search" class="search-field" placeholder="Type Keywords" value="" name="s" title="Search for:" autocomplete="off">
                </label>
                <input type="submit" class="search-submit" value="Search">
            </form>

            <a href="#0" title="Close Search" class="header__overlay-close">Close</a>

        </div>  <!-- end header__search -->

        <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>
        <nav class="header__nav-wrap">

            <h2 class="header__nav-heading h6">Navigate to</h2>
			
			<?php wp_nav_menu( array( 'menu_class' => 'header__nav', 'theme_location' => 'header-menu' ) ); ?>

            <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

        </nav> <!-- end header__nav-wrap -->

    </header> <!-- s-header -->	