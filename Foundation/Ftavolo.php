<?php
class Ftavolo extends Fdb
{
	public function inserisci()
	{
		$query="INSERT INTO Tavolo VALUES ( null ,?,?,?,?,null)";
	   $arr= array($this->obj->get_posti(),$this->obj->get_prenotato(),$this->obj->get_numero(),$this->obj->get_ristorante()->get_id());
		$x=$this->db->prepare($query);
		$this->risultato=$x->execute($arr);
	}
	public function modifica()
	{
		$query="UPDATE Tavolo SET posti = ? , prenotato = ? , numero = ? , ristorante = ? , data_prenotazione = ? WHERE id = ? ";
		$arr= array($this->obj->get_posti(),$this->obj->get_prenotato(),$this->obj->get_numero(),$this->obj->get_ristorante()->get_id(),$this->obj->get_id());
		$x=$this->db->prepare($query);
		$this->risultato=$x->execute($arr);
	}
?>