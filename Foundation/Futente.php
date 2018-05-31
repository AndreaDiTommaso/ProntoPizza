<?php
class Futente extends Fdb
{
	public function inserisci()
	{
		$query="INSERT INTO Utente VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
	   $arr= array($this->obj->get_nome_utente(),$this->obj->get_nome(),$this->obj->get_cognome(),$this->obj->get_telefono(),$this->obj->get_password(),$this->obj->get_email(),$this->obj->get_data_nascita(),$this->obj->get_sesso(),$this->obj->get_citta(),$this->obj->get_provincia(),$this->obj->get_indirizzo(),$this->obj->get_is_ristoratore(),$this->obj->get_is_amministratore());
		$x=$this->db->prepare($query);
		$this->risultato=$x->execute($arr);
	}
	public function modifica()
	{
		$query="UPDATE Utente SET nome = ? , cognome = ? , telefono = ? , password = ? , email = ? , data_nascita = ? , sesso = ? , citta = ? , provincia = ? , indirizzo = ? , is_ristoratore = ? , is_amministratore = ?  WHERE nome_utente = ? ";
	   $arr=array($this->obj->get_nome(),$this->obj->get_cognome(),$this->obj->get_telefono(),$this->obj->get_password(),$this->obj->get_email(),$this->obj->get_data_nascita(),$this->obj->get_sesso(),$this->obj->get_citta(),$this->obj->get_provincia(),$this->obj->get_indirizzo(),$this->obj->get_is_ristoratore(),$this->obj->get_is_amministratore(),$this->obj->get_nome_utente());
      $x=$this->db->prepare($query);
		$this->risultato=$x->execute($arr);
   }

}
?>