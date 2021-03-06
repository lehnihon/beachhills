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
							<li><a href="<?php echo esc_url( home_url( '/' ))."hotel/"; ?>">O Hotel Beach Hills</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ))."localizacao/"; ?>">Localização</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ))."contato/"; ?>">Contato</a></li>
						</ul>
					</div>
					<div class="col-md-2">
						<strong>Acomodações</strong><br><br>
						<ul>
							<?php 
							$post = get_page_by_path( 'standard', OBJECT, 'post');
							setup_postdata( $post );
							?>
							<li><a href="<?php the_permalink(); ?>">Standard</a></li>
							<?php
							wp_reset_query(); 
							$post = get_page_by_path( 'luxo', OBJECT, 'post');
							setup_postdata( $post );
							?>
							<li><a href="<?php the_permalink(); ?>">Luxo</a></li>
							<?php
							wp_reset_query(); 
							$post = get_page_by_path( 'suite-master', OBJECT, 'post');
							setup_postdata( $post );
							?>
							<li><a href="<?php the_permalink(); ?>">Suíte Master</a></li>
							<?php wp_reset_query(); ?>
						</ul>
					</div>
					<div class="col-md-3">
						<strong>Receba nossas novidades</strong><br><br>
						<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 5 ); } ?>
					</div>
				</div><!-- .row -->
			</div><!-- .container -->			
		</div>
		<div class="copyrino">
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						&copy; <?php echo date('Y') ?> Hotel Beach Hills | <a target="_blank" href="http://agenciarino.com.br/">Site desenvolvido pela Agência Rino.</a>
					</div>
					<div class="col-md-2">
						<a target="_blank" href="http://agenciarino.com.br/"><img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo_rino.png"?>" />	</a>	
					</div>
				</div>	
			</div>	
		</div>
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
