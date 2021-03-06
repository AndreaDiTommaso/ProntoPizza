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
	public function get_ristorante(){return (int) $this->ristorante;}
	
	public function set_id(int $i){$this->id=$i;}
	public function set_numero(int $i){$this->numero=$i;}
	public function set_posti(int $p){$this->posti=$p;}
	public function set_prenotato(bool $p){$this->prenotato=$p;}
	public function set_data_consegna(DateTime $d){$this->data_consegna=$d;}
	public function set_ristorante(int $r)	{$this->ristorante=$r;}
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
   public function carica()
   {
   	$x=new Ftavolo($this);
   	$x=$x->cerca('id',$this->id);
   	$this->posti=$x[0]['posti'];
      $this->prenotato=$x[0]['prenotato'];
      $this->numero=$x[0]['numero'];
      $this->ristorante=$x[0]['ristorante'];
      $this->data_prenotazione=$x[0]['data_prenotazione'];
      $x=0;
    }
      
	
}

?>
