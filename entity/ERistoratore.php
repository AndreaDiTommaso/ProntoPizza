<?php

/*
 * @access public
 * @package Entit
 */

/**
 * Description of ERistoratore
 *
 * La classe eredita attributi e funzioni della classe EUtente
 */
class ERistoratore extends EUtente {
    public $ristoranti=array(); //Array di oggetti di tipo ERistorante
    
    public function __construct() {
        $this->is_ristoratore=true;
    }
    
     /**
     * @access public
     * @param Entity.ERistorante ristorante
     * @ParamType ristorante Entity.ERistoranti
     */
    public function addRistorante(ERistorante $ristorante) {
        $this->ristoranti[]=$ristorante;
    }
    
     /**
     * rimuovo il ristorante nella posizione $pos dell'array
     *
     * @param int $pos
     */
    public function removeRistorante($pos) {
        unset($this->ristoranti[$pos]);
        $this->ristoranti=array_values($this->ristoranti);
    }
    
}
