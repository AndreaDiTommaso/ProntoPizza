<?php
class EPrenotazione {
   private $id; //int
   private $ristorante; //ERistorante
   private $utente; //EUtente
   private $tavolo; 
   private $effettuata;
   private $data_prenotazione; //DateTime
   private $visualizzata; 
   private $info; //string
  
    public function get_id() {return (int) $this->id;}
    public function get_ristorante() {return (object) $this->ristorante;}
    public function get_utente() { return (object) $this->utente;}
    public function get_tavolo() {return (object) $this->tavolo;}
    public function get_effettuata(){return (object) $this->effettuata; }
    public function get_data_prenotazione() {return (object) $this->data_prenotazione;}
    public function get_visualizzata() {return (bool) $this->data_scadenza;}
    public function get_info() {return (string) $this->info;}
    
    
    public function set_id( int $id) {$this->id=$id;}
    public function set_ristorante(ERistorante $ristorante) {$this->ristorante=$ristorante;}
    public function set_utente(EUtente $utente) {$this->utente=$utente;}
    public function set_tavolo(ETavolo $tavolo) {$this->tavolo=$tavolo;}
    public function set_effetuata(datetime $e)  {$this->effettuata=$e;}
    public function set_data_prenotazione(datetime $data_prenotazione) {$this->data_prenotazione=$data_prenotazione;}
    public function set_visualizzata (bool $v) {$this->visualizzata=$v;}
    public function set_info(string $info_agg) {$this->info=$info_agg;}
    
    public function crea()
   {
   	$x=new Fprenotazione($this);
   	$x->inserisci();
   	$x=0;
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
    
    
    
}
