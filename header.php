<?php
	function blogname() {
		if ( is_home() ) {
			echo "";
/*		} elseif ( is_404() ) {
	        echo 'Nenalezeno | ';
	    } elseif ( is_category() ) {
	        echo ' | '; wp_title('');
	    } elseif ( is_search() ) {
	        echo ' | ';
	    } elseif ( is_day() || is_month() || is_year() ) {
	        echo ' | '; wp_title('');
*/	    } else {
	        echo " | " . wp_title('');
	    } bloginfo('name');
	}
?>
<!doctype html>
<html lang="cs">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php blogname(); ?></title>
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="author" content="Pavel Dostál">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS feed" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="all" />
<?php if ( $layout == "mobile" ) { ?>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/handheld.css" media="all" />
<?php } ?>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/print.css" media="print" />
		<link rel="stylesheet" href="http://global.pdostal.cz/flags/style.css" media="all" />

		<meta name="viewport" content="width=device-width<?php if ($layout == "mobile" ) { echo ", minimum-scale=1.0, maximum-scale=1.0"; } ?>" />

		<script src="<?php bloginfo('template_url'); ?>/hideandshow.js"></script>

		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-28270341-3']);
		  _gaq.push(['_trackPageview']);
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
	</head>
	<body>
		<header>
			<h1><a href="<?php bloginfo("url"); ?>"><?php bloginfo('name'); ?></a></h1>
		</header>
