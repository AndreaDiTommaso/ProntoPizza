<?php
class Fristorante extends Fdb
{
	public function inserisci()
	{
		$query="INSERT INTO Ristorante VALUES ( null ,?,?,?,?,?,?,?)";
	   $arr= array($this->obj->get_nome(),$this->obj->get_telefono(),$this->obj->get_ristoratore()->get_nome_utente(),$this->obj->get_citta(),$this->obj->get_provincia(),$this->obj->get_indirizzo(),$this->obj->get_descrizione());
		$x=$this->db->prepare($query);
		$this->risultato=$x->execute($arr);
	}
	public function modifica()
	{
		$query="UPDATE Ristorante SET nome = ? , telefono = ? , ristoratore = ? , citta = ? , provincia = ? , indirizzo = ? , descrizione = ?  WHERE id = ? ";
	   $arr= array($this->obj->get_nome(),$this->obj->get_telefono(),$this->obj->get_ristoratore()->get_nome_utente(),$this->obj->get_citta(),$this->obj->get_provincia(),$this->obj->get_indirizzo(),$this->obj->get_descrizione(),$this->obj->get_id());
		$x=$this->db->prepare($query);
		$this->risultato=$x->execute($arr);
	}

}
?>