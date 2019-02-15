<?php

class conexao {

	private $usuario	=	'root';
	private $senha		=	'usbw';
	private $caminho	=	'localhost';
	private $banco		=	'brnoticias';
	private $con;
	
	public function __construct(){
	
		$this->con = mysqli_connect
		($this->caminho,$this->usuario,$this->senha,$this->banco)
		or die ("Conexao com banco de dados falhou".mysqli_connect_error($this->con));
		
	}
	
	public function getCon(){
	
		return $this->con;

	}

}