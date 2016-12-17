<?php 
	class usuario{
	public function getUsuarios($email,$senha){
		$array = array();

		$sql = "SELECT * FROM usuario where email='".$email."' and senha='".$senha."' ";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			return true;
		}

		return false;
	}
?>