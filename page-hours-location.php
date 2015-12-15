<?php get_header(); ?>
	<div id="content">
		<div id="inner-content" class="wrap cf">
			<main id="main" class="m-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
					<header class="article-header">
						<h1 class="page-title"><?php the_title(); ?></h1>
					</header>

					<section class="entry-content cf" itemprop="articleBody">
						<div class="map">
							<!-- <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBRy029qxPDIT4hb6PoDX4BZ96eTrQ6NYA&q=place_id:3Tx75K-eGPL49C7DOR" width="360" height="360" frameborder="0" style="border:0" allowfullscreen></iframe> -->
							<iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBRy029qxPDIT4hb6PoDX4BZ96eTrQ6NYA&q=backyard+cafe,phnom+penh,cambodia" width="100%" height="360" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
						<?php the_content(); ?>
					</section>

				</article>
				<?php endwhile; endif;?>
			</main>
		</div>
	</div>
<?php get_footer(); ?>
