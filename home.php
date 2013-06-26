<?php
	include("mobile_detect.php");
	$detect = new Mobile_Detect();
	$layout = trim(htmlspecialchars(htmlspecialchars_decode($_GET["layout"], ENT_NOQUOTES), ENT_NOQUOTES));
	if ( $layout !== 'mobile' and $layout !== 'desktop' ) {
		if ( $detect->isMobile() or $detect->isTablet() ) {
			$layout = "mobile";
		} else {
			$layout = "desktop";
		}
	}
?>
<?php include("header.php") ?>
<?php include("sidebar.php"); ?>
		<section id="main">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article>
				<h1><a href="<?php the_permalink(""); ?>"><?php the_title(); ?></a></h1>
				<?php the_content(__('(Whole article...)')); ?>
				<p class="date">Posted on <?php the_time('F jS, Y, h:m A') ?></p>
			</article>
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</section>
<?php include("footer.php"); ?>