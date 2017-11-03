<?php
class getImage{
    private $conn;
    private $host;
    private $user;
    private $pass;
    private $db;

    function __construct(){
        $this->conn = false;
        $this->host = 'localhost';
        $this->user = 'root';
        $this->pass = '';
        $this->db = 'slider';
        $this->connect();
    }

    public function insertImage(){
      if(isset($_POST["img"]) && (!empty($_POST["img"]))){
        $img = $_POST['img'];
        $query = "INSERT INTO image_slider(img) VALUES('$img')";
        $result = $this->conn->query($query);
        return $result;
        } else {
      }
    }

    public function select($query){
        $result = $this->conn->query($query);
        $rows = array();
        while ($row = mysqli_fetch_array($result)){
          $rows[] = $row;
          $i = '1';
          $imageDisplay = '';
          foreach($rows as $row)
          {
              $images = $row['img'];
              $id = $row['id'];
              $imageDisplay = '<img id="'.$i.'" class = "imageText" src="'.$images.'" border="0"/>';
              $i++;
            }
            echo $imageDisplay;
        }
    }

    function connect(){
        if(!$this->conn){
            $this->conn = mysqli_connect($this->host,$this->user,$this->pass);
            mysqli_select_db($this->conn, $this->db);
        }
        if (!$this->conn) {
		$this->status_fatal = true;
		echo 'Connection failed';
		die();
			}
      return $this->conn;
    }
}

$img = new getImage;
$img->insertImage();
?>
