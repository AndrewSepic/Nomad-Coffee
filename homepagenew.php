<?php
/*
Template Name: New Homepage
*/


get_header(); ?>
		<div class="locations">

			<?php
				if( have_rows('location') ) :

					while( have_rows('location') ) : the_row();

						$name = get_sub_field('location_name');
						$image = get_sub_field('location_image');
						$address = get_sub_field('location_address');
						$hours = get_sub_field('location_hours');
						$online_order = get_sub_field('order_online_link'); ?>

						<div class="location">
							<div class="location-image">
								<img src="<?= $image['url']; ?>" alt="<?= $image['alt'];?>" />
							</div>
							<h2><?= $name; ?></h2>
							<div class="address">
								<h3>Address</h3>
								<?= $address; ?>
							</div>
							<div class="hours">
								<h3>Hours</h3>
								<?= $hours; ?>
							</div>
							<?php
								if($online_order): ?>
									<a class="online-order" href="<?= $online_order['url']; ?>" target="<?= $online_order['target'] ?>"><?= $online_order['title']?></a>
								<? endif; ?>
						</div>
						<?php
					endwhile;

				else:
					// silence is golden

				endif; ?>


			<!-- <div id="eo" class="large-6 medium-6 small-12 columns">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/eo.svg" alt="Nomad Coffee - Essex Outpost" />
				<div class="row top-margin locationHours">
					<div class="large-6 medium-6 small-12 columns center">
						<h3 class="underline">Location</h3>
						<p class="highlight">3 Main St, Essex Junction VT<br/>
							<a target="_blank" href="https://www.google.com/maps/place/Nomad+Coffee/@44.490657,-73.1125947,17z/data=!3m1!4b1!4m5!3m4!1s0x4cca7762c5bbfcc7:0xab32aea9473430db!8m2!3d44.490657!4d-73.110406">map/directions</a>
						</p>
					</div>
					<div class="large-6 medium-6 small-12 columns center">
						<h3 class="underline">Hours</h3>
						<p class="highlight">7 Days/week : 7:30 - 2pm</p>
					</div>
				</div>
				<a class="button large" href="http://nomadcoffeevt.com/essex">Order Online </a>
			</div> -->

		</div>

	<div id="content">

		<div id="inner-content" class="row">

		    <main id="main" class="large-12 medium-12 columns" role="main">

					<div class="row">
						<div class="large-12 columns center welcome">

							<h1>2.5 locally owned cafe's<h1>
							<h2>Powered by awesome people</h2>
							<h3 class="description">Since 2016</h3>
						</div>
					</div>

					<!-- <div class="row bottom-margin">
						<div class="large-12 columns center job">

							<h3 class="description">Hey! Want to work in specialty coffee?<br> We're hiring.</h3>
							<p>Experience as a barista is preferred, but those who are serious about coffee and looking for a job<br> which will provide long term learning and education in the specialty coffee industry are encouraged to apply.</p>

							<a class="button large" href="/were-hiring">Apply</a>
						</div>
					</div> -->


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
			<h2 class="blog">Old <strike>Latest</strike> News</h2>
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
