<!DOCTYPE html>
<!--[if IEMobile 7 ]><html id="blaskan" class="no-js iem7" <?php language_attributes(); ?>><![endif]-->
<!--[if lt IE 7 ]><html id="blaskan" class="no-js ie6" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 7 ]><html id="blaskan" class="no-js ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8 ]><html id="blaskan" class="no-js ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 9 ]><html id="blaskan" class="no-js ie9" <?php language_attributes(); ?>><![endif]-->
<!--[if (gt IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html id="blaskan" class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php blaskan_head_title(); ?></title>
	<?php wp_head(); ?>
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
</head>
<body <?php body_class(); ?>>
<script type="text/javascript">

	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-10747578-1']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();

</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/sv_SE/all.js#xfbml=1&appId=408187365893048";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
<?php echo blaskan_top(); ?>
<div id="site">
	<div id="wrapper">

		<?php
		$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
		$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
		$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
		$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
		$wphone = strpos($_SERVER['HTTP_USER_AGENT'],"Windows Phone");

		if (is_front_page() && ( $iphone || $android || $palmpre || $berry || $wphone == true ) ){
			?>
			<a id="call_button" href="<?php echo get_template_directory_uri(); ?>/call/" style="display:none; text-decoration: none;"><div id="mobile_call">Mobile and want to call us?</div></a>
			<?php
		}
		?>

		<header id="header" role="banner">
			<div>
				<div style="float:left;">
					<a href="/" title="Hem till Flowcom AB"><img src="<?php echo get_template_directory_uri(); ?>/img/flowcom_logo.gif" alt="Flowcom Logo" /></a>
				</div>
				<div style="float:right">
					<a href="/" title="Hem till Flowcom AB"><img id="roller_image" src="<?php echo get_template_directory_uri(); ?>/img/transparent.gif" alt="Transparent" /></a>
				</div>
				<div style="clear:both"></div>
			</div>

		  <?php //echo blaskan_header_structure(); ?>

			<?php echo blaskan_primary_nav(); ?>

		</header>

		<?php

		global $blaskan_options;

		if( is_front_page() ){
			?>
			<div class="fb-like" data-href="http://www.facebook.se/flowcomab" data-send="true" data-width="<?php echo $blaskan_options['header_min_width']; ?>" data-show-faces="false" data-font="lucida grande"></div>
			<?php
		}
		else {
			?>
			<div class="fb-like" data-href="<?php echo get_permalink( get_the_ID() ); ?>" data-send="true" data-width="<?php echo $blaskan_options['header_min_width']; ?>" data-show-faces="false" data-font="lucida grande"></div>
			<?php
		}
		?>

<!-- / #header -->
		