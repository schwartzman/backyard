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
										<div class="contact-form">
											<div id="wufoo-wxvatyd1u3dz4a">
											Please fill out our <a href="https://emmafountain.wufoo.com/forms/wxvatyd1u3dz4a">contact form</a>.
											</div>
											<script type="text/javascript">var wxvatyd1u3dz4a;(function(d, t) {
											var s = d.createElement(t), options = {
											'userName':'emmafountain',
											'formHash':'wxvatyd1u3dz4a',
											'autoResize':true,
											'height':'577',
											'async':true,
											'host':'wufoo.com',
											'header':'hide',
											'ssl':true};
											s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'www.wufoo.com/scripts/embed/form.js';
											s.onload = s.onreadystatechange = function() {
											var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
											try { wxvatyd1u3dz4a = new WufooForm();wxvatyd1u3dz4a.initialize(options);wxvatyd1u3dz4a.display(); } catch (e) {}};
											var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
											})(document, 'script');</script>
										</div>
									<?php endif; ?>
									<?php if (is_page('hours-location')) : ?>
										<div class="map">
											<iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBRy029qxPDIT4hb6PoDX4BZ96eTrQ6NYA&q=place_id:ChIJb1E4ODRRCTERJ8aZBoIoUbg" width="360" height="360" frameborder="0" style="border:0" allowfullscreen></iframe>
										</div>
									<?php endif; ?>
									<?php the_content(); ?>
								</section> <?php // end article section ?>

								<?php if (is_page('cleanses')) : ?>
									<section class="entry-content cf cleanse-form">
										<p class="nb">All fields are required.</p>
										<div id="wufoo-z1afgx0u19zpsxn">
										Pleae fill out our <a href="https://emmafountain.wufoo.eu/forms/z1afgx0u19zpsxn">cleanse order form</a>.
										</div>
										<script type="text/javascript">var z1afgx0u19zpsxn;(function(d, t) {
										var s = d.createElement(t), options = {
										'userName':'emmafountain',
										'formHash':'z1afgx0u19zpsxn',
										'autoResize':true,
										'height':'1651',
										'async':true,
										'host':'wufoo.eu',
										'header':'show',
										'ssl':true};
										s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'www.wufoo.eu/scripts/embed/form.js';
										s.onload = s.onreadystatechange = function() {
										var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
										try { z1afgx0u19zpsxn = new WufooForm();z1afgx0u19zpsxn.initialize(options);z1afgx0u19zpsxn.display(); } catch (e) {}};
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
