<?php
class Etavolo 
{
	private $id;
	private $posti;
	private $prenotato;
	private $orario;
	public function __construct(){}
	
	public function getid(){return (int) $this->id;}
	public function getposti(){return (int) $this->posti;}
	public function getprenotato(){return (bool) $this->id;}
	public function getorario(){return (object) $this->id;}
	
	public function setid(int $i){$this->id=$i;}
	public function setposti(int $p){$this->posti=$p;}
	public function setprenotato(bool $p){$this->prenotato=$p;}
	public function setorario(DateTime $d){$this->orario=$d;}
	
	
	
}
$x=new Etavolo();
$x->setposti(3);
echo $x->getposti();
?>
