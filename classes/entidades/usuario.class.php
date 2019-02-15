<?php

class usuario{

	// variaveis usuario

	private $id_usuario;
	private $nome;
	private $senha;
	private $tipo;

	// variaveis noticias

	private $id_noticia;
	private $titulo;
	private $subtitulo;
	private $foto;
	private $datahora;
	private $conteudo;
	private $id_categoria;
	private $caminho;
	private $categoria;

	// funcoes get usuario

	function getId_usuario(){
		return $this->id_usuario;
	}

	function getNome(){
		return $this->nome;
	}

	function getSenha(){
		return $this->senha;
	}

	function getTipo(){
		return $this->tipo;
	}

	// funcoes set usuario

	function setId_usuario($id_usuario){
		$this->id_usuario = $id_usuario;
	}

	function setNome($nome){
			$this->nome = $nome;
		}

	function setSenha($senha){
			$this->senha = $senha;
		}

	function setTipo($tipo){
		$this->tipo = $tipo;
	}


	// funçoes get noticia

	function getId_noticia(){
		return $this->id_noticia;
	}

	function getTitulo(){
		return $this->titulo;
	}

	function getSubtitulo(){
		return $this->subtitulo;
	}

	function getFoto(){
		return $this->foto;
	}

	function getDatahora(){
		return $this->datahora;
	}

	function getConteudo(){
		return $this->conteudo;
	}

	function getIdcategoria(){
		return $this->id_categoria;
	}

	function getCategoria(){
		return $this->categoria;
	}

	function getCaminho(){
		return $this->caminho;
	}

	//finçoes set

	function setId_noticia($id_noticia){
		$this->id_noticia = $id_noticia;
	}

	function setTitulo($titulo){
		$this->titulo = $titulo;
	}

	function setSubtitulo($subtitulo){
		$this->subtitulo = $subtitulo;
	}

	function setFoto($foto){
		$this->foto = $foto;
	}

	function setDatahora($datahora){
		$this->datahora = $datahora;
	}

	function setConteudo($conteudo){
		$this->conteudo = $conteudo;
	}

	function setIdcategoria($id_categoria){
		$this->id_categoria = $id_categoria;
	}

	function setCategoria($categoria){
		$this->categoria = $categoria;
	}

	function setCaminho($caminho){
		$this->caminho = $caminho;
	}
}