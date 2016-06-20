<?php get_header(); ?>

	<?php
		$hose = @file_get_contents("https://api.instagram.com/v1/users/1642104389/media/recent/?count=12&access_token=1642104389.50e4340.7d6f6bdd16274fac963bdf0e5c821ccc");
		$json = json_decode($hose);
		$pix = $json->data;
    ?>

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

				                <?php if ($pix) : ?>
			                    <section class="pix">
			                    <?php
			                    foreach ($pix as $pic) :
			                        $cap = explode('#', $pic->caption->text); $cap = trim($cap[0]);
			                        ?>
			                        <div class="pic">
			                            <a href="<?=$pic->link?>" target="_blank"><img src="<?=$pic->images->low_resolution->url?>" alt=""></a>
			                            <?php if ($cap) { ?><span class="caption"><?=$cap?></span><?php } ?>
			                        </div>
			                    <?php endforeach; ?>
			                    </section>
				                <?php endif; ?>

                                <footer class="article-footer cf">
				                	<h2>See more on <a href="https://instagram.com/backyardeats/" target="_blank"><i class="fa fa-instagram"></i></a></h2>
				                </footer>

							</article>

							<?php endwhile; endif; ?>

						</main>

				</div>

			</div>

<?php get_footer(); ?>
