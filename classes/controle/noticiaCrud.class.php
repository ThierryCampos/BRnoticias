<?php

	/**
	 * 
	 */
	class noticiaCrud {
		private $conexao;
			public function __construct(){
				$this->conexao = new conexao();
			}

	public function loginUsuario($nome,$senha){
		
			$sql = "SELECT * FROM tbl_usuario WHERE nome = '$nome' AND senha = '$senha'";
			
			$resultado = mysqli_query($this->conexao->getCon(),$sql);
			
			if(mysqli_num_rows($resultado)>0){
				return $resultado;
			} else {
				return false;
			}
			
		}


		public function inserir($usuario){

			$sql = "INSERT INTO `brnoticias`.`tbl_noticias` (titulo, foto, datahora, conteudo, subtitulo) VALUES ('".$usuario->getTitulo()."','".$usuario->getCaminho()."','".$usuario->getDatahora()."','".$usuario->getConteudo()."','".$usuario->getSubtitulo()."')";
			

			

			if (mysqli_query($this->conexao->getCon(),$sql)){
					return True;
			} else {
					return false;
			}
		}


		

		public function exibirNoticias(){

			$sql = "SELECT * FROM tbl_noticias ORDER BY id_noticia DESC LIMIT 10 ";

			$resultado = mysqli_query($this->conexao->getCon(),$sql);

			if (mysqli_num_rows($resultado) > 0){
			    return $resultado;
			} else {
			    return false;
			}
	    }

	    public function exibirUltimasNoticias(){

			$sql = "SELECT * FROM tbl_noticias ORDER BY id_noticia DESC LIMIT 2 ";

			$resultado = mysqli_query($this->conexao->getCon(),$sql);

			if (mysqli_num_rows($resultado) > 0){
			    return $resultado;
			} else {
			    return false;
			}
	    }

	     public function exibirCarrosel(){

			$sql = "SELECT * FROM tbl_noticias ORDER BY id_noticia DESC LIMIT 1 ";

			$resultado = mysqli_query($this->conexao->getCon(),$sql);

			if (mysqli_num_rows($resultado) > 0){
			    return $resultado;
			} else {
			    return false;
			}
	    }

	     public function exibirMenu(){

			$sql = "SELECT * FROM tbl_categoria ORDER BY categoria ASC LIMIT 10 ";

			$resultado = mysqli_query($this->conexao->getCon(),$sql);

			if (mysqli_num_rows($resultado) > 0){
			    return $resultado;
			} else {
			    return false;
			}
	    }

		public function exibirCategoria($id_categoria){

		$sql = "SELECT * 
	    FROM  tbl_noticias 
	    INNER JOIN tbl_categoria ON tbl_categoria.id_categoria = tbl_noticias.id_categoria
	    WHERE tbl_noticias.id_categoria = '$id_categoria' ORDER BY id_noticia DESC LIMIT 10000";

		$resultado = mysqli_query($this->conexao->getCon(),$sql);

		if (mysqli_num_rows($resultado) > 0){
	    return $resultado;
		} else {
	    return false;
	}
}  

		public function consultarCodigo($id_categoria){

	        $sql = "SELECT * FROM tbl_noticias WHERE id_categoria = '$id_categoria'";
	        
	        $resultado = mysqli_query($this->conexao->getCon(),$sql);

	        if (mysqli_num_rows($resultado) > 0){
	            return $resultado;
	        } else {
	            return false;
	        }
    	}




    	public function exibirSingle($id_noticia){

		$sql = "SELECT * FROM  tbl_noticias WHERE tbl_noticias.id_noticia = '$id_noticia'"; 

		$resultado = mysqli_query($this->conexao->getCon(),$sql);

		if (mysqli_num_rows($resultado) > 0){
	    return $resultado;
		} else {
	    return false;
	}
}  

		public function consultarCodigoNoticia($id_noticia){

	        $sql = "SELECT * FROM tbl_noticias WHERE id_noticia = '$id_noticia'";
	        
	        $resultado = mysqli_query($this->conexao->getCon(),$sql);

	        if (mysqli_num_rows($resultado) > 0){
	            return $resultado;
	        } else {
	            return false;
	        }
    	}

    	 public function exibirTodasNoticiasCadastradas(){

			$sql = "SELECT * FROM tbl_noticias ORDER BY id_noticia";

			$resultado = mysqli_query($this->conexao->getCon(),$sql);

			if (mysqli_num_rows($resultado) > 0){
			    return $resultado;
			} else {
			    return false;
			}
	    }

	    public function consultarCodigoN($id_noticia){

	        $sql = "SELECT * FROM tbl_noticias WHERE id_noticia = '$id_noticia'";
	        
	        $resultado = mysqli_query($this->conexao->getCon(),$sql);

	        if (mysqli_num_rows($resultado) > 0){
	            return $resultado;
	        } else {
	            return false;
	        }
    	}

    	public function alterar($id_noticia,$titulo,$subtitulo,$conteudo,$datahora,$id_categoria,$foto){

        	$sql = "UPDATE tbl_noticias SET titulo = '$titulo', subtitulo = '$subtitulo', conteudo = '$conteudo', datahora = '$datahora', id_categoria = '$id_categoria', foto = '$foto' WHERE id_noticia = '$id_noticia'";
        	
       		if (mysqli_query($this->conexao->getCon(), $sql)){
           		return true;
        	} else {
            	return false;
        	}
    	}

    	public function excluir($id_noticia){

			$sql = "DELETE FROM tbl_noticias WHERE id_noticia = '$id_noticia'";

	        if (mysqli_query($this->conexao->getCon(), $sql)){
	            return true;
	        } else {
	            return false;
	        }
    	}
		


	}