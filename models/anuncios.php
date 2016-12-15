<?php 

class anuncios extends model{

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
}