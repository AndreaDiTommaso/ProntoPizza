<?php
class Eordineitem
{
	private $id;
	private $ordine;
	private $cibo;
	private $quantita;
	public function __construct(){}
	
	public function get_id(){return (int) $this->id;}
	public function get_ordine(){return  (int) $this->ordine; }
	public function get_cibo(){return (object)  $this->cibo; }
	public function get_quantita(){return  (int) $this->quantita; }
	
	public function set_id(int $i) {$this->id=$i;}
	public function set_ordine(int $o){$this->ordine=$o;}
	public function set_cibo(Ecibo $c){$this->cibo=$c;}
	public function set_quantita(int $o){$this->quantita=$q;}
	
	 public function crea()
   {
   	$x=new Fordineitem($this);
   	$x->inserisci();
   	$x=0;
   }
   public function salva()
   {
   	$x=new Fordineitem($this);
   	$x->modifica();
   	$x=0;
   }
   public function elimina()
   {
   	$x=new Fordineitem($this);
   	$x->cancella();
   	$x=0;
   }
    public function carica()
   {
   	$x=new Fordineitem($this);
   	$x=$x->cerca('id',$this->id);
   	$this->ordine=$x[0]['ordine'];
      $this->quantita=$x[0]['quantita'];
      $y=new Ecibo();
      $y->set_id($x[0]['cibo']);
      $y->carica();
      $this->cibo=$y;
      $x=0;$y=0;
    }       
}
?>
