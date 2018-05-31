<?php
class Etavolo 
{
	private $id;
	private $posti;
	private $prenotato;
	private $data_prenotazione;
	private $ristorante;
	private $numero;
	public function __construct(){}
	
	public function get_id(){return (int) $this->id;}
	public function get_numero(){return (int) $this->numero;}
	public function get_posti(){return (int) $this->posti;}
	public function get_prenotato(){return (bool) $this->id;}
	public function get_data_consegna(){return (object) $this->data_consegna;}
	public function get_ristorante(){return (object) $this->ristorante;}
	
	public function set_id(int $i){$this->id=$i;}
	public function set_numero(int $i){$this->numero=$i;}
	public function set_posti(int $p){$this->posti=$p;}
	public function set_prenotato(bool $p){$this->prenotato=$p;}
	public function set_data_consegna(DateTime $d){$this->data_consegna=$d;}
	public function set_ristorante(Eristorante $r)	{$this->ristorante=$r;}
	 public function crea()
   {
   	$x=new Ftavolo($this);
   	$x->inserisci();
   	$x=0;
   }
   public function salva()
   {
   	$x=new Ftavolo($this);
   	$x->modifica();
   	$x=0;
   }
   public function elimina()
   {
   	$x=new Ftavolo($this);
   	$x->cancella();
   	$x=0;
   	
   }
      
	
}

?>
