<?php
get_header();
get_template_part('index','banner'); ?>
<!-- Blog Section with Sidebar -->
<div class="page-builder">
	<div class="container">
		<div class="row">
			<!-- Blog Area -->
			<div class="<?php appointment_post_layout_class(); ?>" >
			<?php if( $post->post_content != "" )
			{ ?>
			<div class="blog-lg-area-left">
			<?php if( have_posts()) :  the_post();
			the_content(); 
			endif; ?>
			</div>
			<?php } comments_template( '', true ); // show comments ?>
			</div>
		</div>
	</div>
</div>

<!-- /Index Service -->			
<?php get_template_part('index', 'service'); ?>
<?php get_template_part('index', 'news'); ?>

<!-- /Blog Section with Sidebar -->
<?php get_footer(); ?>