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
			<div class="row">
				<div class="col-md-12">			
					<?php putRevSlider( "banner-index" ) ?>
					<div class="nav-buttons"></div>
				</div>
			</div>
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
			</div><br><br>
			<div class="row">
				<div class="col-md-12">
					<h2>Localização</h2>
					<h5>Confira onde o Hotel Beach Hills fica localizado em Porto Seguro, na Bahia.</h5>
				</div>
			</div><br><br>
			<div class="row localizacao">
				<div class="col-md-4 text-left localizacao-left">
					<h2>Hotel Beach Hills</h2>
					<p>
						Avenida Beira Mar, 5.575<br>
						Porto Seguro - Bahia<br><br>
						<strong>Telefone</strong><br>
						73 3162-7600<br>
						<strong>Email</strong><br>
						reservas@hotelbeachhills.com.br
					</p>
				</div>
				<div class="col-md-8 videoWrapper localizacao-right" style="padding:0">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3827.4295720166865!2d-39.04584768549492!3d-16.40299544258652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x736945f5179b163%3A0x60d54befe6271f7!2sAv.+Beira+Mar%2C+5575%2C+Porto+Seguro+-+BA%2C+45810-000!5e0!3m2!1spt-BR!2sbr!4v1445969680772" width="600" height="400" frameborder="0" style="border:0; height:390px" allowfullscreen></iframe>
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
						<p>Próximo às principais barracas das praias mais badaladas da cidade, você com certeza terá uma ótima hospedagem.</p>
						<p>Pela manhã, um saboroso café da manhã lhe recepciona com alimentos frescos e variados, proporcionando um começo de dia ainda melhor.</p>
					</div>
				</div>
			</div>
		</div>
	</section> 
	
	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div><!-- #content -->

<?php get_footer(); ?>
