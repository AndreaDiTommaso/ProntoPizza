<?php
class Fprenotazione extends Fdb
{
	public function inserisci()
	{
		$query="INSERT INTO Prenotazione VALUES ( null ,?,?,?, null ,?,?,?)";
	   $arr= array($this->obj->get_ristorante()->get-id(),$this->obj->get_utente()->get_nome_utente(),$this->obj->get_tavolo()->get_id(),$this->obj->get_effettuata(),$this->obj->get_data_prenotazione(),$this->obj->get_visualizzata(),$this->obj->get_info());
		$x=$this->db->prepare($query);
		$this->risultato=$x->execute($arr);
	}
	public function modifica()
	{
		$query="UPDATE Prenotazione SET ristorante = ? , utente = ? , tavolo = ? ,  data_prenotazione = ? , visualizzata = ? , info = ?  WHERE id = ? ";
	   $arr= array($this->obj->get_ristorante()->get_id(),$this->obj->get_utente()->get_nome_utente(),$this->obj->get_tavolo()->get_id(),$this->obj->get_data_prenotazione(),$this->obj->get_visualizzata(),$this->obj->get_info(), $this->obj->get_id());
		$x=$this->db->prepare($query);
		$this->risultato=$x->execute($arr);
	}
	public function prenotazione_del(Datetime $d)
	{
		$query="SELECT * FROM Prenotazione WHERE data_prenotazione BETWEEN ? AND ? ";
		$t=$d;
		$d->modify('+1 day');
		$x=$this->db->prepare($query);
		$x->execute([$t,$d]);
		$r=$x->fetchAll();
		return $r;
	}

}
?>