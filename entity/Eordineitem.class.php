<?php
class Eordineitem
{
	private $ordine;
	private $cibo;
	private $quantita;
	public function __construct(){}
	
	public function getordine(){return  (object) $this->ordine; }
	public function getcibo(){return (object)  $this->cibo; }
	public function getquantita(){return  (int) $this->quantita; }
	
	public function setordine(Eordine $o){$this->ordine=$o;}
	public function setcibo(Ecibo $c){$this->cibo=$c;}
	public function setquantita(int $o){$this->quantita=$q;}
}
/*$x=new Eordineitem(6,"pizza",5);
echo $x->getid_ordine();
echo $x->getcibo();
echo $x->getquantita();*/
?>
