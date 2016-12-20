<?php 
class anunciosController extends controller{
	
	public function lista_anuncio(){
		$anuncios = new anuncios();
		$dados['lista_anuncio'] = $anuncios->getAnuncios();
		$this->loadTemplate('lista_anuncio',$dados);
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
		header('Location:'.BASE_URL.'/anuncios/lista_anuncio/');
		exit();
	}
	public function edita_anuncio($id){
		$anuncios = new anuncios();
		$dados['anuncios'] = $anuncios->getUnicoAnuncio($id);
		$this->loadTemplate('editar_anuncio',$dados);
	}

	public function salva_edita_anuncio()
	{
		$dados=$_POST;
		if(!empty($_FILES['imagem']['name'])) {

			$nomeImagem=date("Y.m.d-H.i.s").strtolower($_FILES['imagem']['name']);
			$uploaddir = $_SERVER['DOCUMENT_ROOT'] .'/pet/assets/upload/';
			$uploadfile = $uploaddir.$nomeImagem;	
			move_uploaded_file($_FILES['imagem']['tmp_name'], $uploadfile);
			$dados['imagem']=$nomeImagem;
		}
		else
		{
			$dados['imagem']=$dados['imagemAnterior'];	
		}
			
		$anuncios = new anuncios();
		$anuncios->salvaEditaAnuncio($dados);
		header('Location:'.BASE_URL.'/anuncios/lista_anuncio/');
		exit();
	}

	public function deletar_anuncio($id){
		$anuncio = new anuncios();
		$dados['anuncio'] = $anuncio->deletar_anuncio($id);
		header('Location:'.BASE_URL.'/anuncios/lista_anuncio/');
		exit();
	}

}