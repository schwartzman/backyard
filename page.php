<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

								</header> <?php // end article header ?>

								<section class="entry-content cf" itemprop="articleBody">
									<?php if (is_page('contact')) : ?>
										<div class="contact-form form-outer">
											<?=backyard\form('contact', 'wxvatyd1u3dz4a', '577')?>
										</div>
									<?php endif; ?>
									<?php if (is_page('visit')) : ?>
										<div class="map">
											<iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBRy029qxPDIT4hb6PoDX4BZ96eTrQ6NYA&q=place_id:ChIJb1E4ODRRCTERJ8aZBoIoUbg" width="360" height="360" frameborder="0" style="border:0" allowfullscreen></iframe>
										</div>
									<?php endif; ?>
									<?php
									if (!is_page('home')):
										the_content();
									else:
										$by_acf = get_fields(); ?>
										<h2><span><?=$by_acf['slogan_1']?></span> <span><?=$by_acf['slogan_2']?></span>
										<?php if ($by_acf['announce_1']): ?>
											<span class="blam"><span><?=$by_acf['announce_1']?></span>
											<?php if ($by_acf['announce_2']): ?> <span><?=$by_acf['announce_2']?></span><?php endif; ?>
											</span>
										<?php endif; ?>
										</h2>
								<?php endif; ?>
								</section> <?php // end article section ?>

								<?php if (is_page('cleanses')) : ?>
									<section class="entry-content cf cleanse-form form-outer">
										<p class="nb">All fields are required.</p>
										<?=backyard\form('cleanse', 'z1afgx0u19zpsxn', '1651')?>
									</section>
								<?php endif; ?>

								<?php if (is_page('lunchboxes')) : ?>
									<section class="entry-content cf lunchbox-form form-outer">
										<p class="nb">All fields are required.</p>
										<?=backyard\form('lunchbox', 'zkz2vaj0ski000', '1124')?>
									</section>
								<?php endif; ?>

								<?php if (is_page('cakes')) : ?>
									<section class="entry-content cf cake-form form-outer">
										<p class="nb">All fields are required.</p>
										<?=backyard\form('cake', 'z1h54zdr0wrfve2', '965')?>
									</section>
								<?php endif; ?>

							</article>

							<?php endwhile; endif; ?>

						</main>

				</div>

			</div>

<?php get_footer(); ?>
