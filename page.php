<?php
	include('header.php');
	include('sidebar.php');
?>
<section id="main">
<?php if (have_posts()) { while (have_posts()) { the_post(); ?>
	<article>
		<header><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1></header>
		<div class="content"><?php the_content(); ?></div>
	</article>
<?php } } ?>
</section>
<?php
	include('footer.php');
?>