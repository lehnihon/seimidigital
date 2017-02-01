<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package site
 */

?>
	<div id="footer" class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2>A Reforma Se</h2>
					<h5>Garantimos sua reforma dentro do prazo previsto e com a qualidade que você merece.</h5>
				</div>
			</div>
			<div class="row fot-botoes">
				<div class="col-md-6 text-right">
					<a href="<?php echo home_url( '/' )."contato"; ?>" class="btn-redondo btn-branco">Fale Conosco</a>
				</div>
				<div class="col-md-6 text-left">
					<span><a class="fot-sobre" href="<?php echo home_url( '/' )."sobre"; ?>">Saiba mais sobre a Reforma Se</a></span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="menu-footer clearfix">
						<div class="menu-op"><a href="<?php echo home_url( '/' )."reforma-residencial"; ?>">Reforma residencial</a></div>
						<div class="menu-op"><a href="<?php echo home_url( '/' )."reforma-apartamento"; ?>">Reforma em apartamento</a></div>
						<div class="menu-op"><a href="<?php echo home_url( '/' )."reforma-escritorio"; ?>">Reforma em escritório</a></div>								
						<div class="menu-op"><a class="btTerms" href="#">Termos de uso</a></div>
						<div class="menu-op"><a class="btPolitics" href="#">Política de privacidade</a></div>
						<div class="menu-op"><a href="<?php echo home_url( '/' )."contato"; ?>">Contato</a></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<ul class="redes_sociais_header">
		              <li class="youtube"><a target="_blank" href="#"></a></li>
		              <li class="instagram"><a target="_blank" href="#"></a></li>
		              <li class="twitter"><a target="_blank" href="#"></a></li>
		              <li class="facebook"><a target="_blank" href="https://www.facebook.com/Reforma-Se-1167940799992871/"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="copy">
		<div class="container">
			<div class="row copy-text">
				<div class="col-md-6 text-left text-footer">
					&copy; Copyright <?php echo date('Y') ?> - Todos os direitos reservados - ReformaSe
				</div>
				<div class="col-md-3 col-md-offset-3 text-left">
					<a target="_blank" href="https://www.facebook.com/seimidigital/?ref=ts&fref=ts">
						<img class="e-claro anima-rino" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/mei.jpg"; ?>" />
					</a>
				</div>				
			</div>
		</div><!-- .container -->
	</div><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
