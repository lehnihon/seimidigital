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
<link rel="shortcut icon" type="image/jpeg" href="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/fav.jpg"; ?>" />
<?php wp_head(); ?>
<script>
new WOW().init();
</script>
</head>

<body <?php body_class(); ?>>
<div id="page">
	<nav id="redes">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-md-offset-9">
					<ul class="redes_sociais_header">
		              <li class="youtube"><a target="_blank" href="#"></a></li>
		              <li class="instagram"><a target="_blank" href="#"></a></li>
		              <li class="twitter"><a target="_blank" href="#"></a></li>
		              <li class="facebook"><a target="_blank" href="https://www.facebook.com/Reforma-Se-1167940799992871"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	<nav id="principal">
		<div class="container">
			<div class="row">
				<div class="col-md-3 text-left">
					<a href="<?php echo home_url( '/' ); ?>"><img alt="logo" class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-top.jpg"; ?>" /></a>
				</div>
				<div class="col-md-9">
					<div class="menu-responsivo">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
						</button>
						<ul class="dropdown-menu">
						<li><a href="<?php echo home_url( '/' ); ?>">Home</a></li
						><li><a href="<?php echo home_url( '/' )."sobre"; ?>">Quem Somos</a></li
						><li><a href="<?php echo home_url( '/' )."reformas"; ?>">Reformas</a></li
						><li><a href="<?php echo home_url( '/' )."contato"; ?>">Contato</a></li
						><li><a href="<?php echo home_url( '/' )."reformas"; ?>">Quero um Orçamento</a></li>
						</ul>								
					</div>						
					<div class="menu-header clearfix">
						<div class="menu-op"><a class="criar-conta" href="<?php echo home_url( '/' )."reformas"; ?>">Quero um Orçamento</a></div>
						<div class="menu-op"><a href="<?php echo home_url( '/' )."contato"; ?>">Contato</a></div>								
						<div class="menu-op"><a href="<?php echo home_url( '/' )."reformas"; ?>">Reformas</a></div>
						<div class="menu-op"><a href="<?php echo home_url( '/' )."sobre"; ?>">Quem Somos</a></div>
						<div class="menu-op"><a href="<?php echo home_url( '/' ); ?>">Home</a></div>
					</div>
				</div>					
			</div>
		</div>
	</nav>
