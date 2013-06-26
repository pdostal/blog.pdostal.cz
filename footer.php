		<footer>
			<span>
				Switch to
				<?php if($layout == 'mobile') { ?>
				<a href="?layout=desktop">desktop</a>
				<?php } else { ?>
				<a href="?layout=mobile">mobile</a>
				<?php } ?>
				version
				<?php if($layout == 'desktop') { echo " | "; } ?>
			</span>
			<span>
				Powered by <a href="http://wordpress.org/">Wordpress</a>
				&copy; <a itemprop="url" href="http://pdostal.cz/">Pavel Dostál</a>
				( <a href="mailto:pdostal@pdostal.cz">pdostal@pdostal.cz</a> )
			</span>
		</footer>
	</body>
</html>