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
		<header id="header" role="banner">
		  <?php echo blaskan_header_structure(); ?>
		</header>

		<?php
		if( is_front_page() ){
			?>
			<div class="fb-like" data-href="https://www.facebook.com/flowcomab" data-send="true" data-width="250" data-show-faces="false" data-font="lucida grande"></div>
			<?php
		}
		else {
			?>
			<div class="fb-like" data-href="<?php echo get_permalink( get_the_ID() ); ?>" data-send="true" data-width="250" data-show-faces="false" data-font="lucida grande"></div>
			<?php
		}
		?>

<!-- / #header -->
		