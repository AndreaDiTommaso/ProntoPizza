<?php
class Eutente {
    private $nome; //string
    private $cognome; //string
    private $data_nascita; //DateTime
    private $sesso; //bool
    private $telefono ;//string
    private $password ;//password
    private $citta;
    private $provincia;
    private $indirizzo;
    private $nome_utente; //string
    private $email; //string
    private $is_ristoratore=false; //boolean
    private $is_amministratore=false;
    private $ordini=array();
    private  $prenotazioni=array();
    private $ristoranti=array();
    
    public function get_nome() {return (string) $this->nome;}
    public function  get_cognome()
    {
        return  (string) $this->cognome;
    }
    public function get_data_nascita()
    {
        return  (object) $this->data_nascita;
    }
    public function get_indirizzo()
    {
        return  (string) $this->indirizzo;
    }
     public function get_citta()
    {
        return (string) $this->citta;
    }
     public function get_provincia()
    {
        return (string) $this->provincia;
    }
     public function get_sesso()
    {
        return (bool) $this->sesso;
    }
     public function get_nome_utente()
    {
        return (string) $this->nome_utente;
    }
     public function get_email()
    {
        return  (string) $this->email;
    }
     public function get_is_ristoratore()
    {
        return (bool) $this->is_ristoratore;
    }
     public function get_is_amministratore()
    {
        return (bool) $this->is_amministratore;
    }
     public function get_ordini()
    {
        return (array) $this->ordini;
    }
     public function get_prenotazioni()
    {     
        return (array) $this->prenotazioni;
    }
    public function get_password()
    {
      return (string) $this->password;
     }
    public function get_telefono()
    {
      return  (int) $this->telefono;
     }
    
   public function get_ristoranti(){return (array) $this->ristoranti;} 
	public function add_ristorante(Eristorante $r) {array_push($this->ristoranti,$r);}
   
   
   
    public function set_nome( string $n) {
        $this->nome=$n;
    }
    public function set_cognome( string $c) {
        $this->cognome=$c;
    }
    public function set_indirizzo( string $i) {
        $this->indirizzo=$i;
    }
    public function set_data_nascita( DateTime $d) {
        $this->data_nascita=$d;
    }
    public function set_sesso( bool $s) {
        $this->sesso=$s;
    }
    public function set_nome_utente(string $n) {
        $this->nome_utente=$n;
    }
    public function set_email( string $e) {
        $this->email=$e;
    }
    public function set_provincia( string $p) {
        $this->provincia=$p;
    }
    public function add_ordine(EOrdine $aOrdine) {
        $this->ordini[]=$aOrdine;
    }
    public function add_prenotazione(EPrenotazione $prenotazione) {
        $this->prenotazioni[]=$prenotazione;
    }
    public function set_is_ristoratore( bool $rist) {
        $this->is_ristoratore=$rist;
    }
    public function set_is_amministratore(bool $amm) {
        $this->is_amministratore=$amm;
    }
    public function set_citta(string $c) {
        $this->citta=$c;
    }
    public function set_telefon(int $t) {
        $this->telefono=$t;
    }
    public function set_password( string $p) {
        $this->password=$p;
    }
   
   public function esiste()
   {
   	$x=new Futente($this);
   	$x=$x->cerca($this->nome_utente);
   	if(empty($x)){return false;}
   	else {return true;}
   }
   public function carica()
   {
   	$x=new Futente($this);
   	$x=$x->cerca('nome_utente',$this->nome_utente);
   	$this->nome=$x[0]['nome'];
      $this->cognome=$x[0]['cognome'];
      $this->data_nascita=$x[0]['data_nascita'];
      $this->sesso=$x[0]['sesso'];
      $this->telefono=$x[0]['telefono'];
      $this->password=$x[0]['password'];
      $this->citta=$x[0]['citta'];
      $this->provincia=$x[0]['provincia'];
      $this->indirizzo=$x[0]['indirizzo'];
      $this->email=$x[0]['email'];
      $this->is_ristoratore=$x[0]['is_ristoratore'];
      $this->is_amministartore=$x[0]['is_amministratore'];
      $y=new Eprenotazione();
      $y=new Fprenotazione($y);
      $y=$y->cerca('utente',$this->nome_utente);
    for($i=0; $i<count($y); $i++)
      {
      	$t=$y[$i];
      	$z=new Eprenotazione();
      	$z->set_id($t['id']);
      	$z->carica();
      	array_push($this->prenotazioni,$z);
      }
      $y=new Eordine();
      $y=new Fordine($y);
      $y=$y->cerca('utente',$this->nome_utente);
      for($i=0; $i<count($y); $i++)
      {
      	$t=$y[$i];
      	$z=new Eordine();
      	$z->set_id($t['id']);
      	$z->carica();
      	array_push($this->ordini,$z);
      }
      $y=new Eristorante();
      $y=new Fristorante($y);
      $y=$y->cerca('ristoratore',$this->nome_utente);
     for($i=0; $i<count($y); $i++)
      {
      	$t=$y[$i];
      	$z=new Eristorante();
      	$z->set_id($t['id']);
      	$z->carica();
      	array_push($this->ristoranti,$z);
      }
   $x=0;$y=0;$z=0;
     
   }
   public function crea()
   {
   	$x=new Futente($this);
   	$x->inserisci();
   	$x=0;
   }
   public function salva()
   {
   	$x=new Futente($this);
   	$x->modifica();
   	$x=0;
   }
   public function elimina()
   {
   	$y=$this->ristoranti;
   	foreach($y as $z){$z->elimina();}
   	$x=new Futente($this);
   	$x->cancella();
   	$x=0;
   }
}
?>
        
