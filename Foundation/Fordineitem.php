<?php
class Fordineitem extends Fdb
{
	public function inserisci()
	{
		$query="INSERT INTO Ordineitem VALUES ( null ,?,?,?)";
	   $arr= array($this->obj->get_ordine()->get_id(),$this->obj->get_cibo()->get_id(),$this->obj->get_quantita());
		$x=$this->db->prepare($query);
		$this->risultato=$x->execute($arr);
	}
	public function modifica()
	{
		$query="UPDATE Ordineitem SET ordine = ? , cibo = ? , quantita = ? WHERE id = ? ";
		$arr= array($this->obj->get_ordine()->get_id(),$this->obj->get_cibo()->get_id(),$this->obj->get_quantita(),$this->obj->get_id());
		$x=$this->db->prepare($query);
		$this->risultato=$x->execute($arr);
	}
?>