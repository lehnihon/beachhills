<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package site
 */

get_header(); ?>

<div id="content">
	<section id="localizacao-pag">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="small">Localização</h2>
					<h5>O Hotel Beach Hills fica em Porto Seguro, na Bahia.</h5>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-12 videoWrapper">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3827.4295720166865!2d-39.04584768549492!3d-16.40299544258652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x736945f5179b163%3A0x60d54befe6271f7!2sAv.+Beira+Mar%2C+5575%2C+Porto+Seguro+-+BA%2C+45810-000!5e0!3m2!1spt-BR!2sbr!4v1445969680772" width="600" height="400" frameborder="0" style="border:0;" allowfullscreen></iframe>
				</div>
			</div>
			<div class="row localizacao-barra text-left">
				<div class="col-md-4">
					<p>
						<strong>Endereço</strong>
						<br>Avenida Beira Mar, 5.575
						<br>Porto Seguro - Bahia
					</p>
				</div>
				<div class="col-md-4">
					<p>
						<strong>Telefone</strong>
						<br>73 3162-7600
					</p>
				</div>
				<div class="col-md-4">
					<p>
						<strong>Email</strong>
						<br>reservas@hotelbeachhills.com.br
					</p>
				</div>
			</div>
		</div>		
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div><!-- #content -->


<?php get_footer(); ?>
