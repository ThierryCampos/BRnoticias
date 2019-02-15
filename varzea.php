<!DOCTYPE html>

<?php
	session_start();
	

	include ('classes/conexao/conexao.class.php');
	include ('classes/controle/noticiaCrud.class.php');
	include ('classes/entidades/usuario.class.php');
?>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="Magz is a HTML5 & CSS3 magazine template is based on Bootstrap 3.">
		<meta name="author" content="Kodinger">
		<meta name="keyword" content="magz, html5, css3, template, magazine template">
		<!-- Shareable -->
		<meta property="og:title" content="HTML5 & CSS3 magazine template is based on Bootstrap 3" />
		<meta property="og:type" content="article" />
		<meta property="og:url" content="http://github.com/nauvalazhar/Magz" />
		<meta property="og:image" content="https://raw.githubusercontent.com/nauvalazhar/Magz/master/images/preview.png" />
		<title>BR Noticias</title>
		<!-- Bootstrap -->
		<link rel="stylesheet" href="scripts/bootstrap/bootstrap.min.css">
		<!-- IonIcons -->
		<link rel="stylesheet" href="scripts/ionicons/css/ionicons.min.css">
		<link rel="shortcut icon" href="images/BR.ico">
		<!-- Toast -->
		<link rel="stylesheet" href="scripts/toast/jquery.toast.min.css">
		<!-- OwlCarousel -->
		<link rel="stylesheet" href="scripts/owlcarousel/dist/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="scripts/owlcarousel/dist/assets/owl.theme.default.min.css">
		<!-- Magnific Popup -->
		<link rel="stylesheet" href="scripts/magnific-popup/dist/magnific-popup.css">
		<link rel="stylesheet" href="scripts/sweetalert/dist/sweetalert.css">
		<!-- Custom style -->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/skins/all.css">
		<link rel="stylesheet" href="css/demo.css">
	</head>

	<body class="skin-orange">
		<header class="primary">
			<div class="firstbar">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-12">
							<div class="brand">
								<a href="index.php">
									<img src="images/logo01.png" alt="Magz Logo">
								</a>
							</div>						
						</div>

					</div>
				</div>
			</div>


			<?php

				$noticiaCrud  = new noticiaCrud();
				$pessoa     = new usuario();
				$resultado = $noticiaCrud->exibirMenu();

				if ($resultado == false){
					echo "Não possui noticias cadastrados no banco de dados!!!";
				} else {

			?>

			<form action="" method="GET">

			<!-- Start nav -->
			<nav class="menu">
				
				<div class="container">
					<div class="brand">
						<a href="index.php">
							<img src="images/logo01.png" alt="Magz Logo">
						</a>
					</div>
					<div class="mobile-toggle">
						<a href="#" data-toggle="menu" data-target="#menu-list"><i class="ion-navicon-round"></i></a>
					</div>
					<div class="mobile-toggle">
						<a href="#" data-toggle="sidebar" data-target="#sidebar"><i class="ion-ios-arrow-left"></i></a>
					</div>
					<div id="menu-list">
						<?php
					while ($linhas = mysqli_fetch_array($resultado)) {
				?>
						
						<ul class="nav-list">
							<li class="for-tablet nav-title"><a>Menu</a></li>

							<li><a href="categoria.php?id_categoria=<?php echo $linhas['id_categoria'];
                            $_SESSION['id_categoria']=$linhas['id_categoria'];?>"><?php echo $linhas['categoria'];?></a></li>

						</ul>
						<?php
						 }
						}
						 ?>
					</div>
				</div>
			
			</nav>
			<!-- End nav -->
		</header>

		<section class="single">
			<div class="container">
				<div class="row">
					<div class="col-md-4 sidebar" id="sidebar">
						<aside>
							<div class="aside-body">
								<figure class="ads">
									<img src="images/ad.png">
									<figcaption>Advertisement</figcaption>
								</figure>
							</div>
						</aside>
						<aside>
							<h1 class="aside-title">Posts Recentes</h1>
							<div class="aside-body">
								<article class="article-fw">
									<div class="inner">
										<figure>
											<a href="single.html">												
												<img src="images/news/img16.jpg">
											</a>
										</figure>
										<div class="details">
											<h1><a href="single.html">Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit</a></h1>
											<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua.
											</p>
											<div class="detail">
												<div class="time">December 26, 2016</div>
												<div class="category"><a href="category.html">Lifestyle</a></div>
											</div>
										</div>
									</div>
								</article>
								<div class="line"></div>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="images/news/img05.jpg">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
											<div class="detail">
												<div class="category"><a href="category.html">Lifestyle</a></div>
												<div class="time">December 22, 2016</div>
											</div>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="images/news/img02.jpg">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">Fusce ullamcorper elit at felis cursus suscipit</a></h1>
											<div class="detail">
												<div class="category"><a href="category.html">Travel</a></div>
												<div class="time">December 21, 2016</div>
											</div>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="images/news/img13.jpg">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
											<div class="detail">
												<div class="category"><a href="category.html">International</a></div>
												<div class="time">December 20, 2016</div>
											</div>
										</div>
									</div>
								</article>
							</div>
						</aside>
						
					</div>
					<div class="col-md-8">
						<ol class="breadcrumb">
						  <li><a href="category.html">Home</a></li>
						  <li class="active">Várzea</li>
						</ol>
						<article class="article main-article">
							<header>
								<h1>História de Varzea Paulista</h1>
								<ul class="details">
									<li>Matéria de 08 de Abril, 2010</li>
									<li>Por <a href="http://portal.varzeapaulista.sp.gov.br/index.php/2016-05-31-17-20-00/historia.html">Prefeitura de Várzea Pta</a></li>
								</ul>
							</header>
							<div class="main">
								<p>A história de Várzea Paulista começa em 1867, quando os ingleses construíram a estrada de ferro que liga Santos a Jundiaí. A estrada passava por uma várzea campesina, com um saliente acidente geográfico e as águas cristalinas do rio Jundiaí.</p>
								<div class="featured">
									<figure>
										<img src="images/varzea/varzea.jpg">
										<figcaption>Imagem de Blog Gran Cursos Online</figcaption>
									</figure>
								</div>

								<p>O local começou a ser povoado dezenove anos depois da inauguração desse trecho ferroviário, no final do século XIX, mais precisamente em 1886.
								O primeiro morador varzino foi Isaac de Souza Galvão, que montou a primeira olaria do local.
								Consta que a cidade também participou do ciclo do café, que acabou com a intensa geada de 1878.
								A empresa franco-ítalo-suíça Societé des Distilheiries Brasiliennes instalou uma destilaria de álcool em terras varzinas e viveu tempos prósperos até 1888, quando finalmente foi abolida a escravidão. Em 1891 foi inaugurada a Estação Ferroviária, com arquitetura e materiais ingleses.
								Em agosto de 1956, o Cartório Civil teve seus livros liberados para assentamentos. O nome do distrito era Secundino Veiga, em homenagem ao jornalista que morreu na época.
								O primeiro registro de nascimento foi realizado em 14 de agosto de 1956.
								O primeiro casamento foi realizado em 05 de setembro do mesmo ano.

								<p>Em 1964, um grupo de varzinos, formado por Francisco de Assis Andrade, João Aprillanti, Armando Pastre, Victorino Vieira Santana, Antenor Fonseca, Benjamin de Castro Fagundes, Milton Lebrão, Otávio Félix e Farid Feres Sada se reuniu para requerer a emancipação político-administrativa do local. A Assembléia Legislativa de São Paulo deu início ao movimento de emancipação por meio da lei estadual 5820.

								No dia 21 de março de 1965 o bairro foi elevado a município de Várzea Paulista. O Paulista no nome da cidade surgiu como identificador de mais uma conquista dos bandeirantes.
								A boa localização junto à estrada de ferro e o pioneirismo econômico renderam à Várzea Paulista uma situação privilegiada em relação à quantidade de indústrias instaladas. A partir da emancipação e até aproximadamente 1972, ocorre a organização da estrutura administrativa da Prefeitura recém instalada, cadastrando as propriedades imobiliárias, as fábricas e casas comerciais para o lançamento de impostos.
								Também tem início o alargamento de ruas e assentamento de guias e sarjetas. Com o passar do tempo, começa o serviço de saúde e a construção do primeiro conjunto habitacional, edificando dezenas de unidades no bairro da Promeca. Foram também adquiridos, através de desapropriação, os galpões do atual Paço Municipal. Criaram-se mecanismos para aumentar o parque industrial, atraindo as primeiras fábricas da Várzea Paulista emancipada, como a Elekeiroz, que em 1923, adquiriu um terreno para construção de sua fábrica.</p>

								<div class="line">
									<div>Habitantes</div>
								</div>

								<p>Nos últimos anos Várzea Paulista teve um crescimento populacional vertiginoso. Em 1970 o número de habitantes era de 9,910, saltando para 33.835 em 1980. Quase 30 anos depois chega a soma de atual de 107.211 mil. O crescimento coloca a cidade como a segunda mais populosa da região de Jundiaí.</p>

								<div class="line">
									<div>A cidade das Orquídeas</div>
								</div>

								<p>Em 2005, ao completar 40 anos de emancipação, Várzea Paulista conquistou sua identidade cultural ao se tornar a Cidade das Orquídeas. Reconhecida como um dos maiores pólos produtores de orquídea na América Latina, a cidade conta com cinco orquidários de grande importância, além de cultivadores e centenas de orquidófilos. </p>

								<div class="line">
									<div>Curiosiadades</div>
								</div>

								<p>Os ingleses, com seus dormentes e trilhos, aportaram na Várzea em 1867, no mesmo ano em que inauguravam a São Paulo Railway. Em 1891 inauguraram a Estação de Trens, a mesma em funcionamento até hoje, com trens de carga e passageiros, movimentando o dia-a-dia ao redor da estação, com a atuação de chefes de Estação, carabineiros, sinalizadores, portadores de cargas e descargas, pessoal de via permanente ou “soca”. Os ferroviários políticos Armando Dias, Arnaldo Netto e Vitorino Vieira Santana também contribuíram para o desenvolvimento local. </p>

								<p>A Ponte Seca é uma referência da arquitetura inglesa. A placa comemorativa e identificadora, de 1899, é da São Paulo Railway, que na época edificou uma ponte sobre seus trilhos, unindo as duas regiões separadas pela estrada de ferro, onde estavam instaladas várias olarias, além de plantações de uva e outros produtos agrícolas. A sabedoria popular denominou-a como “Ponte Seca”, por não transpor nenhum córrego. Logo essa denominação se popularizou, dando o nome para o bairro. </p>

								
							</div>
							
						</article>

						<article class="article main-article">
							<header><br>
								<h1>A CÂMARA</h1>
								<ul class="details">
									<li>Por <a href="http://www.camaravarzea.sp.gov.br/Pagina/Listar/618">Câmara Municipal de Várzea Pta</a></li>
								</ul>
							</header>
							<div class="main">
								<p>Câmara Municipal tem a primordial função legislativa. É através dela que os agentes públicos manifestam os atos designados ao Poder Público.</p>
								<div class="featured">
									<figure>
										<img src="images/varzea/camara.jpg">
										<figcaption>Imagem de Blog Gran Cursos Online</figcaption>
									</figure>
								</div>

								<p>Único cargo eletivo da Câmara Municipal é o de Vereador e, como verear significa administrar, a função dos vereadores é a de defender e proteger os interesses dos cidadãos seus eleitores através da elaboração de leis e fiscalização da administração pública (Prefeitura).
								Os demais cargos, em sua maioria, são alcançados através de concursos públicos, exceto os Cargos em Comissão, também conhecidos como Assessoria Parlamentar.
								Para a votação de matéria os vereadores se reúnem em sessões ordinárias, às terças-feiras, a partir das 19 horas, podendo também se reunir em sessões extraordinárias, solenes, especiais e secretas, das quais, exceto a última, a população pode somente assistir e, mediante as regras da Tribuna Livre, participar.

								<p>As normas a serem seguidas por uma Câmara são estipuladas por um Regimento Interno. O de nosso Município possui 221 artigos e regra todos os atos e formas de seu aperfeiçoamento. Dentre os mais comuns destacam-se as indicações, para sugerir pequenos serviços ao Sr. Chefe do Executivo (Prefeito Municipal) ou à própria Câmara; os requerimentos, que podem ser de alçada do Plenário ou do Presidente, destinados a requerer informações do Executivo, congratular ou conceder votos de pesar, dentre outros; e moções, que se incumbem de apelar por algo, repudiar ou apoiar atos ou medidas em nome da Câmara.</p>

								<p>De suma importância também e mais ligados à área legislativa são os projetos: de lei, destinados a denominações de logradouros e outras matérias comuns; de lei complementar, que cuida de alterações no Código Tributário do Município, no Código de Obras, no Plano Diretor, etc.; de resolução (para assuntos internos), destinados a determinar a remuneração do Vereador, a decisão de recursos e as normas regimentais, entre outros; e de decreto legislativo (para assuntos externos), destinados principalmente a concessão de títulos honoríficos e decisão das contas públicas, dentre outros assuntos. As leis, como já citadas, são elaboradas através de um projeto de lei, que pode ser apresentado pelo Prefeito ou pelos Vereadores ou, excepcionalmente, através de iniciativa popular. Após apresentado, este projeto recebe pareceres internos, é discutido e votado em sessão e, se aprovado, é submetido ao Executivo que, concordando, sanciona o projeto convertendo-o em lei, caso contrário, o Prefeito o veta. Se a Câmara rejeitar o veto, a lei será promulgada pelo Prefeito ou, no seu silêncio, pelo Presidente do Legislativo. As Câmaras Municipais são constituídas de no mínimo 9 (nove) e no máximo 55 (cinqüenta e cinco) Vereadores, dependendo do número de habitantes do Município. Várzea Paulista possui hoje, nesta 12ª. Legislatura, 11 vereadores. Dentre esses edis, por eles mesmos escolhido, um é eleito o Presidente da Câmara Municipal, com mandato de dois anos, vedada a reeleição na mesma legislatura.</p>

								
								<p>Além do Gabinete do Presidente, que cuida de atendimento ao público e outras matérias, em nome da Câmara, a Casa conta com as Diretorias Legislativa, que trata da elaboração de quase toda documentação referente ao interesse de Vereadores e de arquivo histórico; Financeira, incumbida de tratar das contas da Câmara, vencimentos de funcionários e de Vereadores, entre outros serviços; e Administrativa, que trata do setor pessoal, de compras e eventos internos; e também com a Diretoria Jurídica, que é quem cuida da análise dos aspectos de legalidade e constitucionalidade de todos os trabalhos desenvolvidos pelas Diretorias e pelos Vereadores.</p>

							</div>
							
						</article>
						<div class="sharing">
						<div class="title"><i class="ion-android-share-alt"></i> Redes Sociais</div>
							<ul class="social">
								<li>
									<a href="#" class="facebook">
										<i class="ion-social-facebook"></i> Facebook
									</a>
								</li>
								<li>
									<a href="#" class="twitter">
										<i class="ion-social-twitter"></i> Twitter
									</a>
								</li>
								<li>
									<a href="#" class="googleplus">
										<i class="ion-social-googleplus"></i> Google+
									</a>
								</li>
								<li>
									<a href="#" class="linkedin">
										<i class="ion-social-linkedin"></i> Linkedin
									</a>
								</li>
								<li>
									<a href="#" class="skype">
										<i class="ion-ios-email-outline"></i> Email
									</a>
								</li>
								
							</ul>
						</div>
						
					
						<div class="line"></div>
						<div class="row">
							
						</div>
						<div class="line thin"></div>
						
					</div>
				</div>
			</div>
		</section>

		<!-- Start footer -->
		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="block">
							<h1 class="block-title">Company Info</h1>
							<div class="block-body">
								<figure class="foot-logo">
									<img src="images/logo-light.png" class="img-responsive" alt="Logo">
								</figure>
								<p class="brand-description">
									Magz is a HTML5 &amp; CSS3 magazine template based on Bootstrap 3.
								</p>
								<a href="page.html" class="btn btn-magz white">About Us <i class="ion-ios-arrow-thin-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="block">
							<h1 class="block-title">Popular Tags <div class="right"><a href="#">See All <i class="ion-ios-arrow-thin-right"></i></a></div></h1>
							<div class="block-body">
								<ul class="tags">
									<li><a href="#">HTML5</a></li>
									<li><a href="#">CSS3</a></li>
									<li><a href="#">Bootstrap 3</a></li>
									<li><a href="#">Web Design</a></li>
									<li><a href="#">Creative Mind</a></li>
									<li><a href="#">Standing On The Train</a></li>
									<li><a href="#">at 6.00PM</a></li>
								</ul>
							</div>
						</div>
						<div class="line"></div>
						<div class="block">
							<h1 class="block-title">Newsletter</h1>
							<div class="block-body">
								<p>By subscribing you will receive new articles in your email.</p>
								<form class="newsletter">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="ion-ios-email-outline"></i>
										</div>
										<input type="email" class="form-control email" placeholder="Your mail">
									</div>
									<button class="btn btn-primary btn-block white">Subscribe</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="block">
							<h1 class="block-title">Latest News</h1>
							<div class="block-body">
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="images/news/img12.jpg" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">Donec consequat lorem quis augue pharetra</a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="images/news/img14.jpg" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">eu dapibus risus aliquam etiam ut venenatis</a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="images/news/img15.jpg" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">Nulla facilisis odio quis gravida vestibulum </a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="images/news/img16.jpg" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">Proin venenatis pellentesque arcu vitae </a></h1>
										</div>
									</div>
								</article>
								<a href="#" class="btn btn-magz white btn-block">See All <i class="ion-ios-arrow-thin-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-xs-12 col-sm-6">
						<div class="block">
							<h1 class="block-title">Follow Us</h1>
							<div class="block-body">
								<p>Follow us and stay in touch to get the latest news</p>
								<ul class="social trp">
									<li>
										<a href="#" class="facebook">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-facebook"></i>
										</a>
									</li>
									<li>
										<a href="#" class="twitter">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-twitter-outline"></i>
										</a>
									</li>
									<li>
										<a href="#" class="youtube">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-youtube-outline"></i>
										</a>
									</li>
									<li>
										<a href="#" class="googleplus">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-googleplus"></i>
										</a>
									</li>
									<li>
										<a href="#" class="instagram">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-instagram-outline"></i>
										</a>
									</li>
									<li>
										<a href="#" class="tumblr">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-tumblr"></i>
										</a>
									</li>
									<li>
										<a href="#" class="dribbble">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-dribbble"></i>
										</a>
									</li>
									<li>
										<a href="#" class="linkedin">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-linkedin"></i>
										</a>
									</li>
									<li>
										<a href="#" class="skype">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-skype"></i>
										</a>
									</li>
									<li>
										<a href="#" class="rss">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-rss"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="line"></div>
						<div class="block">
							<div class="block-body no-margin">
								<ul class="footer-nav-horizontal">
									<li><a href="index.html">Home</a></li>
									<li><a href="#">Partner</a></li>
									<li><a href="contact.html">Contact</a></li>
									<li><a href="page.html">About</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="copyright">
							COPYRIGHT &copy; MAGZ 2017. ALL RIGHT RESERVED.
							<div>
								Made with <i class="ion-heart"></i> by <a href="http://kodinger.com">Kodinger</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- End Footer -->

		<!-- JS -->
		<script src="js/jquery.js"></script>
		<script src="js/jquery.migrate.js"></script>
		<script src="scripts/bootstrap/bootstrap.min.js"></script>
		<script>var $target_end=$(".best-of-the-week");</script>
		<script src="scripts/jquery-number/jquery.number.min.js"></script>
		<script src="scripts/owlcarousel/dist/owl.carousel.min.js"></script>
		<script src="scripts/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
		<script src="scripts/easescroll/jquery.easeScroll.js"></script>
		<script src="scripts/sweetalert/dist/sweetalert.min.js"></script>
		<script src="scripts/toast/jquery.toast.min.js"></script>
		<script src="js/demo.js"></script>
		<script src="js/e-magz.js"></script>
	</body>
</html>