<!DOCTYPE html>

<html lang="pt-br">
   
    <body>        

        

            <div class="container">

            <?php
                include ('classes/conexao/conexao.class.php');
                include ('classes/controle/noticiaCrud.class.php');
                include ('classes/entidades/usuario.class.php');
            
            $noticiaCrud  = new noticiaCrud();
            $pessoa     = new usuario();

            
            session_start();
            
            if ($_GET){
                if(isset($_GET['id_noticia'])){
                    $id_noticia = $_GET['id_noticia'];
                    $resultadoConsulta = $noticiaCrud->consultarCodigoN($id_noticia);

            ?>
            
        <?php
                   
            $_SESSION['id_noticia'] = $id_noticia;

            }
        }
            $resultado = $noticiaCrud->excluir($id_noticia);
            
            if ($resultado == true){
               ?>
                <script>alert("Noticia excluíd com sucesso!!!");</script>
                <?php
                echo '<script>location.href="tbl.php";</script>';
            } else {
                ?>
                <script>alert("Noticia não excluíd!!!");</script>
                <?php
                echo '<script>location.href="tbl.php";</script>';
            }
        ?>

            
            ?>
                
            </div>

         
                  
    </body>
</html>
