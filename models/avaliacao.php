<?php  
	
	class avaliacao extends model{
		
		public function getAvaliacao(){
			$array = array();

			$sql = "SELECT an.titulo, an.imagem, us.usuario, av.dtaAvaliacao, av.vlrAvaliacao, av.comentarioAva FROM avaliacao as av INNER JOIN anuncios as an ON av.anuncios_idanuncios = an.idanuncios INNER JOIN usuario as us ON av.usuario_idusuario = us.idusuario";
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
			
	        $sql = "INSERT INTO anuncios (anuncios_idanuncios, usuario_idusuario , dtaAvaliacao, vlrAvaliacao, comentarioAva) values ('".$avaliacao['anuncios_idanuncios']."'"." , '1', '".$avaliacao['dtaAvaliacao']."','".$avaliacao['vlrAvaliacao']."','".$avaliacao['comentarioAva']."') ";

	        $sql = $this->db->query($sql);
		}

		public function deletar_anuncio($id)
		{
	       	$sql = "DELETE FROM avaliacao where idavaliacao=$id";
	       	$sql = $this->db->query($sql);
		}
	}
?>