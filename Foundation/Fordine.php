<?php
class Fordine extends Fdb
{
	public function inserisci()
	{
		$query="INSERT INTO Ordine VALUES ( null ,?,?,null,?,?,?,?,?,?)";
	   $arr= array($this->obj->get_ristorante()->get_id(),$this->obj->get_utente()->get_nome_utente(),$this->obj->get_effettuata(),$this->obj->get_destinazione(),$this->obj->get_data_consegna(),$this->obj->get_visualizzata(),$this->obj->get_pagato(), $this->obj->get_confermato(), $this->obj->get_info() );   
		$x=$this->db->prepare($query);
		$this->risultato=$x->execute($arr);
	}
	public function modifica()
	{
		$query="UPDATE Ordine SET ristorante = ? , utente = ? ,  destinazione = ? , data_consegna = ? , visualizzata = ? , pagato = ? , confermato = ? , info = ?  WHERE id = ? ";
		$arr= array($this->obj->get_ristorante()->get_id(),$this->obj->get_utente()->get_nome_utente(),$this->obj->get_destinazione(),$this->obj->get_data_consegna(),$this->obj->get_visualizzata(),$this->obj->get_pagato(), $this->obj->get_confermato(), $this->obj->get_info(),$this->obj->get_id() ); 
		$x=$this->db->prepare($query);
		$this->risultato=$x->execute($arr);
	}

}
?>