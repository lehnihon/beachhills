<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package site
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page">
	<header id="header">
		<div class="container">
			<nav id="site-navigation" class="row" role="navigation">
				<div class="logo-header col-md-4"><a href="<?php echo esc_url( home_url( '/' )); ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo_header.png"; ?>"/></a></div>
				<div class="wrap-header col-md-7 col-md-offset-1">

					<div id="search-fields" class="busca clearfix">
                        <input type="hidden" id="idDestino" value="">
                        <div class="colField">
                            Entrada<br>
                            <input type="text" id="idDtEntrada" placeholder="dd/mm/aaaa">
                        </div>
                        <div class="colField">
                            Saída<br>
                            <input type="text" id="idDtSaida" placeholder="dd/mm/aaaa">
                        </div>
                        <div class="colField">
                            <br>
                            <input class="botao effect-bright" id="btnBuscar" type="submit" value="Buscar">
                        </div>
					</div>
					<ul id="menu-header" class="clearfix">
						<li><a href="<?php echo esc_url( home_url( '/' ))."hotel/"; ?>">O Hotel</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ))."acomodacoes/"; ?>">Acomodações</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ))."fotos/"; ?>">Galeria de Fotos</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ))."localizacao/"; ?>">Localização</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ))."contato/"; ?>">Contato</a></li>
					</ul>

				</div>
			</nav><!-- #site-navigation -->
		</div><!-- .container -->
	</header><!-- #masthead -->

