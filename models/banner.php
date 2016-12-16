 <?php 
class Banner extends model{

  private $imagem;
  private $id;
  private $link;

  public function setImagem($imagem)
  {
  	$this->imagem = $imagem;
  }
 public function setId($id)
  {
  	$this->id = $id;
  }
 public function setLink($link)
  {
  	$this->link = $link;
  }
  public function getImagem(){
  	return $imagem;
  }
  public function getLink(){
  	return $link;
  }
  public function getId(){
  	return $id;
  }

 public function getBanners(){
 	$array = array();

		$sql = "SELECT * FROM banner";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}

		return $array;
 }

 public function getUnicoBanner($id){
  $array = array();

    $sql = "SELECT * FROM banner WHERE idbanner=$id";
    $sql = $this->db->query($sql);

    if($sql->rowCount() > 0){
      $array = $sql->fetchAll();
    }

    return $array;
 }

 public function salvaBanner($banner)
 {
        $sql = "INSERT INTO banner (link,imagem) values ('".$banner['link']."','".$banner['imagem']."') ";

        $sql = $this->db->query($sql);
 }
 public function deletar_banner($id)
 {
        $sql = "DELETE FROM banner where idbanner=$id";
        $sql = $this->db->query($sql);
 }

 public function salvaEditaBanner($banner)
 {
      $sql =" UPDATE banner set link='".$banner['link']."',  imagem='".$banner['imagem']."' where idbanner='".$banner['idbanner']."' ";
       $sql = $this->db->query($sql);
 }




 }