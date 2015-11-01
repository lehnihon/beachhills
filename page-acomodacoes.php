<?php
get_header(); ?>

<div id="content">
	<section id="produtos">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="small">Acomodações</h1>
					<h5>São 180 apartamentos nas categorias Standard, Luxo e Suíte Master</h5>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-4">
					<?php 
					$post = get_page_by_path( 'standard', OBJECT, 'post');
					setup_postdata( $post );
					include(locate_template('template-parts/content-acomodacoes.php'));
					wp_reset_query();
					?>
				</div>
				<div class="col-md-4">
					<?php 
					$post = get_page_by_path( 'luxo', OBJECT, 'post');
					setup_postdata( $post );
					include(locate_template('template-parts/content-acomodacoes.php'));
					wp_reset_query();
					?>
				</div>
				<div class="col-md-4">
					<?php 
					$post = get_page_by_path( 'suite-master', OBJECT, 'post');
					setup_postdata( $post );
					include(locate_template('template-parts/content-acomodacoes.php'));
					wp_reset_query();
					?>
				</div>
			</div>
		</div>
	</section>
	
	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div><!-- #content -->

<?php get_footer(); ?>
