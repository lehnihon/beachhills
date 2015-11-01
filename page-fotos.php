<?php
get_header(); ?>

<div id="content">
	<section id="fotos-pag">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="small">Galeria de Fotos</h1>
					<h5>Confira as fotos do Hotel Beach Hills</h5>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-12">
					<?php 
					$args = array('posts_per_page' => 1,'post_type' => 'fotos');
					$query = new WP_Query( $args ); 
					?>	

					<?php if ( $query->have_posts() ) : ?>
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section> 
	
	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div><!-- #content -->

<?php get_footer(); ?>
