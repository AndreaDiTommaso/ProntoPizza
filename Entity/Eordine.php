<?php
class Eordine
{
	private $id;
	private $utente;
	private $ristorante;
	private $effettuata;
	private $destinazione;
	private $data_consegna;
	private $items=array();
	private $visualizzato=false;
	private $pagato=false;
	private $confermato=false;
	private $info;
	public function __construct(){}
	
	public function get_id(){return (int) $this->id;}    
	public function get_utente(){return (string) $this->utente;}   
	public function get_ristorante(){return (int) $this->ristorante;}   
	public function get_data_consegna(){return (object) $this->data_consegna;} 
	public function get_effettuata(){return (object) $this->effettuata;}
	public function get_destinazione() {return (string) $this->destinazione; }
	public function get_visualizzata() {return (bool) $this->visualizzata;}
	public function get_items(){return (array) $this->items;}  
	public function get_pagato(){return (bool)$this->pagato;}   
	public function get_confermato(){return  (bool) $this->confermato;} 
	public function get_info(){return (string) $this->info; }
	
	public function add_item( Eordineitem $i){array_push($this->items,$i);}
	public function set_id(int $i){$this->id=$i;}
	public function set_utente(string $u){$this->utente=$u;}
	public function set_ristorante(int $r){$this->ristorante=$r;}
	public function set_data_consegna(DateTime $d){$this->data_consegna=$d;}
	public function set_effettuata(DateTime $d){$this->effettuata=$d;}
	public function set_destinazione(string $d) {$this->destinazione=$d;}
	public function set_visualizzato(bool $v) {$this->visualizzato=$v;}
	public function set_pagato( bool $p){$this->pagato=$p;}
	public function set_confermato(bool $c){$this->confermato=$c;}
	public function set_info(string $i) {$this->info=$i;}
	  
	 public function crea()
   {
   	$x=new Fordine($this);
   	$x->inserisci();
   	$x=0;
   }
   public function salva()
   {
   	$x=new Fordine($this);
   	$x->modifica();
   	$x=0;
   }
   public function elimina()
   {
   	$y=$this->items;
   	foreach($y as $z){$z->elimina();}
   	$x=new Fordine($this);
   	$x->cancella();
   	
   	$x=0;
   } 
    public function carica()
   {
   	$x=new Fordine($this);
   	$x=$x->cerca('id',$this->id);
   	$this->utente=$x[0]['utente'];
      $this->ristorante=$x[0]['ristorante'];
      $this->data_consegna=$x[0]['data_consegna'];
      $this->effettuata=$x[0]['effettuata'];
      $this->destinazione=$x[0]['destinazione'];
      $this->visualizzato=$x[0]['visualizzato'];
      $this->pagato=$x[0]['pagato'];
      $this->confermato=$x[0]['confermato'];
      $this->info=$x[0]['info'];
      $y=new Eordineitem();
      $y=new Fordineitem($y);
      $y=$y->cerca('ordine',$this->id);;
      for($i=0; $i<count($y); $i++)
      {
      	$t=$y[$i];
      	$z=new Eordineitem();
      	$z->set_id($t['id']);
      	$z->carica();
      	array_push($this->items,$z);
      }
      $x=0;$y=0;$z=0;
    }       
   }

?>
