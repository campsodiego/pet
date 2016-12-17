<?php 
class anunciosController extends controller{
	
	public function lista_anuncio(){
		$anuncios = new anuncios();
		$dados['lista_anuncio'] = $anuncios->getAnuncios();
		$this->loadTemplate('listaAnuncio',$dados);
	}

	public function cadastra_anuncio()
	{
		$this->loadTemplate('cadastra_anuncio');
	}

	public function salva_anuncio(){
		$anuncios = new anuncios();
		$dados = $_POST;
		$nomeImagem=date("Y.m.d-H.i.s").strtolower($_FILES['imagem']['name']);
		$uploaddir = $_SERVER['DOCUMENT_ROOT'] .'/pet/assets/upload/';
		$uploadfile = $uploaddir.$nomeImagem;
		move_uploaded_file($_FILES['imagem']['tmp_name'], $uploadfile);
		$dados['imagem']=$nomeImagem;
		$anuncios->salvaAnuncio($dados);
	}

}