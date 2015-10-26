<?php
get_header(); ?>

<div id="content">
	<section id="produtos">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="small">O Hotel</h1>
					<h5>Conheça o Beach Hills, o seu hotel em Porto Seguro.</h5>
				</div>
			</div><br>
		</div>
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
