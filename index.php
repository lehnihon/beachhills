<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package site
 */

get_header(); ?>

<div id="content">
	<section id="banner">
		<div class="container">
			<?php putRevSlider( "banner-index" ) ?>
			<div class="nav-buttons"></div>
		</div>
	</section>
	<section id="produtos">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Acomodações</h2>
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
		</div><!-- .container -->
	</section>
	<section id="info">
		<div class="container">
			<div class="row">
				<div class="col-md-6 info-left">
					<div class="info-content">
						<img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo_mid.png"?>" />
					</div>
				</div>
				<div class="col-md-6 info-right">
					<div class="info-content">
						<h1>HOTEL<br> BEACH HILLS</h1><br>
						<h5>O Hotel Beach Hills fica localizado na cidade de Porto Seguro, na Bahia</h5><br>
						<p>O Beach Hills conta com 180 apartamentos e fica em frente á praia da Taperapuan, em Porto Seguro.</p>
						<p>Próximo às principais baracas das praias mais badaladas da cidade, você com certeza terá uma ótima hospedagem.</p>
						<p>Pela manhã, um saboroso café da manhã lhe recepciona com alimentos frescos e variados, proporcionando um começo de dia ainda melhor.</p>
					</div>
				</div>
			</div>
		</div>
	</section> 
	
	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div><!-- #content -->

<?php get_footer(); ?>
