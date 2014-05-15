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
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
	<script type="text/javascript" src="//use.typekit.net/lgv1ymo.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.imagefit-0.2.js"></script>


<meta charset="<?php bloginfo( 'charset' ); ?>" />

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<!-- <meta name = "viewport" content = "initial-scale = 1.0"> -->
<!-- <meta name="apple-mobile-web-app-status-bar-style" content="black"> -->
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
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-36065770-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<!-- <link rel="stylesheet" type="text/css" media="all" href="<?php// bloginfo( 'stylesheet_url' ); ?>" /> -->
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/tease.css" />
<!-- <link rel="stylesheet" media="all and (orientation:landscape)" href="<?php echo get_template_directory_uri(); ?>/css/landscape.css" /> -->
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
<!--[if lt IE 9]>-->
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<!-- <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script> -->
<!--<![endif]-->
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

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.fullscreenr.js"></script>


<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/tease.js"></script>
</head>

<body <?php body_class(); ?>>
<!-- <div id="page" class="hfeed"> -->
	
	<div id="header">
		<div class="header-cont">
			<a id="logo" href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" /></a>
			<div class="small-cont desktop">
				<!-- <div class="freight-medium header-text">charleston's first<br/> blow dry bar</div> -->
				<div id="nav"><?php wp_nav_menu( array( 'menu' => 'Top Nav' ) ); ?></div>
				<div class="bottom-menu">
					<div class="dryer-img"><img src="<?php echo get_template_directory_uri(); ?>/images/blow-dry.png" /></div>
					<!-- <div class="freight-medium header-text">no appointment needed</div> -->
					<div class="freight-medium address hours">
						<!-- Mon Closed</br> -->
						Wednesday 10-6</br>
						Thurs to Sat  10-7</br>
						Sunday  12-5
					</div>
					<div class="freight-medium address">
						430 king street<br/> charleston sc 29403<br/>
						843.724.9493<br/><a href="mailto:info@teaseblowdrybar.com">info@teaseblowdrybar.com</a>
					</div>
					<a href="http://www.facebook.com/TeaseDryBar" target="_blank" class="social-links" id="facebook"></a>
					<a href="https://twitter.com/TeaseBlowDryBar" target="_blank" class="social-links" id="twitter"></a>
					<a href="http://www.pinterest.com/teaseblowdrybar/" target="_blank" class="social-links" id="pinterest"></a>
					<a href="http://instagram.com/teaseblowdrybar" target="_blank" class="social-links" id="instagram"></a>
					<a href="http://cobblehilldigital.com" target="_blank" class="site-credit">site by cobble hill</a>
				</div>
			</div>
		</div>
		<div id="mobile-tab" class="mobile"></div>
	</div>
	


	<!-- <div id="main"> -->
