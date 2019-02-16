<!DOCTYPE html>
<?php
	session_start();
	header("Content-Type: text/html; charset=ISO-8859-1",true);
	
	include ('classes/conexao/conexao.class.php');
    include ('classes/controle/noticiaCrud.class.php');
    include ('classes/entidades/usuario.class.php');
	
?>
	
<html lang="pt-br">
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
		<title>Administrador</title>
		<!-- Bootstrap -->
		<link rel="stylesheet" href="scripts/bootstrap/bootstrap.min.css">
		<!-- IonIcons -->
		<link rel="stylesheet" href="scripts/ionicons/css/ionicons.min.css">
		<link rel="shortcut icon" href="images/BRnovo.ico">
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


		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
	</head>

	<body class="">
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
						<br>

					</div>
					<div class="headline">
							
							<div class="owl-carousel owl-theme" id="headline">							
								<div class="item">
									<a ><div class="badge">Dica!</div>Escolha uma das categorias abaixo para fazer sua postagem!!!</a>
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
							<img src="images/logoteste.png" alt="Magz Logo">
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

							<li><a href="cadastra.php?id_categoria=<?php echo $linhas['id_categoria'];
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

		

		<br><br>
		<section class="login first grey">
			<div class="container">




				<a href="tbl.php" class="btn btn-magz"> Noticias Cadastradas no Banco de Dados <i class="ion-ios-arrow-thin-right"></i></a>
				<a href="logout.php" class="btn btn-magz"> Sair <i class="ion-ios-arrow-thin-right"></i></a>


			<br><br>

		
			</div>
		</section>
		<br><br><br><br>


		

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

