<?php
	include('header.php');
	include('sidebar.php');
?>
<section id="main">
<?php if (have_posts()) { while (have_posts()) { the_post(); ?>
	<article itemscope itemtype="http://schema.org/Article">
		<header>
			<h1 class="title" itemprop="name"><?php the_title(); ?></h1>
			<div class="author" itemprop="author" style="display: none;"><?php echo get_the_author_firstname().' '.get_the_author_lastname(); ?></div>
			<div class="permalink" itemprop="url" style="display: none;"><?php the_permalink(); ?></div>
			<div class="date" temprop="datePublished"><?php the_time('j. n. Y') ?></div>
			<div class="clear"></div>
			<div class="category"><span class="desc">Kategorie: </span><?php the_category(', '); ?></div>
			<div class="tags"><span class="desc">Štítky: </span><?php the_tags('', ', ', ''); ?></div>
		</header>
		<div class="content"><?php the_content(); ?></div>
	</article>
<?php } } ?>
</section>
<?php
	include('footer.php');
?>
