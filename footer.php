	</div><!-- #main -->
	<div class="bg-bottom">
		<div class="inner">
			<div class="car-left"></div>
			<div class="car-right"></div>
		</div>
	</div>	
</div><!-- .wrap-inner -->
	<footer id="footer"  role="contentinfo">
		<div id="ajax-page" class="clearfix"></div>
		<div class="site-info container">
			<div class="span eight right break-on-mobile footer-text">
				<?php if ( get_field('footer_text')) :?>
					<p><?php the_field('footer_text')?></p>
				<?php endif; ?>
			</div>			
			<div class="span two break-on-mobile">
				<a href="http://alfaromeo.co.uk" target="_blank">
					<?php _e('&copy; 2014 Alfa Romeo'); ?>
				</a><br><br>
				<a href="http://alfaromeo.co.uk" target="_blank">
					<?php _e('www.alfaromeo.co.uk'); ?>	
				</a>
				
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>