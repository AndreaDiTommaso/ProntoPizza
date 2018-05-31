<?php

class Fcibo extends Fdb
{
	public function inserisci()
	{
		$query="INSERT INTO Cibo VALUES ( null ,?,?,?,?)";
	   $arr= array($this->obj->get_ristorante()->get_id(),$this->obj->get_prezzo(),$this->obj->get_nome(),$this->obj->get_tipo());
		$x=$this->db->prepare($query);
		$this->risultato=$x->execute($arr);
	}
	public function modifica()
	{
		$query="UPDATE Cibo SET ristorante = ? , prezzo = ? , nome = ? , tipo = ? WHERE id = ? ";
		$arr= array($this->obj->get_ristorante()->get_id(),$this->obj->get_prezzo(),$this->obj->get_nome(),$this->obj->get_tipo(),$this->obj->get_id());
		$x=$this->db->prepare($query);
		$this->risultato=$x->execute($arr);
	}
