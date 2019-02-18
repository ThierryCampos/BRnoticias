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
		<title>Altera Posto</title>
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



<?php
                

            $noticiaCrud  = new noticiaCrud();
            $pessoa     = new usuario();
            
            $resultado = $noticiaCrud->exibirTodosPostos();
            

            if ($resultado == false){
                echo "Não possui postos cadastrados no banco de dados!!!";
            } else {

            ?>

            <?php
            	while ($linhas = mysqli_fetch_array($resultado)) {
            	
            ?>

           

            <?php
        }
            ?>

             <?php
            if ($_GET){
                if(isset($_GET['id_posto'])){
                    $id_posto = $_GET['id_posto'];
                    $resultadoConsulta = $noticiaCrud->consultarCodigoPostoA($id_posto);

                        while ($linhas = mysqli_fetch_array($resultadoConsulta)){  
                        
                            
                        $nome_posto        = $linhas['nome_posto'];
                        $endereco    = $linhas['endereco'];
                        $gasolina   = $linhas['gasolina'];
                        $alcool = $linhas['alcool'];
                        $diesel = $linhas['diesel'];
                        $foto_posto   = $linhas['foto_posto'];                              
                    }
                    ?>



            <section class="login first grey">
				<div class="container">
					<div class="comments">
							<form  action="#" method="POST" >
								<div class="col-md-12">
									<h3 class="title">Alterar Dados</h3>
								</div>
								<div class="form-group col-md-4">
									<label > Nome </label>
									<input type="text" name="nome_posto" class="form-control" value="<?php echo $nome_posto;?>">
								</div>
								<div class="form-group col-md-4">
									<label> Endereco </label>
									<input type="text" name="endereco" class="form-control" value="<?php echo $endereco;?>">		
								</div>
								<div class="form-group col-md-4">
									<label >Foto</label>
									<input type="text" name="foto_posto" class="form-control" value="<?php echo $foto_posto;?>">
								</div>
								<div class="form-group col-md-12">
									<label >Gasolina </label>
									<input type="text" class="form-control" name="gasolina" value="<?php echo $gasolina;?>"></textarea>
								</div>
								<div class="form-group col-md-12">
									<label >Alcool</span></label>
									<input type="text" class="form-control" name="alcool" id="subtitulo" value="<?php echo $alcool;?>"></textarea>
								</div>
								<div class="form-group col-md-12">
									<label>Diesel</label>
									<input type="text" class="form-control" name="diesel" value="<?php echo $diesel;?>"></textarea>
								</div>
								<div class="form-group col-md-12">
									<button type="submit" class="btn btn-primary" value="alterar" name="alterar">Alterar</button>
									<a class="btn btn-primary" href="tbl_posto.php">voltar</a>
								</div>
							</form>
			</div>
				<div class="box-wrapper">				
					<div class="box box-border">
						 
						
					</div>
				</div>
			</div>
		</section>


	

		        <?php
            $_SESSION['id_posto'] = $id_posto;
                }
            }
        
            if ($_POST){
                $id_posto = $_SESSION['id_posto'];
                $nome_posto = $_POST['nome_posto'];
                $endereco = $_POST['endereco'];
                $gasolina = $_POST['gasolina'];
                $alcool = $_POST['alcool'];
                $diesel = $_POST['diesel'];
                $foto_posto = $_POST['foto_posto'];
                
                
                if ($_POST['alterar']){
                    $resultadoAlteracao = $noticiaCrud->alterarposto($id_posto,$nome_posto,$endereco,$gasolina,$alcool,$diesel,$foto_posto);
                    if ($resultadoAlteracao == true){
                    	?>
                       <script>alert("Alterado com sucesso!!!");</script> 
                       <?php
                        echo '<script>location.href="tbl_posto.php";</script>';
                    } else {
                         ?>
                	<script>alert("Nao alterado!!!");</script>
                <?php
                    }
                }
            }
        }
            
        ?>



