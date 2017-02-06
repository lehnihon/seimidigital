<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package site
 */

?>
	<div class="section">
		<div id="contato">
			<div class="container">
				<div class="col-md-12">
					<?php echo do_shortcode('[contact-form-7 id="5" title="Contato"]'); ?>
				</div>
			</div>
		</div>
		<div id="footer">
			<div class="container">
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
						<div class="separador"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center text-footer">
						&copy; Copyright <?php echo date('Y') ?> - Esse site foi desenvolvido com muito carinho e muito, mas muito café!
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
