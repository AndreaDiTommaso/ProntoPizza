<?php
class Ecibo {
    private $tipo; //string ("pizza" o "bevanda")
    private $nome; //string
    private $prezzo; //float
    private $id; //int
    private $ristorante;
    
    public function get_ristorante(){return (object) $this->ristorante;}
    public function get_id()
    {
        return (int) $this->id;
    }
    public function get_tipo()
    {
        return (string) $this->tipo;
    }
    public function get_prezzo()
    {
    	return (float) $this->prezzo;
    }
    public function get_nome()
    {
        return (string) $this->nome;
    }
    public function set_tipo( string $tipo) {
        $this->tipo=$tipo;
    }
    public function set_id( int $id) {
        $this->id=$id;
    }
    public function set_prezzo(  $prezzo) {
        $this->prezzo=$prezzo;
    }
    public function set_nome( string $nome) {
        $this->nome=$nome;
    }
   public function set_ristorante (Eristorante $r){$this->ristorante=$r;}
    
    public function crea()
   {
   	$x=new Fcibo($this);
   	$x->inserisci();
   	$x=0;
   }
   public function salva()
   {
   	$x=new Fcibo($this);
   	$x->modifica();
   	$x=0;
   }
   public function elimina()
   {
   	$x=new Fcibo($this);
   	$x->cancella();
   	$x=0;
   	
   }
  
    
    
    
}
?>