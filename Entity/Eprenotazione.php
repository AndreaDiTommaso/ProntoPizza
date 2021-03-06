<?php
class EPrenotazione {
   private $id; 
   private $ristorante; 
   private $utente;
   private $tavolo; 
   private $effettuata;
   private $data_prenotazione; 
   private $visualizzata; 
   private $info; 
  
    public function get_id() {return (int) $this->id;}
    public function get_ristorante() {return (int) $this->ristorante;}
    public function get_utente() { return (string) $this->utente;}
    public function get_tavolo() {return (object) $this->tavolo;}
    public function get_effettuata(){return (object) $this->effettuata; }
    public function get_data_prenotazione() {return (object) $this->data_prenotazione;}
    public function get_visualizzata() {return (bool) $this->data_scadenza;}
    public function get_info() {return (string) $this->info;}
    
    
    public function set_id( int $id) {$this->id=$id;}
    public function set_ristorante(int $ristorante) {$this->ristorante=$ristorante;}
    public function set_utente(string $utente) {$this->utente=$utente;}
    public function set_tavolo(ETavolo $tavolo) {$this->tavolo=$tavolo;}
    public function set_effetuata(datetime $e)  {$this->effettuata=$e;}
    public function set_data_prenotazione(datetime $data_prenotazione) {$this->data_prenotazione=$data_prenotazione;}
    public function set_visualizzata (bool $v) {$this->visualizzata=$v;}
    public function set_info(string $info_agg) {$this->info=$info_agg;}
    
    public function crea()
   {
   	$t=$this->tavolo->get_id();
   	$d=$this->data_prenotazione();
   	$y=$this->ristorante->get_id();
   	$r=new Eristornate();
   	$r->set_id($y);
   	$r->carica();
   	$r=$r->get_tavoli_liberi($d);
   	for($i=0;$i<count($r);$i++)
   	{
   		$a=$r[$i];
   		if($y==$a->get_id())
   		{
   			$x=new Fprenotazione($this);
   		   $x->inserisci();
   	      $x=0;
   	    }
   	    else{return "impossibile effettuare la prenotazione"}
   	}
    }
   public function salva()
   {
   	$x=new Fprenotazione($this);
   	$x->modifica();
   	$x=0;
   }
   public function elimina()
   {
   	$this->tavolo->set_prenotato(false);
   	$x=new Fprentazione($this);
   	$x->cancella();
   	$x=0;
   	
   }
   public function carica()
   {
   	$x=new Fprenotazione($this);
   	$x=$x->cerca('id',$this->id);
   	$this->ristorante=$x[0]['ristorante'];
      $this->utente=$x[0]['utente'];
      $this->effettuata=$x[0]['effettuata'];
      $this->visualizzata=$x[0]['visualizzata'];
      $this->info=$x[0]['info'];
      $this->data_prenotazione=$x[0]['data_prenotazione'];
      $y=new Etavolo();
      $y->set_id($x[0]['tavolo']);
      $y->carica();
      $this->tavolo=$y;
   $x=0;$y=0;
     
   }      
    
    
    
}
