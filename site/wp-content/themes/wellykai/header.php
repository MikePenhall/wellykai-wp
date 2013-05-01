<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="shortcut icon" href="http://wellykai.co.nz/wp-content/themes/wellykai/favicon.ico" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<!--[if gt IE 7]>
<link rel="stylesheet" type="text/css" href="/wp-content/themes/wellykai/IEstyle.css" />
<![endif]-->
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="/wp-content/themes/wellykai/IE7style.css" />
<![endif]-->
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<!--<script type="text/javascript" src="https://getfirebug.com/firebug-lite-debug.js"></script>-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">
	<header>
			<hgroup>
				<h1 id="SiteTitle"><a href="/"><img src="/wp-content/themes/wellykai/images/WellyKaiTitleBIG.png" title="Welly Kai - A real Wellington food blog written by real Wellington foodies." alt="Welly Kai - A real Wellington food blog written by real Wellington foodies." width="700" /></a></h1>
                <a href="/"><img src="/wp-content/themes/wellykai/images/welly-kai-logoSHADOW.png" title="Welly Kai" alt="Welly Kai" width="125" id="SiteLogo"/>
			</hgroup>

			<div id="navMenu">
           
    <ul>
        <li><img src="/wp-content/themes/wellykai/images/home.png" border="0" class="<?php if (is_page('Home')){ echo "current-hide";  } ?>"><a href="/"><span id="home-img" class="<?php if (is_page('Home')){ echo "current-page";  } ?>"><img src="/wp-content/themes/wellykai/images/homeOVER.png" border="none" align="top" /></span></a></li>        
        <li><img src="/wp-content/themes/wellykai/images/featured.png" border="0" class="<?php if (is_page('Featured')){ echo "current-hide";  } ?>"><a href="/featured"><span class="<?php if (is_page('Featured')){ echo "current-page";  } ?>"><img src="/wp-content/themes/wellykai/images/featuredOVER.png" border="none" align="top" /></span></a></li>
        <li><img src="/wp-content/themes/wellykai/images/about.png" border="0" class="<?php if (is_page('About')){ echo "current-hide";  } ?>"><a href="/about"><span class="<?php if (is_page('About')){ echo "current-page";  } ?>"><img src="/wp-content/themes/wellykai/images/aboutOVER.png" border="none" align="top" /></span></a></li>
        
    </ul>
</div>         
            
            
            
	</header><!-- #branding -->


	<div id="main">