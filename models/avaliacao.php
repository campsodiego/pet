<?php  
	
	class avaliacao extends model{
		
		public function getAvaliacao($id){
			$array = array();

			$sql = "SELECT an.tituloAnuncio, an.imagem, us.nome, av.dtaAvaliacao, av.vlrAvaliacao, av.comentarioAva, av.idavaliacao, av.anuncios_idanuncios, av.usuario_idusuario FROM avaliacao as av INNER JOIN anuncios as an ON av.anuncios_idanuncios = an.idanuncios INNER JOIN usuario as us ON av.usuario_idusuario = us.idusuario WHERE av.anuncios_idanuncios = $id";
			$sql = $this->db->query($sql);
			if($sql->rowCount() > 0){
				$array = $sql->fetchAll();
			}

			return $array;
		}

		public function setAvaliacao(){

		}

		public function getUnicaAvaliacao($id){
			$array = array();

	    	$sql = "SELECT * FROM avaliacao WHERE idavaliacao=$id";
	    	$sql = $this->db->query($sql);

	    	if($sql->rowCount() > 0){
	    	  $array = $sql->fetchAll();
	    	}

	    	return $array;
		}

		public function salvaAvaliacao($avaliacao){
			
	        $sql = "INSERT INTO avaliacao (anuncios_idanuncios, usuario_idusuario , dtaAvaliacao, vlrAvaliacao, comentarioAva) values ('".$avaliacao['idanuncio']."', '1', CURDATE(),'".$avaliacao['vlrAvaliacao']."','".$avaliacao['comentarioAva']."') ";
	        $sql = $this->db->query($sql);
		}

		public function deletar_anuncio($id)
		{
	       	$sql = "DELETE FROM avaliacao where idavaliacao=$id";
	       	$sql = $this->db->query($sql);
		}
	}
?>