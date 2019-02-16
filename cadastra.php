<!DOCTYPE html>
<?php
	session_start();
	header("Content-Type: text/html; charset=ISO-8859-1",true);
	
	include ('classes/conexao/conexao.class.php');
    include ('classes/controle/noticiaCrud.class.php');
    include ('classes/entidades/usuario.class.php');

     $id_categoria = $_GET['id_categoria'];
	
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

					</div>
				</div>
			</div>

		</header>

		
			<div class="container">

				<a href="admin.php" class="btn btn-magz">Voltar para pagina do administrador<i class="ion-ios-arrow-thin-right"></i></a>
				
			</div>
		

		

		
		<section class="login first grey">
			<div class="container">

			<div class="comments">
				<div class="container">

				<a href="admin.php" class="btn btn-magz">Voltar para pagina do administrador<i class="ion-ios-arrow-thin-right"></i></a>
				
			</div>
						
							
							<form  action="#" method="POST" enctype="multipart/form-data">
								<div class="col-md-12">
									<h3 class="title">Publique as Noticias</h3>
								</div>
								<div class="form-group col-md-4">
									<label for="datahora">Data e Hora <span class="required"></span></label>
									<input type="DateTime-Local" id="datahora" name="datahora" class="form-control">
								</div>
								<div class="form-group col-md-4">
									<label for="foto">Foto</label>
									<input type="file" id="foto" name="foto" class="form-control">
								</div>
								<div class="form-group col-md-12">
									<label for="titulo">Titulo <span class="required"></span></label>
									<textarea class="form-control" name="titulo" id="titulo" placeholder="Digite o titulo ..."></textarea>
								</div>
								<div class="form-group col-md-12">
									<label for="subtitulo">Subtitulo <span class="required"></span></label>
									<textarea class="form-control" name="subtitulo" id="subtitulo" placeholder="Digite o subtitulo ..."></textarea>
								</div>
								<div class="form-group col-md-12">
									<label for="conteudo">Conteudo <span class="required"></span></label>
									<textarea class="form-control" name="conteudo" id="conteudo" placeholder="Digite o conteudo ..."></textarea>
								</div>
								<div class="form-group col-md-12">
									<button type="submit" class="btn btn-primary" value="submit" name="submit">cadastrar</button>
								</div>
								
							</form>
			</div>


			 <?php
                

                if ($_POST) {
                    if ($_POST['submit']) {
                        
                        $usuario = new usuario();
                        $pessoa  = new noticiaCrud();

                        $titulo        = $_POST['titulo'];
                        $subtitulo    = $_POST['subtitulo'];
                        $conteudo   = $_POST['conteudo'];
                        $datahora = $_POST['datahora'];
                        $id_categoria = $_GET['id_categoria'];
                        $foto   = $_FILES['foto'];
						
						$destino        =   'images/noticias/';
                        $arquivo        =   basename($foto['name']);
                        $caminho        =   $destino.$arquivo;

                        $usuario->setTitulo($titulo);
                        $usuario->setSubtitulo($subtitulo);
                        $usuario->setConteudo($conteudo);
                        $usuario->setDatahora($datahora);
                        $usuario->setCaminho($caminho);
                        $usuario->setIdcategoria($id_categoria);
                        move_uploaded_file($foto['tmp_name'], $caminho);

                           
                            
                            
                        $resultado = $pessoa->inserirM($usuario);

                            
                            if ($resultado == true){
                                echo "Enviado com sucesso!";
                               
                            } else {
                                echo "Não foi possivel enviar sua mensagem!!!";
                            }
                   
                }
            }
                ?>

				<div class="box-wrapper">				
					<div class="box box-border">
						 
						
					</div>
				</div>
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

