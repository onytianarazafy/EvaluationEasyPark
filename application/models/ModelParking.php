<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class ModelParking extends CI_Model{	
	function getAllPlace(){
		$sql = 'SELECT  * FROM place ';
		$query = $this->db->query($sql);
		$produit = array();
		foreach ($query->result_array() as $key) {
			$produit[] = $key;
		}
		return $produit;
	}
	function getAllParking(){
		$sql = 'SELECT  * FROM parking ';
		$query = $this->db->query($sql);
		$produit = array();
		foreach ($query->result_array() as $key) {
			$produit[] = $key;
		}
		return $produit;
	}

	function getAllPartir(){
		$sql = 'SELECT  * FROM partir ';
		$query = $this->db->query($sql);
		$produit = array();
		foreach ($query->result_array() as $key) {
			$produit[] = $key;
		}
		return $produit;
	}
	function getAllTarif(){
		$sql = 'SELECT  * FROM tarif ';
		$query = $this->db->query($sql);
		$produit = array();
		foreach ($query->result_array() as $key) {
			$produit[] = $key;
		}
		return $produit;
	}

	public function insertPlace($numero ,$remarque , $taille){
		$sql = "INSERT INTO place (numero,remarque,taille)
		VALUES ('$numero','$remarque','$taille')";
		//echo $sql;
		$this->db->query($sql);
	}
	public function insertTarif($durree ,$montant , $remarque){
		$sql = "INSERT INTO tarif (durree,montant,remarque)
		VALUES ('$durree','$montant','$remarque')";
		echo $sql;
		$this->db->query($sql);
	}

	public function insertDatePartir($idParking ,$datePartir){
		$sql = "INSERT INTO partir (idParking,datePartir)
		VALUES ('$idParking','$datePartir')";
		echo $sql;
		$this->db->query($sql);
	}

	public function insertVoitureParking($idPlace ,$idTarif , $numVehicule , $dateDebut , $remarque){
		$sql = "INSERT INTO parking (idPlace,idTarif,numVehicule , dateDebut , remarque)
		VALUES ('$idPlace' ,'$idTarif' , '$numVehicule' , '$dateDebut' , '$remarque')";
		echo $sql;
		$this->db->query($sql);
	}

	public function deleteVoitureParking($idParking){
		$sql = "DELETE FROM parking where id='".$idParking."'";
		//echo $sql;
		$this->db->query($sql);
	}
	
	public function deleteTarif($idTarif){
		$sql = "DELETE FROM tarif where id='".$idTarif."'";
		echo $sql;
		$this->db->query($sql);
	}

}
?>