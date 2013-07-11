		<div class="clear"></div>
		<footer>
			<span class="viewswitcher">
				<a href="?screentype=<?php if($screentype == 'mobile') { echo 'desktop'; } else { echo 'mobile'; } ?>">
				<?php if($screentype == 'mobile') { echo 'Klasické'; } else { echo 'Mobilní'; } ?> zobrazení</a> | 
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