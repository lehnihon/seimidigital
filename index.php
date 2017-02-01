<?php
/**
 * @package site
 */

get_header(); ?>

<div id="topo" class="container-fluid section">
	<div class="row">		
		<?php putRevSlider( "banner-index" ) ?>		
	</div>
</div>

<div id="sobre-home" class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 animated fadeInUp wow">
				<h5>Somos uma agência de marketing digital especializada em soluções sob medida, 
				oferecemos soluções em marketing, web, comunicação visual, geração de conteúdo, performance e design.</h5>
			</div>
		</div><br><br><br>
		<div class="row">
			<div class="col-md-4 text-center">
				<img alt="logo" class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes1.jpg"; ?>" />
				<h4>Comunicação visual</h4>
				<p>Aplicação da marca e definição de identidade visual para todos os tipos de impressos.</p>
				<ul>
					<li>Identidade visual</li>
					<li>Impressos</li>
					<li>Embalagens personalizadas</li>
					<li>Apresentação em Power Point</li>
				</ul>
			</div>
			<div class="col-md-4 text-center">
				<img alt="logo" class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes2.jpg"; ?>" />
				<h4>Comunicação visual</h4>
				<p>Aplicação da marca e definição de identidade visual para todos os tipos de impressos.</p>
				<ul>
					<li>Identidade visual</li>
					<li>Impressos</li>
					<li>Embalagens personalizadas</li>
					<li>Apresentação em Power Point</li>
				</ul>
			</div>
			<div class="col-md-4 text-center">
				<img alt="logo" class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes3.jpg"; ?>" />
				<h4>Comunicação visual</h4>
				<p>Aplicação da marca e definição de identidade visual para todos os tipos de impressos.</p>
				<ul>
					<li>Identidade visual</li>
					<li>Impressos</li>
					<li>Embalagens personalizadas</li>
					<li>Apresentação em Power Point</li>
				</ul>
			</div>
		</div><br><br>
		<div class="row">
			<div class="col-md-4 text-center">
				<img alt="logo" class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes4.jpg"; ?>" />
				<h4>Comunicação visual</h4>
				<p>Aplicação da marca e definição de identidade visual para todos os tipos de impressos.</p>
				<ul>
					<li>Identidade visual</li>
					<li>Impressos</li>
					<li>Embalagens personalizadas</li>
					<li>Apresentação em Power Point</li>
				</ul>
			</div>
			<div class="col-md-4 text-center">
				<img alt="logo" class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes5.jpg"; ?>" />
				<h4>Comunicação visual</h4>
				<p>Aplicação da marca e definição de identidade visual para todos os tipos de impressos.</p>
				<ul>
					<li>Identidade visual</li>
					<li>Impressos</li>
					<li>Embalagens personalizadas</li>
					<li>Apresentação em Power Point</li>
				</ul>
			</div>
			<div class="col-md-4 text-center">
				<img alt="logo" class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes6.jpg"; ?>" />
				<h4>Comunicação visual</h4>
				<p>Aplicação da marca e definição de identidade visual para todos os tipos de impressos.</p>
				<ul>
					<li>Identidade visual</li>
					<li>Impressos</li>
					<li>Embalagens personalizadas</li>
					<li>Apresentação em Power Point</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div id="depoimento" class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 animated fadeInUp wow">
				<h2>Depoimentos de nossos clientes</h2><br>
				<h5>Confira os depoimentos de quem já realizaram suas reformas com a gente!</h5>
			</div>
		</div><br><br><br>
		<div class="row">
			<div class="col-md-3 col-md-offset-1 text-center">
				<div class="dep-conteudo animated fadeInUp wow">
					“A @reformase fez a obra aqui em casa com qualidade e no tempo previsto. Tudo ficou como eu queria, Valeu Reformase!!!!”<br>
					<div class="dep-foto imga"></div>
				</div>
			</div>
			<div class="col-md-4 text-center">
				<div class="dep-conteudo animated fadeInUp wow" data-wow-delay="0.25s">
					“A @reformase fez a obra aqui em casa com qualidade e no tempo previsto. Tudo ficou como eu queria, Valeu Reformase!!!!”<br>
					<div class="dep-foto imgb"></div>
				</div>
			</div>
			<div class="col-md-3 text-center">
				<div class="dep-conteudo animated fadeInUp wow" data-wow-delay="0.5s">
					“A @reformase fez a obra aqui em casa com qualidade e no tempo previsto. Tudo ficou como eu queria, Valeu Reformase!!!!”<br>
					<div class="dep-foto imgc"></div>
				</div>
			</div>
		</div><br><br>
	</div>
</div>


<?php get_footer(); ?>
