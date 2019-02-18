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
		<title>Tabela de Postos</title>
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



			
		</header>

		<br><br><br><br><br><br><br><br><br><br>



      <?php
                

            $noticiaCrud  = new noticiaCrud();
            $pessoa     = new usuario();
            
            $resultado = $noticiaCrud->exibirTodosPostos();
            

            if ($resultado == false){
                echo "Não possui postos cadastrados no banco de dados!!!";
            } else {

            ?>


		<div>
			<form action="" method="POST">            
				<table class="table table-bordered">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">ID</th>
				      <th scope="col">Nome</th>
				      <th scope="col">Endereco</th>
				      <th scope="col">Gasolina</th>
				      <th scope="col">Alcool</th>
				      <th scope="col">Diesel</th>
				      <th scope="col">Foto</th>
				      <th scope="col"></th>
				      <th scope="col"></th>
				      <th scope="col"></th>
				    </tr>
				  </thead>


				  <tbody>

				  	<?php
            			while ($linhas = mysqli_fetch_array($resultado)) {
            		?>

				    <tr>
				      <th scope="row"></th>
				      <td><?php echo $linhas['id_posto'];?></td>
				      <td><?php echo $linhas['nome_posto'];?></td>
				      <td><?php echo $linhas['endereco'];?></td>
				      <td><?php echo $linhas['gasolina'];?></td>
				      <td><?php echo $linhas['alcool'];?></td>
				      <td><?php echo $linhas['diesel'];?></td>
				      <td><?php echo $linhas['foto_posto'];?></td>
				      <td><a href="altera_posto.php?id_posto=<?php echo $linhas['id_posto'];?>" class="btn btn-magz"> Alterar <i class="ion-ios-arrow-thin-right"></i></a></td>
				      <td><a href="excluir_posto.php?id_posto=<?php echo $linhas['id_posto'];
                        $_SESSION['id_posto']=$linhas['id_posto'];?>" class="btn btn-magz"> Excluir <i class="ion-ios-arrow-thin-right"></i></a></td>
                        <td><a href="admin.php" class="btn btn-magz"> Voltar <i class="ion-ios-arrow-thin-right"></i></a></td>
				    </tr>

				    <?php
				    	}
				    }
				    ?>

				  </tbody>
				</table>
			</form>
		</div>