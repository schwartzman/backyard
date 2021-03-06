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

							$group = get_term_by('slug', $post->post_name, 'menu_taxonomy');

							$args = array(
								// this orderby option requires
								// https://wordpress.org/plugins/taxonomy-terms-order/
								'orderby' => 'term_order',
								'child_of' => $group->term_id
							);
							$subgroups = get_terms('menu_taxonomy', $args);

							foreach ($subgroups as $subgroup):
								$args = array(
									'post_type' => 'menu_item',
									'posts_per_page' => -1,
									'order' => 'ASC',
									'orderby' => 'menu_order',
									'tax_query' => array(
										array(
											'taxonomy' => 'menu_taxonomy',
											'field'    => 'id',
											'terms'    => $subgroup->term_id,
										)
									)
								);
								$mitems = new WP_Query($args);

								echo '<h2 class="h3">'.$subgroup->name.'</h2>';
								echo ($subgroup->description) ? '<p class="note-subgroup">'.$subgroup->description.'</p>' : '';
								while ($mitems->have_posts()) : $mitems->the_post();
									backyard\menu_item_print();
								endwhile;
							endforeach;

							wp_reset_postdata();
						?>
					</section>
                    <footer class="article-footer">
						<p><span>GF | Gluten Free</span><span>V | Vegan</span><span>R | Raw</span><span>F | Fitness</span></p>
					</footer>
				</article>
				<?php endwhile; endif;?>
			</main>
		</div>
	</div>
<?php get_footer(); ?>
