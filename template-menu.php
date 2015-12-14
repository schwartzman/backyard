<?php
/**
 Template Name: Menu
**/
?>

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
						<?php
							the_content();
							$args = array(
								'post_type' => 'menu_item',
								'posts_per_page' => -1,
								'order' => 'ASC',
								'orderby' => 'menu_order',
								'tax_query' => array(
									array(
										'taxonomy' => 'meal_taxonomy',
										'field'    => 'slug',
										'terms'    => $post->post_name,
									)
								)
							);
							$mitems = new WP_Query($args);

							while ($mitems->have_posts()) : $mitems->the_post();
								the_title('<h2>', '</h2>');
								the_field('desc');
								// backyard\p($post);
							endwhile;

							wp_reset_postdata();

						?>
					</section>
				</article>
				<?php endwhile; endif;?>
			</main>
		</div>
	</div>
<?php get_footer(); ?>
