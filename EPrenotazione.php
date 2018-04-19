<?php

/*
 * @access public
 * @package Entity
 */
/**
 * Description of EPrenotazione
 *
 * @author Stefano
 */
class EPrenotazione {
   public $id; //int
   public $ristorante; //ERistorante
   public $utente; //EUtente
   public $tavolo; //ETavolo
   public $data_prenotazione; //DateTime
   public $ora_prenotazione; //float
   public $data_scadenza; //DateTime
   public $info_agg; //string
   
    //Questa funzione restituisce l'id della prenotazione (intero)
    public function get_id()
    {
        return $this->id;
    }
    
     //Questa funzione restituisce un oggetto di tipo "ERistorante"
    public function get_ristorante()
    {
        return $this->ristorante;
    }
    
     //Questa funzione restituisce un oggetto di tipo "EUtente"
    public function get_utente()
    {
        return $this->utente;
    }
    
     //Questa funzione restituisce un oggetto di tipo "ETavolo"
    public function get_tavolo()
    {
        return $this->tavolo;
    }
    
    //Questa funzione restituisce un oggetto di tipo DateTime
    public function get_data_prenotazione()
    {
        return $this->data_prenotazione;
    }
    
    //Questa funzione restituisce un oggetto di tipo DateTime
    public function get_data_scadenza()
    {
        return $this->data_scadenza;
    }
    
    //Questa funzione restituisce un float
    public function get_ora_prenotazione()
    {
        return $this->ora_prenotazione;
    }
    
    //Questa funzione restituisce un stringa
    public function get_info_agg()
    {
        return $this->info_agg;
    }
    
     /**
     * @access public
     * @param $id int
     */
    public function set_id($id) {
        $this->id=$id;
    }
    
     /**
     * @access public
     * @param $ristorante ERistorante
     */
    public function set_ristorante(ERistorante $ristorante) {
        $this->ristorante=$ristorante;
    }
    
     /**
     * @access public
     * @param $utente EUtente
     */
    public function set_utente(EUtente $utente) {
        $this->utente=$utente;
    }
    
     /**
     * @access public
     * @param $tavolo ETavolo
     */
    public function set_tavolo(ETavolo $tavolo) {
        $this->tavolo=$tavolo;
    }
    
     /**
     * @access public
     * @param $data_prenotazione data
     */
    public function set_data_prenotazione(data $data_prenotazione) {
        $this->data_prenotazione=$data_prenotazione;
    }
    
    
     /**
     * @access public
     * @param $data_scadenza data
     */
    public function set_data_scadenza(data $data_scadenza) {
        $this->data_scadenza=$data_scadenza;
    }
    
     /**
     * @access public
     * @param $ora float
     */
    public function set_ora($ora) {
        $this->ora=$ora;
    }
    
    /**
     * @access public
     * @param $info_agg string
     */
    public function set_info_agg($info_agg) {
        $this->info_agg=$info_agg;
    }
    
    
    
    
    
}
