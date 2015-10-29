<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package site
 */

?>

	<footer id="footer" role="contentinfo">
		<div class="footer-content">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<p>
							<strong>Sobre o Hotel Beach Hills</strong><br><br>
							O Hotel Beach Hills fica localizado na bela praia de Taperapuã, a 6 km do centro histórico de Porto Seguro, o hotel oferece uma grande piscina rodeada por jardins, um restaurante regional, WIFI e quartos com varanda.
						</p>
					</div>
					<div class="col-md-2 col-md-offset-1">
						<strong>Hotel Beach Hills</strong><br><br>
						<ul>
							<li><a href="#">O Hotel Beach Hills</a></li>
							<li><a href="#">Localização</a></li>
							<li><a href="#">Contato</a></li>
						</ul>
					</div>
					<div class="col-md-2">
						<strong>Acomodações</strong><br><br>
						<ul>
							<li><a href="#">Standard</a></li>
							<li><a href="#">Luxo</a></li>
							<li><a href="#">Suíte Master</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<strong>Receba nossas novidades</strong>
					</div>
				</div><!-- .row -->
			</div><!-- .container -->			
		</div>
		<div class="copyrino">
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						&copy; <?php echo date('Y') ?> Hotel Beach Hills | <a href="http://agenciarino.com.br/">Site desenvolvido pela Agência Rino.</a>
					</div>
					<div class="col-md-2">
						<img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo_rino.png"?>" />		
					</div>
				</div>	
			</div>	
		</div>
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
