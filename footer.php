<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package site
 */

?>
	<div id="contato">
		<div class="container">
			<div class="col-md-12 animated fadeInUp wow">
				<?php echo do_shortcode('[contact-form-7 id="5" title="Contato"]'); ?>
			</div>
		</div>
	</div>
	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center animated fadeInUp wow">
					<div class="menu-footer clearfix">
						<div class="menu-op"><a href="#page">início</a></div>
						<div class="menu-op"><a href="#servicos">nossas soluções</a></div>
						<div class="menu-op"><a href="#sobre">a agência</a></div>						
						<div class="menu-op"><a href="#contato">fale conosco</a></div>
					</div>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-md-12 text-center animated fadeInUp wow">
					<div id="redes_footer">
						<ul class="redes_sociais_footer">
			              <li class="youtube"><a target="_blank" href="https://www.facebook.com/seimidigital/"></a></li>
			              <li class="instagram"><a target="_blank" href="#"></a></li>
			              <li class="twitter"><a target="_blank" href="https://www.instagram.com/seimidigital/"https://www.instagram.com/seimidigital/></a></li>
			              <li class="facebook"><a target="_blank" href="#"></a></li>
						</ul>
					</div>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-md-12 text-center text-footer fadeInUp wow">
					&copy; Copyright <?php echo date('Y') ?> - Esse site foi desenvolvido com muito carinho e muito, mas muito café!
				</div>
			</div>
		</div>
	</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
