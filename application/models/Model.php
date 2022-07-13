<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Model extends CI_Model{	
	function getAllTrajet(){
		$sql = 'SELECT  * FROM trajet ';
		$query = $this->db->query($sql);
		$produit = array();
		foreach ($query->result_array() as $key) {
			$produit[] = $key;
		}
		return $produit;
	}
	function getAllListeVol($idTrajet){
		$sql = "SELECT * FROM listeVol where idTrajet='".$idTrajet."'";
		$query = $this->db->query($sql);
		$produit = array();
		foreach ($query->result_array() as $key){
			$produit[] = $key;
		}
		return $produit;
	}
	function getAllTypePassager(){
		$sql = "SELECT * FROM typePassager";
		$query = $this->db->query($sql);
		$produit = array();
		foreach ($query->result_array() as $key){
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
	// function getUserDetails($postData=array()){
	// 	$response = array();
	// 	if(isset($postData['username']) ){
	// 	  // Select record
	// 	  $sql = 'SELECT  * FROM users where username= '$postData['username']' ';
	// 		$query = $this->db->query($sql);
	// 		//$produit = array();
	// 		foreach ($query->result_array() as $key) {
	// 			$produit[] = $key;
	// 		}
	// 	}
	// 	return $response;
	// }

	public function loginAdmin($username,$password)
	{
		$que=$this->db->query("select id from  administrateur where username='$username' and password='$password'");
		$row = $que->num_rows();
		echo $row;
		//return $row;
	}

	public function insertAdmin($username,$email,$mdp){
		$sql = "INSERT INTO administrateur (username,email,password)
		VALUES ('$username','$email','$mdp')";
		//echo $sql;
		$this->db->query($sql);
	}

	

}
?>