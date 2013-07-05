		<footer>
			<span>
				<a href="?screentype=<?php if($screentype == 'mobile') { echo 'desktop'; } else { echo 'mobile'; } ?>">
				<?php if($screentype == 'mobile') { echo 'Klasické'; } else { echo 'Mobilní'; } ?> zobrazení</a> | 
			</span>
			<span>
				Powered by <a href="http://wordpress.org/">Wordpress</a>
				&copy; <a itemprop="url" href="http://czcampuseros.eu/">CZcampuseros</a>
				(<a href="mailto:info@czcampuseros.eu">info@czcampuseros.eu</a>)
			</span>
			<?php wp_footer(); ?>
		</footer>
	</body>
</html>