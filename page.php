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
									<?php the_content(); ?>

								</section> <?php // end article section ?>

								<?php if (is_page('cleanses')) : ?>
									<section class="entry-content cf cleanse-form">
										<p class="nb">All fields are required.</p>
										<div id="wufoo-p138y3v81e7t4n3">
											Please fill out our <a href="https://emmafountain.wufoo.com/forms/p138y3v81e7t4n3">online form</a>.
										</div>
										<script type="text/javascript">var p138y3v81e7t4n3;(function(d, t) {
										var s = d.createElement(t), options = {
										'userName':'emmafountain',
										'formHash':'p138y3v81e7t4n3',
										'autoResize':true,
										'height':'1085',
										'async':true,
										'host':'wufoo.com',
										'header':'hide',
										'ssl':true};
										s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'www.wufoo.com/scripts/embed/form.js';
										s.onload = s.onreadystatechange = function() {
										var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
										try { p138y3v81e7t4n3 = new WufooForm();p138y3v81e7t4n3.initialize(options);p138y3v81e7t4n3.display(); } catch (e) {}};
										var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
										})(document, 'script');</script>
									</section>

								<?php endif; ?>

							</article>

							<?php endwhile; endif; ?>

						</main>

				</div>

			</div>

<?php get_footer(); ?>
