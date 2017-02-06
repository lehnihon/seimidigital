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

<div id="servicos" class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2>Nossas Soluções</h2>
				<h5>Somos uma agência de marketing digital especializada em soluções sob medida, 
				oferecemos soluções em marketing, web, comunicação visual, geração de conteúdo, performance e design.</h5>
			</div>
		</div><br><br><br>
		<div class="row">
			<div class="col-md-4 text-left">
				<img alt="logo" class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes1.jpg"; ?>" />
				<h4>Comunicação visual</h4>
				<p>Aplicação da marca e definição de identidade visual para todos os tipos de impressos.</p>
				<ul>
					<li><span>Identidade visual</span></li>
					<li><span>Impressos</span></li>
					<li><span>Embalagens personalizadas</span></li>
					<li><span>Apresentação em Power Point</span></li>
				</ul>
			</div>
			<div class="col-md-4 text-left">
				<img alt="logo" class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes2.jpg"; ?>" />
				<h4>Comunicação visual</h4>
				<p>Desenvolvemos soluções completas, de maneira eficiente, intuitiva e com estrutura responsiva.</p>
				<ul>
					<li><span>Criação de sites</span></li>
					<li><span>Criação de hotsites</span></li>
					<li><span>Criação de blogs</span></li>
					<li><span>Land pages</span></li>
				</ul>
			</div>
			<div class="col-md-4 text-left">
				<img alt="logo" class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes3.jpg"; ?>" />
				<h4>Marketing digital</h4>
				<p>Soluções essenciais para aproximar, fidelizar e criar engajamento da sua marca com os seus clientes.</p>
				<ul>
					<li><span>Redes sociais</span></li>
					<li><span>Geração de conteúdos</span></li>
					<li><span>Email marketing</span></li>
					<li><span>Campanhas patrocinadas</span></li>
				</ul>
			</div>
		</div><br><br>
		<div class="row">
			<div class="col-md-4 text-left">
				<img alt="logo" class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes4.jpg"; ?>" />
				<h4>Lojas virtuais</h4>
				<p>Nossa plataforma de loja virtual é intuitiva e gerenciável, assim você temuma visão completa do seu negócio..</p>
				<ul>
					<li><span>Layout responsivo</span></li>
					<li><span>Suporte técnico</span></li>
					<li><span>Controle de estoque</span></li>
					<li><span>Gerenciador de frete e impostos</span></li>
				</ul>
			</div>
			<div class="col-md-4 text-left">
				<img alt="logo" class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes5.jpg"; ?>" />
				<h4>Links patrocinados e SEO</h4>
				<p>Ajudamos sua empresa a aumentar as vendas otimizando seu site e com campanhas de links patrocinados.</p>
				<ul>
					<li><span>Otimização de site</span></li>
					<li><span>Gerenciamento de campanhas</span></li>
					<li><span>Análise e monitoramento</span></li>
					<li><span>Relatórios mensais</span></li>
				</ul>
			</div>
			<div class="col-md-4 text-left">
				<img alt="logo" class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes6.jpg"; ?>" />
				<h4>Produção de vídeo</h4>
				<p>Somos uma agência de marketing digital especializada em soluções sob medida, oferecemos soluções em marketing.</p>
				<ul>
					<li><span>Vídeos institucionais</span></li>
					<li><span>Tv indoor</span></li>
					<li><span>Documentário</span></li>
					<li><span>Motion graphics</span></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div id="sobre" class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h1>A Seimi Digital</h1>
				<h5>Somos uma <strong>agência de marketing digital</strong> com muita experiência em comunicação e estratégia para empresas.</h5>
				<div class="separador"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<p>Oferecemos soluções completas e eficientes em <strong>web, marketing, branding, geração de conteúdo e design</strong>, 
				sempre focados em resultados e performance.</p>
				<p>Trabalhamos de forma integrada, sempre valorizando e fortalecendo a presença da sua marca na web, gerando 
				resultados cada vez melhores, por meio de <strong>planejamento e de muita força de vontade</strong> da nossa equipe.</p>
				<p>Todas as nossas soluções são feitas sob medida, não importa o tamanho do seu projeto ou o porte da sua empresa. 
				Nosso objetivo é criar experiências únicas e verdadeiras para aproximar o cliente da sua marca.</p>
				<p><strong>Somos um time extremamente focado</strong> no ambiente digital. É pensando em entregar soluções que superam 
				as expectativas, que nos faz desenvolver projetos digitais que transformam a vida das empresas para melhor. </p>
				<p>Conte com a Seimi Digital para elaborar e executar o marketing digital da sua empresa. </p>
				<p><strong>Nos comprometemos ao máximo com seu projeto, porque amamos o que fazemos!</strong></p>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
