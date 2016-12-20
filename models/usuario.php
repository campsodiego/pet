<?php 
	class usuario extends model{
	public function getUsuarios($email, $senha){
		$array = array();

		$sql = "SELECT * FROM usuario where email='".$email."' and senha='".$senha."'";/* */
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			return true;
		}

		return false;
	}
	public function getUnicoBanner($id){
		$array = array();

		$sql = "SELECT * FROM usuario WHERE idusuario=$id";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
		  $array = $sql->fetchAll();
		}

		return $array;
	}

	public function salvaUsuario($usuario)
	{
	    $sql = "INSERT INTO usuario (nome, email, senha) values ('".$usuario['nome']."','".$usuario['email']."','".$usuario['senha']."') ";
	    $sql = $this->db->query($sql);
	}
 	public function deletar_banner($id)
	{
	    $sql = "DELETE FROM usuario where idusuario=$id";
	    $sql = $this->db->query($sql);
	}

 	public function salvaEditaBanner($usuario)
	{
		$sql =" UPDATE usuario set nome='".$usuario['nome']."',  email='".$usuario['email']."',  senha='".$usuario['senha']."' where idusuario='".$usuario['idusuario']."' ";
		$sql = $this->db->query($sql);
	}
}
?>