<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FPrenotazione
 *
 * @author Stefano
 */
class FPrenotazione 
{
    private $hostname;
    private $dbname;
    private $user;
    private $pass;
    private $db;
    

    
    public function __construct() {
      $this->hostname="localhost";
      $this->dbname="prontopizza";
      $this->user="root";
      $this->pass="";
      $this->connetti($this->hostname,$this->dbname,$this->user,$this->pass);
      
        }
    
    public function get_hostname()
    {
        return $this->hostname;
    }
    
    public function get_dbname()
    {
        return $this->dbname;
    }
    
    public function get_user()
    {
        return $this->user;
    }
    
    public function get_pass()
    {
        return $this->pass;
    }
    
    public function get_db()
    {
        return $this->db;
    }
    
    
    public function connetti($hostname,$dbname,$user,$pass)
    {
        try {
 
            $this->db = new PDO ("mysql:host=$hostname;dbname=$dbname", $user, $pass);
            
           
            
            
    } 
    catch (PDOException $e) 
    {
    echo "Errore: " . $e->getMessage();
    die();
    }
        
    }
    
    public function salva_prenotazione(EPrenotazione & $prenotazione)
    {
        $ristorante=$prenotazione->get_ristorante()->getid();
        
        $utente=$prenotazione->get_utente()->get_id();
        
        $tavolo=$prenotazione->get_tavolo()->getid();
        
        //$num_tavolo->$prenotazione->get_tavolo();
        //$num_tavolo->$num_tavolo->getnumero_tavolo();
        $data_prenotazione=$prenotazione->get_prenotato_per();
        $data_prenotazione_string=$data_prenotazione->format("Y-m-d H:i:s");
        
        //$data_scadenza=$prenotato_per->add(new DateInterval ('PT3H'));
        //$data_scadenza=$data_scadenza->format("d-m-Y H:i:s");
        
        $info=$prenotazione->get_info_agg();
        
        $this->db->query("INSERT INTO `prenotazione` (`id`, `ristorante`, `utente`, `tavolo`, `effettuata`,`data_prenotazione`, `info`) VALUES (NULL, '$ristorante', '$utente', '$tavolo', CURRENT_TIMESTAMP, '$data_prenotazione_string', '$info')"); 
        
        //$db->query("INSERT INTO `prenotazioni` (`id_prenotazione`, `id_ristorante`, `id_utente`, `id__tavolo`, `num_tavolo`, `data_prenotazione`,`prenotato_per`, `data_scadenza`, `info_agg`) VALUES (NULL, '$id_ristorante', '$id_utente', '$id_tavolo', '$num_tavolo', CURRENT_TIMESTAMP, '$prenotato_per', '$data_scadenza', '$info_agg'"); 
        
        
        
        
        
        
        
        
        
       //INSERT INTO `prenotazioni` (`id_prenotazione`, `id_ristorante`, `id_utente`, `id__tavolo`, `num_tavolo`, `data_prenotazione`, `prenotato_per`, `data_scadenza`, `info_agg`) VALUES (NULL, '$id_ristorante', '$id_utente', '$id_tavolo', '$num_tavolo', CURRENT_TIMESTAMP, '$prenotato_per', '$data_scadenza', '$info_agg');

        
        
    
}
}
