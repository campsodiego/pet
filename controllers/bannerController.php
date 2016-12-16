<?php

 class bannerController extends controller{

	public function lista_banner(){
		$banner = new banner();
		$dados['lista_banner'] = $banner->getBanners();
		$this->loadTemplate('listaBanner',$dados);
	}

	public function cadastra_banner()
	{
		$this->loadTemplate('cadastra_banner');
	}

	public function salva_banner()
	{
		$dados=$_POST;
		$nomeImagem=date("Y.m.d-H.i.s").strtolower($_FILES['imagem']['name']);
		$uploaddir = $_SERVER['DOCUMENT_ROOT'] .'/pet/assets/upload/';
		$uploadfile = $uploaddir.$nomeImagem;
		move_uploaded_file($_FILES['imagem']['tmp_name'], $uploadfile);
		$dados['imagem']=$nomeImagem;
		$banner = new banner();
		$banner->salvaBanner($dados);
		header('Location:'.BASE_URL.'/banner/lista_banner/');
		exit();
	}

	public function editar_banner($id){
		$banner = new banner();
		$dados['banner'] = $banner->getUnicoBanner($id);
		$this->loadTemplate('editar_banner',$dados);
	}

	public function deletar_banner($id){
		$banner = new banner();
		$dados['banner'] = $banner->deletar_banner($id);
		header('Location:'.BASE_URL.'/banner/lista_banner/');
		exit();
	}

	public function salva_edita_banner()
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
			
		$banner = new banner();
		$banner->salvaEditaBanner($dados);
		header('Location:'.BASE_URL.'/banner/lista_banner/');
		exit();
	}

}
