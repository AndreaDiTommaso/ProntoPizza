<?php

/*
 * @Access public
 * @package Entity
 */

/**
 * Description of EUtente
 *
 * @author Stefano
 */
class EUtente {
    public $nome; //string
    public $cognome; //string
    public $data_nascita; //DateTime
    public $luogo_nascita; //EResidenza
    public $sesso; //char
    public $nome_utente; //string
    public $mail; //string
    public $residenza; //EResidenza
    public $is_ristoratore=false; //boolean
    public $is_amministratore=false; //boolean
    
     /**
     * @AssociationType Entity.EOrdine
     * @AssociationMultiplicity 0..*
     * @AssociationKind Aggregation
     */
    public $ordini=array();
    
     /**
     * @AssociationType Entity.EPrenotazione
     * @AssociationMultiplicity 0..*
     * @AssociationKind Aggregation
     */
    public $prenotazioni=array();
    
    //Questa funzione restituisce una stringa
    public function get_nome()
    {
        return $this->nome;
    }
    
    //Questa funzione restituisce una stringa
    public function get_cognome()
    {
        return $this->cognome;
    }
    
    //Questa funzione restituisce un oggetto di tipo "DateTime"
    public function get_data_nascita()
    {
        return $this->data_nascita;
    }
    
    //Questa funzione restituisce un oggetto di tipo "EResidenza"
    public function get_luogo_nascita()
    {
        return $this->luogo_nascita;
    }
    
    //Questa funzione restituisce un char
    public function get_sesso()
    {
        return $this->sesso;
    }
    
    //Questa funzione restituisce una stringa
    public function get_nome_utente()
    {
        return $this->nome_utente;
    }
    
    //Questa funzione restituisce una stringa
    public function get_mail()
    {
        return $this->mail;
    }
    
    //Questa funzione restituisce un oggetto di tipo "EResidenza"
    public function get_residenza()
    {
        return $this->residenza;
    }
    
    //Questa funzione restituisce un booleano
    public function get_is_ristoratore()
    {
        return $this->is_ristoratore;
    }
    
    //Questa funzione restituisce un booleano
    public function get_is_amministratore()
    {
        return $this->is_amministratore;
    }
    
    //Questa funzione restituisce un array di oggetti di tipo EOrdine
    public function get_ordini()
    {
        return $this->ordini;
    }
    
     //Questa funzione restituisce un array di oggetti di tipo EPrenotazione
    public function get_prenotazioni()
    {
        return $this->prenotazioni;
    }
     /**
     * @access public
     * @param $nome string
     * Inserisce il nome dell'utente (string) 
     */
    public function set_nome($nome) {
        $this->nome=$nome;
    }
    
     /**
     * @access public
     * @param $cognome string
     * Inserisce il cognome dell'utente (string) 
     */
    public function set_cognome($cognome) {
        $this->cognome=$cognome;
    }
    
     /**
     * @access public
     * @param $luogo_nascita EResidenza
     * Inserisce il luogo di nascita dell'utente (EResidenza) 
     */
    public function set_luogo_nascita(EResidenza $luogo_nascita) {
        $this->luogo_nascita=$luogo_nascita;
    }
    
     /**
     * @access public
     * @param $data_nascita data
     * Inserisce la data di nascita dell'utente (data) 
     */
    public function set_data_nascita(DateTime $data_nascita) {
        $this->data_nascita=$data_nascita;
    }
    
     /**
     * @access public
     * @param $sesso char
     * Inserisce il sesso dell'utente (char) 
     */
    public function set_sesso($sesso) {
        $this->sesso=$sesso;
    }
    
     /**
     * @access public
     * @param $nome_utente string
     * Inserisce il nome_utente dell'utente (string) 
     */
    public function set_nome_utente($nome_utente) {
        $this->nome_utente=$nome_utente;
    }
    
     /**
     * @access public
     * @param $mail string
     * Inserisce la mail dell'utente (string) 
     */
    public function set_mail($mail) {
        $this->mail=$mail;
    }
    
      /**
     * @access public
     * @param $residenza EResidenza
     * Inserisce la residenza dell'utente (EResidenza) 
     */
    public function set_residenza(EResidenza $residenza) {
        $this->residenza=$residenza;
    }
    
     /**
     * @access public
     * @param Entity.EOrdine aOrdine
     * @ParamType aOrdine Entity.EOrdine
     */
    public function addOrdine(EOrdine $aOrdine) {
        $this->ordini[]=$aOrdine;
    }
    
     /**
     * @access public
     * @param Entity.EPrenotazione prenotazione
     * @ParamType prenotazione Entity.EPrenotazione
     */
    public function addPrenotazione(EPrenotazione $prenotazione) {
        $this->prenotazioni[]=$prenotazione;
    }
  
     /**
     * @access public
     * @param $rist boolean
     * Modifica lo stato dell'utente semplice in ristoratore (boolean) 
     */
    public function set_is_ristoratore($rist) {
        $this->is_ristoratore=$rist;
    }
    
    /**
     * @access public
     * @param $amm boolean
     * Modifica lo stato dell'utente semplice in amministratore (boolean) 
     */
    public function set_is_amministratore($amm) {
        $this->is_amministratore=$amm;
    }
    
   
    
    
    
    
  
    
    
    
    
    
    
    
    
    
}

        