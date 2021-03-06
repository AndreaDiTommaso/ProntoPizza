<?php
class Ecommento 
{
	private $id;
	private $utente;
	private $ristorante;
	private $data;
	private $testo;
	public function __construct(){}
	
	public function get_testo(){return (string) $this->testo; }
	public function get_id(){return (int) $this->id;}
	public function get_utente(){return (string) $this->utente;}
	public function get_ristorante(){return (int) $this->ristorante;}
	public function get_data(){return (object) $this->data;}
	
	public function set_testo(string $t) {$this->testo=$t;}
	public function set_id(int $i){$this->id=$i;}
	public function set_utente(string $p){$this->utente=$p;}
	public function set_ristorante(int $p){$this->ristorante=$p;}
	public function set_data(datetime $d){$this->data=$d;}
	
	 public function crea()
   {
   	$x=new Fcommento($this);
   	$x->inserisci();
   	$x=0;
   }
   public function salva()
   {
   	$x=new Fcommento($this);
   	$x->modifica();
   	$x=0;
   }
   public function elimina()
   {
   	$x=new Fcommento($this);
   	$x->cancella();
   	$x=0;
   	
   }
   public function carica()
   {
   	$x=new Fcommento($this);
   	$x=$x->cerca('id',$this->id);
   	$this->utente=$x[0]['utente'];
      $this->ristorante=$x[0]['ristorante'];
      $this->data=$x[0]['data'];
      $this->testo=$x[0]['testo'];
      $x=0;
    }
     
}

?>