<!DOCTYPE html>
<?php



	session_start();
	header("Content-Type: text/html; charset=ISO-8859-1",true);

	include ('classes/conexao/conexao.class.php');
	include ('classes/controle/noticiaCrud.class.php');
	include ('classes/entidades/usuario.class.php');

	 $id_categoria = $_GET['id_categoria'];
	
?>
<html>
	<head>
		<meta charset="utf-8">
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
		<title>BR Notícias</title>
		<!-- Bootstrap -->
		<link rel="stylesheet" href="scripts/bootstrap/bootstrap.min.css">
		<!-- IonIcons -->
		<link rel="stylesheet" href="scripts/ionicons/css/ionicons.min.css">
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

	<body>
		<header class="primary">
			<div class="firstbar">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-12">
							<div class="brand">
								<a href="index.php">
									<img src="images/logoteste.png" alt="Magz Logo">
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

		<section class="category">
		   <div class="container">
		    <div class="row">
		      <div class="col-md-8 text-left">
		        <div class="row">
		          <div class="col-md-12">        
		            <ol class="breadcrumb">
		              <li><a href="index.php">Home</a></li>
		            </ol>
		            
		          </div>
		        </div>
		        <div class="line"></div>
		        <div class="row">



		<?php
					

			$noticiaCrud  = new noticiaCrud();
			$pessoa     = new usuario();

			$resultado = $noticiaCrud->exibirCategoria($id_categoria);


			if ($resultado == false){
			echo "Não possui noticias cadastrados no banco de dados!!!";
			
			} else {

		?>

		<form action="" method="GET">


		          <article class="col-md-12 article-list">
		            <div class="inner">
						<?php
								while ($linhas = mysqli_fetch_array($resultado)) {
						?>
		              <figure>
			              <a href="#">
			                <img src="<?php echo $linhas['foto'];?>">
		                </a>
		              </figure>
		              <div class="details">
		                <div class="detail">
		                  <div class="category">
		                   <a href="category.html"><?php echo $linhas['categoria'];?></a>
		                  </div>
		                  <div class="time"><?php echo $linhas['datahora'];?></div>
		                </div>
		                <h1><a href="single.php?id_noticia=<?php echo $linhas['id_noticia'];
                            $_SESSION['id_noticia']=$linhas['id_noticia'];?>"><?php echo $linhas['titulo'];?></a></h1>
		                <p>
		                  <?php echo $linhas['subtitulo'];?>
		                </p>
		                <footer>
		                  <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>0</div></a>
		                  <a class="btn btn-primary more" href="single.php?id_noticia=<?php echo $linhas['id_noticia'];
                            $_SESSION['id_noticia']=$linhas['id_noticia'];?>">
		                    <div>Mais</div>
		                    <div><i class="ion-ios-arrow-thin-right"></i></div>
		                  </a>
		                </footer>
		              </div>
		              <?php
		              	}
		              ?>
		            </div>
		          </article>


			<?php
				if ($_GET){
					if(isset($_GET['id_categoria'])){
						$id_categoria = $_GET['id_categoria'];
						$resultadoConsulta = $noticiaCrud->consultarCodigo($id_categoria);
							while ($linhas = mysqli_fetch_array($resultadoConsulta)){ 


						$id_categoria  = $linhas['id_categoria'];
						$id_noticia    = $linhas['id_noticia'];
						$titulo   = $linhas['titulo'];
						$subtitulo         = $linhas['subtitulo'];
						$foto     = $linhas['foto'];
						$datahora = $linhas['datahora'];


				}
			?>

			<?php
				
				
			}
			}


			}

			?>
		          

		        </div>
		      </div>
		      <div class="col-md-4 sidebar">
		        <aside>
		          <div class="aside-body">
		            <figure class="ads">
			            <a href="single.html">
			              <img src="images/ad.png">
			            </a>
		              <figcaption>Advertisement</figcaption>
		            </figure>
		          </div>
		        </aside>
		        <aside>
		          <h1 class="aside-title">Recent Post</h1>
		          <div class="aside-body">
		            <article class="article-fw">
		              <div class="inner">
		                <figure>
			                <a href="single.html">
			                  <img src="images/news/img12.jpg">
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
		            
		            
		            
		          </div>
		        </aside>
		        
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
							<h1 class="block-title">Area Administrativa</h1>
							<div class="block-body">
								<figure class="foot-logo">
									<img src="images/logo-branco.png" class="img-responsive" alt="Logo">
								</figure>
								
								<a href="login.php" class="btn btn-magz white"> Adm <i class="ion-ios-arrow-thin-right"></i></a>
							</div>

						</div>
					</div>
					
					
					<div class="col-md-3 col-xs-12 col-sm-6">
						<div class="block">
							<h1 class="block-title">Siga nos</h1>
							<div class="block-body">
								<p>Siga nos e fique por dentro das ultimas noticias</p>
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
						
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="copyright">
							COPYRIGHT &copy; BRNOTICIAS 2019. TODOS DIREITOS RESERVADOS.
							<div>
								FEITO <i class="ion-heart"></i> POR <a href="https://www.facebook.com/thierrycampos.web">THIERRY CAMPOS</a>
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