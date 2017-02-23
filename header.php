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
<link rel="shortcut icon" type="image/jpeg" href="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Seimi Digital FlavIcon.jpg"; ?>" />
<?php wp_head(); ?>
<script>
new WOW().init();
</script>
</head>

<body <?php body_class(); ?>>
<div id="page">
	<nav id="principal">
		<div class="container">
			<div class="row">
				<div class="col-md-3 text-left">
					<a href="<?php echo home_url( '/' ); ?>"><img alt="logo" class="e-claro logo" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo.png"; ?>" /><img alt="logo" class="e-claro logob" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-small.png"; ?>" /></a>
					<div class="menu-responsivo">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
						</button>
						<ul class="dropdown-menu">
						<li><a href="#page">início</a></li
						><li><a href="#servicos">soluções</a></li
						><li><a href="#sobre">a agência</a></li
						><li><a href="#contato">fale conosco</a></li>
						</ul>								
					</div>
				</div>
				<div class="col-md-9">
					<div class="menu-header clearfix">
						<div id="redes">
						<ul class="redes_sociais_header">
			              <li class="youtube"><a target="_blank" href="https://www.youtube.com/channel/UCCwVJIRNKQgutNjvb-BT-tw"></a></li>
			              <li class="instagram"><a target="_blank" href="https://twitter.com/SeimiDigital"></a></li>
			              <li class="twitter"><a target="_blank" href="https://www.instagram.com/seimidigital/"></a></li>
			              <li class="facebook"><a target="_blank" href="https://www.facebook.com/seimidigital/"></a></li>
						</ul>
						</div>
						<div class="menu-op"><a class="hvr-underline-from-left" href="#contato">fale conosco</a></div>				
						<div class="menu-op"><a class="hvr-underline-from-left" href="#sobre">a agência</a></div>
						<div class="menu-op"><a class="hvr-underline-from-left" href="#servicos">soluções</a></div>
						<div class="menu-op"><a class="hvr-underline-from-left" href="#page">início</a></div>
					</div>
				</div>					
			</div>
		</div>
	</nav>
