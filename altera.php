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



<?php
                

            $noticiaCrud  = new noticiaCrud();
            $pessoa     = new usuario();
            
            $resultado = $noticiaCrud->exibirTodasNoticiasCadastradas();
            

            if ($resultado == false){
                echo "Não possui usuários cadastrados no banco de dados!!!";
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
                if(isset($_GET['id_noticia'])){
                    $id_noticia = $_GET['id_noticia'];
                    $resultadoConsulta = $noticiaCrud->consultarCodigoN($id_noticia);

                        while ($linhas = mysqli_fetch_array($resultadoConsulta)){  
                        
                            $id_noticia     = $linhas['id_noticia'];
                            $titulo            = $linhas['titulo'];
                            $subtitulo            = $linhas['subtitulo'];
                            $conteudo     = $linhas['conteudo'];
                            $datahora       = $linhas['datahora'];
                            $id_categoria = $linhas['id_categoria'];
                            $foto      = $linhas['foto'];
                              
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
									<label >Data e Hora </label>
									<input type="text" name="datahora" class="form-control" value="<?php echo $datahora;?>">
								</div>
								<div class="form-group col-md-4">
									<label>Categoria </label>
									<input type="text" name="id_categoria" class="form-control" value="<?php echo $id_categoria;?>">
									
										
								</div>
								<div class="form-group col-md-4">
									<label >Foto</label>
									<input type="text" name="foto" class="form-control" value="<?php echo $foto;?>">
								</div>
								<div class="form-group col-md-12">
									<label >Titulo </label>
									<input type="text" class="form-control" name="titulo" value="<?php echo $titulo;?>"></textarea>
								</div>
								<div class="form-group col-md-12">
									<label >Subtitulo</span></label>
									<input type="text" class="form-control" name="subtitulo" id="subtitulo" value="<?php echo $subtitulo;?>"></textarea>
								</div>
								<div class="form-group col-md-12">
									<label>Conteudo</label>
									<input type="textarea" class="form-control" name="conteudo" value="<?php echo $conteudo;?>"></textarea>
								</div>
								<div class="form-group col-md-12">
									<button type="submit" class="btn btn-primary" value="alterar" name="alterar">Alterar</button>
									<a class="btn btn-primary" href="tbl.php">voltar</a>
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
            $_SESSION['id_noticia'] = $id_noticia;
                }
            }
        
            if ($_POST){
                $id_noticia = $_SESSION['id_noticia'];
                $titulo = $_POST['titulo'];
                $subtitulo = $_POST['subtitulo'];
                $conteudo = $_POST['conteudo'];
                $datahora = $_POST['datahora'];
                $id_categoria = $_POST['id_categoria'];
                $foto = $_POST['foto'];
                
                
                if ($_POST['alterar']){
                    $resultadoAlteracao = $noticiaCrud->alterar($id_noticia,$titulo,$subtitulo,$conteudo,$datahora,$id_categoria,$foto);
                    if ($resultadoAlteracao == true){
                    	?>
                       <script>alert("Alterado com sucesso!!!");</script> 
                       <?php
                        echo '<script>location.href="tbl.php";</script>';
                    } else {
                         ?>
                	<script>alert("Nao alterado!!!");</script>
                <?php
                    }
                }
            }
        }
            
        ?>



