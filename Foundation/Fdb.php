<?php
class Fdb
{
    private $hostname;
    private $dbname;
    private $user;
    private $pass;
    public $risultato;
    public $db;
    public $obj;
    public function __construct(object $x) {
      $this->hostname="localhost";
      $this->dbname="Prontopizza";
      $this->user="root";
      $this->pass="";
      $this->obj=$x;
      $this->connetti($this->hostname,$this->dbname,$this->user,$this->pass);
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
  /*  public function __destruct()
    {
    	$this->db=null;
    }*/
    public function get_hostname()
    {
        return $this->hostname;
    }
    
    public function get_dbname()
    {
        return $this->dbname;
    }
    
    public function get_user()
    {
        return $this->user;
    }
    
    public function get_pass()
    {
        return $this->pass;
    }
    
    public function get_db()
    {
        return $this->db;
    }
    public function set_obj(object $o){$this->obj=$o;}
    
    public function connetti($hostname,$dbname,$user,$pass)
    {
        try {
             $this->db = new PDO ('mysql:host='.$hostname.';dbname='.$dbname, $user, $pass);
             
            } 
    catch (PDOException $e) 
    {
    echo "Errore: " . $e->getMessage();
    die();
    }
        
    }
    public function cerca(string $k, string $v)
	{
		 $z=substr(get_class($this),1);
   	 $z=ucfirst($z);
   	 $query= "SELECT * FROM ".$z." WHERE ".$k." = ? ";
   	 $x=$this->db->prepare($query);
   	 $x->execute([$v]);
   	 $r=$x->fetchAll();
   	 return $r;
	}
		public function cancella()
   {
   	$z=substr(get_class($this),1);
   	$z=ucfirst($z);
   	if(get_class($this)== "Futente")
   	{
   		$a="nome_utente";
   		$x=$this->obj->get_nome_utente();
   	}
   	else 
   	{
   		$a="id";
   		$x=$this->obj->get_id();
   	}
		$query= "DELETE FROM ".$z." WHERE ".$a." = ? ";
		
		$y=$this->db->prepare($query);
		$y->execute([$x]);
	}
}
?>  
  