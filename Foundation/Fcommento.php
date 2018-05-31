<?php
class Fcommento extends Fdb
{
	public function inserisci()
	{
		$query="INSERT INTO Commento VALUES ( null ,?,?,?,null)";
	   $arr= array($this->obj->get_utente()->get_nome_utente(),$this->obj->get_ristorante()->get_id(),$this->obj->get_testo());
		$x=$this->db->prepare($query);
		$this->risultato=$x->execute($arr);
	}
	public function modifica()
	{
		$query="UPDATE Commento SET utente = ? , ristorante = ?, testo = ?  WHERE id = ? ";
		$arr= array($this->obj->get_utente()->get_nome_utente(),$this->obj->get_ristorante()->get_id(),$this->obj->get_testo() , $this->obj->get_id());
		$x=$this->db->prepare($query);
		$this->risultato=$x->execute($arr);
	}
?>