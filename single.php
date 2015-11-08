<?php
/**
 * The template for displaying all single posts.
 *
 * @package site
 */

get_header(); ?>

<div id="content">
	<section id="produto-single">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php while ( have_posts() ) : the_post(); ?>

						<?php the_content(); ?>

					<?php endwhile; // End of the loop. ?>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->		
	</section>

	<section id="produtos">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Acomodações</h2>
					<h5>São 180 apartamentos nas categorias Standard, Luxo e Suíte Master</h5>
				</div>
			</div><br>
			<?php 
			global $post;
			$slug = get_post( $post )->post_name;
			?>
			<div class="row">
				<?php if($slug != 'standard'):?>
				<div class="col-md-4 col-md-offset-2">
					<?php 
					$post = get_page_by_path( 'standard', OBJECT, 'post');
					setup_postdata( $post );
					include(locate_template('template-parts/content-acomodacoes.php'));
					wp_reset_query();
					?>
				</div>
				<?php endif; ?>
				<?php if($slug != 'luxo'):?>
				<div class="col-md-4 <?php if($slug == 'standard'):?> col-md-offset-2 <?php endif; ?>">
					<?php 
					$post = get_page_by_path( 'luxo', OBJECT, 'post');
					setup_postdata( $post );
					include(locate_template('template-parts/content-acomodacoes.php'));
					wp_reset_query();
					?>
				</div>
				<?php endif; ?>
				<?php if($slug != 'suite-master'):?>
				<div class="col-md-4">
					<?php 
					$post = get_page_by_path( 'suite-master', OBJECT, 'post');
					setup_postdata( $post );
					include(locate_template('template-parts/content-acomodacoes.php'));
					wp_reset_query();
					?>
				</div>
				<?php endif; ?>
			</div>
		</div><!-- .container -->
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div><!-- #content -->

<?php get_footer(); ?>
