<?php
if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)){
    header('X-UA-Compatible: IE=edge,chrome=1');
}
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html itemscope itemtype="http://schema.org/WebPage <?php language_attributes(); ?> class="no-js lt-ie9 ie8"> <![endif]-->
<!--[if IE 9 ]><html itemscope itemtype="http://schema.org/WebPage <?php language_attributes(); ?> class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html itemscope itemtype="http://schema.org/WebPage" <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>//apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>//apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>//apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>//apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>//apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>//apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>//apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>//apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>//apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>//favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>//favicon-194x194.png" sizes="194x194">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>//favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>//android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>//favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>//manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/mstile-144x144.png">
<meta name="theme-color" content="#ffffff">
<link href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" rel="stylesheet" media="all" />
<link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/d79e8bfd-5846-4313-8e1b-940e5c8f9d0f.css"/>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php echo '<link rel="canonical" href="' . home_url() . '" />'; echo "\n" ?>
<?php wp_head(); ?>


	<!-- add in if giving USA 2015 stuff here -->
		
		<?php
if ( is_attachment() ) { ?>
<meta property="og:title" content="
				<?php 
		$url = (get_permalink( $post->id ));
		if (strpos ($url, 'giving-usa-2015') !== false) {
			?>Giving USA 2015 -<?php } ?>
			
			<?php the_title();?>" />
			
			
			
<meta property="og:description" content=" <?php $post_id = ($post->id);
$post_object = get_post( $post_id );
echo $post_object->post_content; ?>">		

<meta property="og:image" content="<?php echo wp_get_attachment_url( $post_id ); ?>">	

			
			<?php } ?>
			
			
		<!-- end giving USA 2015 stuff here -->

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=245867275449045";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</head>
<body <?php body_class(); ?>>
	
	<div id="fb-root"></div>
	
<div class="container">
	<div id="body__overlay" class="body__overlay"></div>
	<a href="#main" class="skip-nav assistive-text"><?php _e('Skip to main Content', DOMAIN); ?></a>
	<header class="body__header" itemscope itemtype="http://schema.org/WPHeader" role="banner">
	    <div class="body__content">
	        <?php get_template_part( 'template-parts/content/header/logo' ); ?>
	        <?php get_template_part( 'template-parts/content/header/mobilebutton' ); ?>
	    </div>
	</header>
	<?php get_template_part( 'template-parts/content/header/menu' ); ?>