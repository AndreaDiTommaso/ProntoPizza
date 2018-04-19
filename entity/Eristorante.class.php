<?php
class ristorante
{
	private $id;
	private $nome;
	private $indirizzo;
	private $ristoratore;
	private $commenti=array();
	private $catalogo=array();
	private $tavoli=array();
	private $descrizione;
	private $galleria=array();
	private $telefono;
	public function __construct(){}
	
	public function setid( int $i){$this->id=$i;} 
	public function setnome(string $n){$this->nome=$n;}
	public function setindirizzo(string $i){$this->indirizzo=$i;}
	public function setristoratore(Eristoratore $r){$this->ristoratore=$r;}   
	public function setdescrizione(string $d){$this->descrizione=$d;} 
	public function settelefono(string $t){$this->telefono=$t;} 
	public function pushcommento(string $c) {array_push($this->commenti,$c);}  
	public function pushcibo(string $c) {array_push($this->catalogo,$c);}
	public function pushtavolo(string $t) {array_push($this->tavoli,$t);}
	public function pushfoto(string $f){array_push($this->galleria,$f);}
	
	public function getid(){return (int) $this->id;}
    public function getnome(){return (string) $this->nome;}
    public function getindirizzo(){return (string) $this->indirizzo;}
    public function getristoratore(){return (object) $this->ristoratore;}
    public function getcommenti(){return (array) $this->commenti;}
    public function getcatalogo(){return (array) $this->catalogo;}
    public function getdescrizione(){return (string) $this->descrizione;}
    public function gettelefono(){return (string) $this->telefono;}
    public function getgalleria(){return (array) $this->galleria;}
    public function gettavoli(){return (array) $this->tavoli;}
    
	

	
	
}

?>
