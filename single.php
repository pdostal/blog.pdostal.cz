<?php
	include('header.php');
	include('sidebar.php');
?>
<section id="main">
<?php if (have_posts()) { while (have_posts()) { the_post(); ?>
	<article>
		<header>
			<h1><?php the_title(); ?></h1>
			<div class="date"><span class="desc">Datum: </span><?php the_time('j. n. Y v G:m') ?></div>
			<div class="category"><span class="desc">Kategorie: </span><?php the_category(', '); ?></div>
			<div class="tags"><span class="desc">Štítky: </span><?php the_tags('', ', ', ''); ?></div>
		</header>
		<div class="content"><?php the_content(__('(Celý článek...)')); ?></div>
		<?php comments_template( '', true ); ?>
	</article>
<?php } } else { ?>
	<article>
		<p><?php _e('Žádné články neodpovídají zadaným kritériím.'); ?></p>
	</article>
<?php } ?>
</section>
<?php
	include('footer.php');
?>