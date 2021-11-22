				<footer class="footer" role="contentinfo">

					<!-- Footer Widgets if active -->
					<?php if ( is_active_sidebar( 'footer1' ) ) : ?>
						<div class="row footerWidgets">
							<?php dynamic_sidebar('footer1'); ?>
							<?php dynamic_sidebar('footer2'); ?>
							<!-- contact form Modal -->
							<div class="reveal" id="contactModal" data-reveal>
							  <h1 class="revealTitle">Get In Touch</h1>
							  <p class="lead">We'd love to hear you!</p>
								<p>Want to hire us for an event?  <a href="/weddingsevent">Go here instead.</a>
								 <?php echo do_shortcode('[contact-form-7 id="49" title="Contact form 1"]'); ?>

							  <button class="close-button" data-close aria-label="Close modal" type="button">
							    <span aria-hidden="true">&times;</span>
							  </button>
							</div>
						</div>
					<?php  endif; ?>

					<div id="inner-footer" class="row">
						<div class="large-12 medium-12 columns">
							<nav role="navigation">
	    						<?php joints_footer_links(); ?>
	    					</nav>
	    				</div>
						<div class="large-12 medium-12 columns">
							<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Made with &hearts; by <a href="http://thinkupdesign.ca">Think Up!</a></p>
						</div>
					</div> <!-- end #inner-footer -->
				</footer> <!-- end .footer -->
			</div>  <!-- end .main-content -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-93202151-1', 'auto');
		  ga('send', 'pageview');

		</script>
	</body>
</html> <!-- end page -->