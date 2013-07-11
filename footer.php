		<div class="clear"></div>
		<footer>
			<span class="viewswitcher">
<?php
	$url = currentURL();
	if($_SESSION['screentype'] == 'mobile') {
		echo '<a href="'.$url.'/?screentype=desktop">Klasické zobrazení</a>';
	} else {
		echo '<a href="'.$url.'/?screentype=mobile">Kompaktní zobrazení</a>';
	}
?>
			</span>
			<span class="wordpressfooter">
				Powered by <a href="http://wordpress.org/">Wordpress</a>
			</span>
			<div class="clear"></div>
			<span class="authorfooter">
				&copy; <a itemprop="url" href="http://pdostal.cz/">Pavel Dostál</a>
				(<a href="mailto:pdostal@pdostal.cz">pdostal@pdostal.cz</a>)
			</span>
			<?php wp_footer(); ?>
		</footer>
	</body>
</html>