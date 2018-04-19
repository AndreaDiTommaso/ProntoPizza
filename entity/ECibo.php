<?php

/*
 * @access public
 * @package Entity
 
 */

/**
 * Description of ECibo
 *
 * @author Stefano
 */
class ECibo {
    public $tipo; //string ("pizza" o "bevanda")
    public $nome; //string
    public $prezzo; //float
    public $id; //int
    
    //Questa funzione restituisce l'id della prenotazione (intero)
    public function get_id()
    {
        return $this->id;
    }
    
    //Questa funzione restituisce una stringa
    public function get_tipo()
    {
        return $this->tipo;
    }
    
     //Questa funzione restituisce un float
    public function get_prezzo()
    {
        return $this->prezzo;
    }
    
     //Questa funzione restituisce una stringa
    public function get_nome()
    {
        return $this->nome;
    }
    
     /**
     * @access public
     * @param $tipo string
     */
    public function set_tipo($tipo) {
        $this->tipo=$tipo;
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
     * @param $prezzo float
     */
    public function set_prezzo($prezzo) {
        $this->prezzo=$prezzo;
    }
    
     /**
     * @access public
     * @param $nome string
     */
    public function set_nome($nome) {
        $this->nome=$nome;
    }
    
    
    
    
    
}
