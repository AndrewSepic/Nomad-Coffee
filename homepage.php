<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
	<div id="videoHero">
		<video id="heroVideo" autoplay="autoplay" muted loop poster="<?php echo get_template_directory_uri() ?>/assets/images/herostill.jpg">
				<source src="<?php echo get_template_directory_uri() ?>/assets/images/nomad-coffee-video-bg.mp4" type="video/mp4">
				<!--<source src="http://patsdivecharters.com/wp-content/themes/patsdivecharters/assets/Diver_Sun_1.webm" type="video/webm">-->
			Your browser doesn't support HTML5 video. Here's a <a href="#">link</a> to download the video.
		</video>
		<div id="hero">
			<p><?php // the_field('hero_section_description'); ?></p>
			<h1 class="heroWelcome">Nomad Coffee is a mobile coffee Shop and espresso bar for hire.</h1>
			<div class="buttonWrap">
				<a class="button large find" href="#">Find Us<?php // the_field('button_text'); ?></a>
				<a data-open="orderModal" class="button large" href="#">Pre-Order Online<?php // the_field('button_text'); ?></a>
				<a class="button large fuschia" href="/weddingsevent">Hire Us<?php // the_field('button_text'); ?></a>
				<div class="reveal" id="orderModal" data-reveal>
					<h1 class="revealTitle">Sorry!</h1>
					<p class="lead">We have removed the online order functionality.</p>
					<p>Due to the intermittent cellular data connectivity in Essex Junction & the hardware restrictions we have to deal with we've decided to remove our pre-order option at Nomad Coffee - Essex Outpost. We understand that will impact some of our customers who have relied on that function but our inability to execute well and letting down customers due to factors beyond our control is not something we want to do. So we've decided to stop the program.  If you'd like to book larger orders of airpots of coffee for the office or espresso bar catering, please reach out to us at <a href="mailto:hello@nomadcoffeevt.com">hello@nomadcoffeevt.com</a> with a day's notice and we will be happy to help you.
						<button class="close-button" data-close aria-label="Close modal" type="button">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		</div>

	</div>

	<div id="content">

		<div id="inner-content" class="row">

		    <main id="main" class="large-12 medium-12 columns" role="main">

					<div class="row">
						<div class="large-12 columns center">

							<h3 class="description">Our mobile coffee shop is open 7 days a week <br>&amp; builds community in Essex Junction, VT.</h3>
						</div>
					</div>

					<div class="row top-margin locationHours">
						<div class="large-6 medium-6 columns center">
							<h3 class="underline">Location</h3>
							<p class="highlight">3 Main St. Essex Junction<br/>
								VT, 05452<br/>
								<a target="_blank" href="https://www.google.com/maps/place/Nomad+Coffee/@44.490657,-73.1125947,17z/data=!3m1!4b1!4m5!3m4!1s0x4cca7762c5bbfcc7:0xab32aea9473430db!8m2!3d44.490657!4d-73.110406">map/directions</a>
							</p>
						</div>
						<div class="large-6 medium-6 columns center">
							<h3 class="underline">Hours</h3>
							<p class="highlight">Monday - Friday<br/>7am - 3pm</p>
							<p class="highlight">Saturday - Sunday<br/>8am - 3pm</p>

							</p>
						</div>

					</div>

					<div class="row bottom-margin">
						<div class="large-12 columns center">

							<h3 class="description">Hey! Want to work in specialty coffee?<br> We're hiring.</h3>
							<p>Experience as a barista is preferred, but those who are serious about coffee and looking for a job<br> which will provide long term learning and education in the special coffee industry are encouraged to apply.</p>

							<a class="button large" href="/were-hiring">Apply</a>
						</div>
					</div>


			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

		<!-- Start Parallax -->
		<div class="parallaxAbout">
			<div class="row center">
				<div class="large-12 columns">
					<h2 class="about">About Nomad</h2>
					<span class="aboutExtra">A husband &amp; wife and their dream of quality espresso cuisine outside the cafe.</span>
				</div>
			</div>
			<div class="row top-margin">
				<div class="large-6 medium-6 columns">
					<h1 class="darkCallout">We're bringing great coffee to the wilds<br/>of Vermont</h1>
				</div>
				<div class="large-6 medium-6 columns">
					<p>Once upon a time Nomad was a 1970’s travel trailer. We rescued him from an apple orchard in Ithaca, NY. Nomad arrived in Vermont in the late fall of 2015. Our vision was to retrofit the camper but as we embarked on this mission things became clear, Nomad was to be stripped down to the chassis and custom built from the wheels up. In June we launched a crowdfunding campaign to help us get our startup funds and we were able to raise 1/3 of our total needed funds. Since then we've poured all our energy and resources into Nomad and have just opened for business. Come down to the 5 corners and say 'hello' and grab a great espresso. We look forward to meeting you!</p>
				</div>
			</div>
		</div>

		<!-- Blog Section -->
		<div class="row top-margin latest-news">
			<h2 class="blog">Latest News</h2>
			<?php
			$nomad_latest_loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 4, 'order' => 'DESC','ignore_sticky_posts' => true ) );

					if ( $nomad_latest_loop->have_posts() ) :

						while ( $nomad_latest_loop->have_posts() ) : $nomad_latest_loop->the_post();

						// Post output here
						?>
						<div class="large-3 medium-6 small-12 columns">
							<div class="latest-thumb">
								<?php
								if ( has_post_thumbnail() ) {
    								the_post_thumbnail( 'latest-thumb' );
									}
								?>
							</div>
							<h3 class="latest-title">
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
							</h3>
							<div class="excerpt"><?php the_excerpt(); ?></div>
						</div>

						<?php
						endwhile;

					endif;
					?>
		</div>

		<div class="row">
			<!-- SOCIAL Section -->
			<div class="large-10 large-offset-1 medium-6 columns">
				<?php // Put insta code in here ?>
			</div>


		</div>



	</div> <!-- end #content -->

<?php get_footer(); ?>
