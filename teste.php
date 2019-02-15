<!DOCTYPE html>

<?php
	session_start();

	include ('classes/conexao/conexao.class.php');
	include ('classes/controle/noticiaCrud.class.php');
	include ('classes/entidades/usuario.class.php');

?>

<html lang="pt">
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
						<ul class="nav-list">
							
						
							
							<li class="dropdown magz-dropdown magz-dropdown-megamenu"><a href="#">Mega Menu <i class="ion-ios-arrow-right"></i> <div class="badge">Quente</div></a>
								<div class="dropdown-menu megamenu">
									<div class="megamenu-inner">
										<div class="row">

											<div class="col-md-3">
												<div class="row">
													<div class="col-md-12">
														<h2 class="megamenu-title">Trending</h2>
													</div>
												</div>
												<ul class="vertical-menu">
													<li><a href="#"><i class="ion-ios-circle-outline"></i> Mega menu is a new feature</a></li>
													<li><a href="#"><i class="ion-ios-circle-outline"></i> This is an example</a></li>
													<li><a href="#"><i class="ion-ios-circle-outline"></i> For a submenu item</a></li>
													<li><a href="#"><i class="ion-ios-circle-outline"></i> You can add</a></li>
													<li><a href="#"><i class="ion-ios-circle-outline"></i> Your own items</a></li>
												</ul>
											</div>

											<?php

												$noticiaCrud  = new noticiaCrud();
												$pessoa     = new usuario();

												$resultado = $noticiaCrud->exibirUltimasNoticias();


												if ($resultado == false){
												echo "Não possui noticias cadastrados no banco de dados!!!";
												} else {

											?>

						<form action="" method="GET">
											
											<div class="col-md-9">
												<div class="row">
													<div class="col-sm-12">
														<h2 class="megamenu-title">Posts em destaque</h2>
													</div>
												</div>
												<div class="row">
													<article class="article col-md-4 mini ">
														<div class="inner">
															<?php
																while ($linhas = mysqli_fetch_array($resultado)) {
															?>
															<figure>
																<a href="single.html">
																	<img src="<?php echo $linhas['foto'];?>" alt="Sample Article">
																</a>
															</figure>
															<div class="padding">
																<div class="detail">
																	<div class="time"><?php echo $linhas['datahora'];?></div>
																	<div class="category"><a href="category.html"><?php echo $linhas['id_categoria'];?></a></div>
																</div>
																<h2><a href="single.html"><?php echo $linhas['titulo'];?></a></h2>
															</div>
															<?php
														}
													}
															?>
														</div>
													</article>
													
												</div>
											</div>
										</div>								
									</div>
								</div>
							</li>
							
							
						</ul>
					</div>
				</div>
			</nav>
			<!-- End nav -->
	
			
		</header>

		<section class="home">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-12 col-xs-12">
						<div class="headline">
							<div class="nav" id="headline-nav">
								<a class="left carousel-control" role="button" data-slide="prev">
									<span class="ion-ios-arrow-left" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="right carousel-control" role="button" data-slide="next">
									<span class="ion-ios-arrow-right" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
							<div class="owl-carousel owl-theme" id="headline">							
								<div class="item">
									<a href="varzea.html"><div class="badge">Dica!</div>Venha conhecer um pouco sobre Várzea Paulista</a>
								</div>
								<div class="item">
									<a href="tempo.html">previsao do tempo</a>
								</div>
							</div>
						</div>


						<?php
						

						$noticiaCrud  = new noticiaCrud();
						$pessoa     = new usuario();

						$resultado = $noticiaCrud->exibirNoticias();


						if ($resultado == false){
						echo "Não possui usuários cadastrados no banco de dados!!!";
						} else {

						?>

						<form action="" method="GET">


		<div class="line top">
							<div>Algumas outras notícias</div>
						</div>
						<div class="row">
							<article class="col-md-12 article-list">
								<div class="inner">
									<?php
										while ($linhas = mysqli_fetch_array($resultado)) {
										?>

									<figure>
										<a href="single.html">
											<img src="<?php echo $linhas['foto'];?>" alt="Sample Article">
										</a>
									</figure>
									<div class="details">
																				<div class="detail">
											<div class="category">
												<a href="#"><?php echo $linhas['id_categoria'];?></a>
											</div>
											<div class="time"><?php echo $linhas['datahora'];?></div>
										</div>
										<h1><a href="single.html"><?php echo $linhas['titulo'];?></a></h1>
										<p>
										<?php echo $linhas['subtitulo'];?>
										</p>
										<footer>
											<a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>273</div></a>
											<a class="btn btn-primary more" href="single.html">
												<div>More</div>
												<div><i class="ion-ios-arrow-thin-right"></i></div>
											</a>
										</footer>

									</div>
<?php
}
}
?>
										
								</div>
							</article>
							
						</div>

					</div>
					<div class="col-xs-6 col-md-4 sidebar" id="sidebar">
						<div class="sidebar-title for-tablet">Sidebar</div>
						
						
					
					</div>
				</div>
			</div>
		</section>

		

		

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