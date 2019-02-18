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
		<title>Cadastra Postos</title>
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
									<h3 class="title">Cadastre Novos Postos</h3>
								</div>
								<div class="form-group col-md-4">
									<label for="gasolina">Valor da Gasolina <span class="required"></span></label>
									<input type="text" id="gasolina" name="gasolina" class="form-control">
								</div>
								<div class="form-group col-md-4">
									<label for="alcool">Valor do Alcool <span class="required"></span></label>
									<input type="text" id="alcool" name="alcool" class="form-control">
								</div>
								<div class="form-group col-md-4">
									<label for="diesel">Valor do Diesel <span class="required"></span></label>
									<input type="text" id="diesel" name="diesel" class="form-control">
								</div>
								<div class="form-group col-md-4">
									<label for="foto_posto">Foto</label>
									<input type="file" id="foto_posto" name="foto_posto" class="form-control">
								</div>
								
								<div class="form-group col-md-12">
									<label for="nome_posto">Nome do Posto <span class="required"></span></label>
									<textarea class="form-control" name="nome_posto" id="nome_posto" placeholder="Digite o nome do posto ..."></textarea>
								</div>
								<div class="form-group col-md-12">
									<label for="endereco">Endereco <span class="required"></span></label>
									<textarea class="form-control" name="endereco" id="endereco" placeholder="endereco ..."></textarea>
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

                        $nome_posto        = $_POST['nome_posto'];
                        $endereco    = $_POST['endereco'];
                        $gasolina   = $_POST['gasolina'];
                        $alcool = $_POST['alcool'];
                        $diesel = $_POST['diesel'];
                        $foto_posto   = $_FILES['foto_posto'];
						
						$destino_posto        =   'images/postos/';
                        $arquivo_posto        =   basename($foto_posto['name']);
                        $caminho_posto        =   $destino_posto.$arquivo_posto;

                        $usuario->setNomeposto($nome_posto);
                        $usuario->setEndereco($endereco);
                        $usuario->setGasolina($gasolina);
                        $usuario->setAlcool($alcool);
                        $usuario->setDiesel($diesel);
                        $usuario->setCaminhoPosto($caminho_posto);
                        move_uploaded_file($foto_posto['tmp_name'], $caminho_posto);

                           
                            
                            
                        $resultado = $pessoa->inserirP($usuario);

                            
            if ($resultado == true){
               ?>
                <script>alert("Posto cadastrado com sucesso!!!");</script>
                <?php
                echo '<script>location.href="cadastra_postos.php";</script>';
            } else {
                ?>
                <script>alert("Posto nao cadastrado com sucesso!!!");</script>
                <?php
                echo '<script>location.href="cadastra_postos.php";</script>';
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

