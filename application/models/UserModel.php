<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class UserModel extends CI_Model{	
	function getAllAvalider(){
		$sql = 'SELECT  * FROM Avalider ';
		$query = $this->db->query($sql);
		$produit = array();
		foreach ($query->result_array() as $key) {
			$produit[] = $key;
		}
		return $produit;
	}
    function getAllUsers(){
		$sql = 'SELECT  * FROM users ';
		$query = $this->db->query($sql);
		$produit = array();
		foreach ($query->result_array() as $key) {
			$produit[] = $key;
		}
		return $produit;
	}

    public function AddToPortefeuille($iduser,$montE,$montS,$date , $Etat){
		$sql = "INSERT INTO portefeuille (idUtilisateur,montantEntree , montantSortie , dateModifier , etat)
		VALUES ('$iduser','$montE','$montS','$date','$Etat')";
		//echo $sql;
		$this->db->query($sql);
	}

	public function updateUtilisateur($montant,$id){
		$sql = "update users set portefeuille = '$montant' where id='$id'";
		echo $sql;
		$this->db->query($sql);
	}
	
	public function updateSortiePortefeuille($montant,$id){
		$sql = "update users set sortie = '$montant' where id='$id'";
		//echo $sql;
		$this->db->query($sql);
	}

	public function updateEntreePortefeuille($montant,$id){
		$sql = "update portefeuille set montantEntree = '$montant' where idUser='$id'";
		echo $sql;
		$this->db->query($sql);
	}
	                                                        
	public function validerPorteFeuille($idUser , $vola){
		$sql = "update users set portefeuille = '$vola'   where id='".$idUser."'";
		//echo $sql;
		$this->db->query($sql);
	}

	public function insertPlace($numero ,$remarque , $taille){
		$sql = "INSERT INTO place (numero,remarque,taille)
		VALUES ('$numero','$remarque','$taille')";
		//echo $sql;
		$this->db->query($sql);
	}

    public function insertValider($idUser,$montant){
		$sql = "INSERT INTO Avalider (idUser,montant,daty , remarque)
		VALUES ('$idUser','$montant','2022-07-13', 'rien')";
		//echo $sql;
		$this->db->query($sql);
	}

    public function deleteVoitureParking($idParking){
		$sql = "DELETE FROM parking where id='".$idParking."'";
		//echo $sql;
		$this->db->query($sql);
	}

    public function deleteValidationRecharge($id){
		$sql = "DELETE FROM Avalider where id='".$id."'";
		//echo $sql;
		$this->db->query($sql);
	}


   

}
?> 