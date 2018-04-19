<?php
class Eordine
{
	private $id;
	private $utente;
	private $ristorante;
	private $data;
	private $items=array();
	private $pagato=false;
	private $confermato=false;
	public function __construct(){}
	
	public function getid(){return (int) $this->id;}    
	public function getutente(){return (object) $this->utente;}   
	public function getristorante(){return (int) $this->ristorante;}   
	public function getdata(){return (object) $this->data;} 
	public function getitems(){return (array) $this->items;}  
	public function getpagato(){return (bool)$this->pagato;}   
	public function getconfermato(){return  (bool) $this->confermato;} 
	
	public function pushitem( Eordineitem $i){array_push($this->items,$i);}
	public function setid(int $i){$this->id=$i;}
	public function setutente(Eutente $u){$this->utente=$u;}
	public function setristorante(Eristorante $r){$this->ristorante=$r;}
	public function setdata(DateTime $d){$this->data=$d;}
	public function setpagato( bool $p){$this->pagato=$p;}
	public function setconfermato(bool $c){$this->confermato=$c;}
	  
	        
	
}
$x=new Eordine();
$y=new datetime('1992-12-25');
$x->setdata($y);
echo $x->getdata()->format('y-m-d');
?>
