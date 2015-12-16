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
						<?php the_content(); ?>
					</section>

				</article>
				<?php endwhile; endif;?>
			</main>
		</div>
	</div>
<?php get_footer(); ?>
