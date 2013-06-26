<?php
	register_sidebar(array(
    	'name' => 'sidebar',
		'id' => 'sidebar',
        'before_widget' => '<div id="%2$s">' . "\n\t\t\t\t",
        'after_widget' => "\t\t\t" . '</div>' . "\n",
        'before_title' => '<h1>',
        'after_title' => '</h1>' . "\n\t\t\t"
    ));
?>