		<section id="sidebar">
			<?php // if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar') ) : ?>
			<h1><a href="http://pdostal.cz/">Home</a></h1>

			<h1><a href="#" onclick="javascript:HideAndShow('sidebarcategories')"><?php _e('Kategorie'); ?></a></h1>
			<ul id="sidebarcategories">
				<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
			</ul>

			<h1><a href="#" onclick="javascript:HideAndShow('sidebarlinks')"><?php _e("Odkazy"); ?></a></h1>
			<ul id="sidebarlinks">
			<?php wp_list_bookmarks( array('categorize' => 0, 'limit' => -1, 'category_name' => 'links', 'title_li' => 0) ); ?>
			</ul>

			<h1><a href="#" onclick="javascript:HideAndShow('sidebararticles')"><?php _e("Články"); ?></a></h1>
			<ul id="sidebararticles">
			<?php
				$recent_posts = wp_get_recent_posts(array('post_status' => 'publish'));
				foreach( $recent_posts as $recent ){
					echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.$recent["post_title"].'" >' .   $recent["post_title"].'</a> </li> ';
				}
			?>
			</ul>
<!--
			<h1><a href="#" onclick="javascript:HideAndShow('sidabararchive')"><?php _e('Archiv'); ?></a></h1>
			<ul id="sidabararchive">
				<?php wp_get_archives('type=monthly&limit=15'); ?>
			</ul>
-->
		<?php // endif; ?>
		</section>
