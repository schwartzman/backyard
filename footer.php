			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
				<div id="inner-footer" class="wrap cf">
					<p class="ticulars">
						<a href="/visit/"><?php foreach ( get_field('footer', 'options') as $f ): ?>
							<span><?=$f['text']?></span>
						<?php endforeach; ?></a>
					</p>
					<p class="octopus"><a href="https://instagram.com/backyardeats/" target="_blank"><i class="fa fa-instagram"></i></a><a href="https://facebook.com/backyardeats" target="_blank"><i class="fa fa-facebook-square"></i></a><a href="http://www.tripadvisor.com/Restaurant_Review-g293940-d7385168-Reviews-Backyard_Cafe-Phnom_Penh.html" target="_blank"><i class="fa fa-tripadvisor"></i></a></p>
				</div>
			</footer>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>
