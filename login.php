<!DOCTYPE html>

<?php
    session_start();
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
	</head>

	<body class="skin-orange">
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
		

		<section class="login first grey">
			<div class="container">

			

				<div class="box-wrapper">				
					<div class="box box-border">
						 <?php
						

                include ('classes/conexao/conexao.class.php');
                include ('classes/controle/noticiaCrud.class.php');
                include ('classes/entidades/usuario.class.php');

                if ($_POST) {
                    if ($_POST['submit']) {
                        
                        $usuario = new usuario();
                        $pessoa  = new noticiaCrud();

                        $nome = $_POST['nome'];
                        $senha = $_POST['senha'];
                        
                        $resultado = $pessoa->loginUsuario($nome, $senha);
                        
                        if ($resultado == true){
                            while ($linhas = mysqli_fetch_array($resultado)){
                                
                                
                                $_SESSION['id_usuario']   = $linhas['id_usuario'];  
                                $_SESSION['nome'] = $linhas['nome'];
                                $_SESSION['tipo'] = $linhas['tipo'];
                                
                                if ($_SESSION['tipo']==0){
 
                                   echo '<script>location.href="admin.php";</script>';
                                } else {
                                    echo '<script>location.href="index.php";</script>';
                                }
                            }
                        } else {
                            echo "Erro nenhum usuário cadastrado!!!";
                        }
                    }
                }
                ?>

                
						<div class="box-body">
							<h4>Login</h4>

							<form method="post" action="#">
								<div class="form-group">
									<label for="nome">Nome</label>
									<input  type="text" name="nome" id="nome" class="form-control">
								</div>
								<div class="form-group">
									<label class="fw" for="senha">Senha
										
									</label>
									<input type="password" name="senha" id="senha" class="form-control">
								</div>
								<div class="form-group text-right">
									<button class="btn btn-primary btn-block" value="submit"
									name="submit">Login</button>
								</div>
								

							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<br><br><br><br>

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