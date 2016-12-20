<?php 

class anuncios extends model{

	private $titutlo;
	private $descricaoReduzida;
	private $valor;
	private $descricao;
	private $imagem;

	public function getAnuncios(){
		$array = array();

		$sql = "SELECT * FROM anuncios";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function setAnuncios(){

	}

	public function getUnicoAnuncio($id){
		$array = array();

    	$sql = "SELECT * FROM anuncios WHERE idanuncios=$id";
    	$sql = $this->db->query($sql);

    	if($sql->rowCount() > 0){
    	  $array = $sql->fetchAll();
    	}

    	return $array;
	}

	public function salvaAnuncio($anuncio)
	{
		// lembrar de mudar o usuario
        $sql = "INSERT INTO anuncios (tituloAnuncio, usuario_idusuario , descricaoreduzida, vlrAnuncio, descricaoAnuncio, imagem) values ('".$anuncio['titulo']."'"." , '1', '".$anuncio['descricaoReduzida']."','".$anuncio['vlrAnuncio']."','".$anuncio['descricaoDetalhada']."','".$anuncio['imagem']."') ";

        $sql = $this->db->query($sql);
	}

	public function salvaEditaAnuncio($anuncio)
	{
     	$sql =" UPDATE anuncios set tituloAnuncio='".$anuncio['titulo']."', descricaoreduzida='".$anuncio['descricaoReduzida']."', vlrAnuncio='".$anuncio['vlrAnuncio']."', descricaoAnuncio='".$anuncio['descricaoDetalhada']."',  imagem='".$anuncio['imagem']."' where idanuncios='".$anuncio['idanuncios']."' ";
      	$sql = $this->db->query($sql);
	}

	public function deletar_anuncio($id)
	{
       	$sql = "DELETE FROM anuncios where idanuncios=$id";
       	$sql = $this->db->query($sql);
	}
}