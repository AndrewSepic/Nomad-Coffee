<?php get_header(); ?>

<?php $headerImg = get_field( "custom_header_image" );
		if( $headerImg ) {
		 $imageUrl = $headerImg;
		} else {
		 $imageUrl = get_template_directory_uri() . '/assets/images/default-header.jpg';
	} ?>

	<div id="headerImg" style="background-image: url('<?php echo $imageUrl ?>')">
		<div class="logo">
				<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/nomad-logo.svg" alt="<?php bloginfo('name'); ?>"/></a>
		</div>
	</div>

	<div id="content">

		<div id="inner-content" class="row">

		    <main id="main" class="large-8 medium-8 columns" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'page' ); ?>

			    <?php endwhile; endif; ?>

			</main> <!-- end #main -->

		    <?php get_sidebar(); ?>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>