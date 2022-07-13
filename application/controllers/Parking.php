<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parking extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Model');
        $this->load->model('ModelParking');
        $this->load->model('UserModel');
        $this->load->database();
        $this->load->helper('url');
       $this->load->helper('assets');
    }
    public function ajaxRequestPost(){
        $data = array(
        'title' => $this->input->post('title'),
        'description' => $this->input->post('description')
        );
        $this->db->insert('items', $data);
        echo 'Added successfully.'; 
    }

    public function AjouterPlaceParking(){
		//$this->load->helper('assets');
		$this->ModelParking->insertPlace($this->input->post('numero'),$this->input->post('remarque'),$this->input->post('taille'));
		redirect(site_url());
	}

    public function AjouterTarif(){
		//$this->load->helper('assets');
		$this->ModelParking->insertTarif($this->input->post('duree'),$this->input->post('montant'),$this->input->post('remarque'));
		redirect(site_url());
	} 

    public function AjouterVoitureParking(){
        $this->UserModel->updateSortiePortefeuille($this->input->post('montant'),$this->input->post('iduser'));
        $this->ModelParking->insertVoitureParking($this->input->post('idPlace'),$this->input->post('idTarif'),$this->input->post('matricule'),'2022-07-12','rien');
		//redirect(site_url());
	}

    public function RetirerVoiture(){
		$this->ModelParking->deleteVoitureParking($this->input->post('idParking'));
        $this->ModelParking->insertDatePartir($this->input->post('idParking') , '2022-07-14');
        $durre = $this->input->post('durree');
        echo $durre;
        $dateDebut = $this->input->post('dateDebut');
        echo  $dateDebut ;
        $dateFin =  $durre +  $dateDebut;
        echo $dateFin;
        $datePartir = $this->ModelParking->getAllPartir();
        echo  $datePartir;
        if($datePartir >  $dateFin) {
            echo 'Vous Devez une ammende de 150 000 Ar';
        }
		//redirect(site_url());
	}

    public function RetirerTarif(){
		$this->ModelParking->deleteTarif($this->input->post('idTarif'));
		//redirect(site_url());
	}

    public function AfficherAmmende(){
		$this->ModelParking->deleteTarif($this->input->post('idTarif'));
		//redirect(site_url());
	}

    public function UpdateUtilisateur(){
		$this->load->helper('assets');
		$this->load->model('modelesvehicule');
		$this->Modelesvehicule->updateUtilisateur($this->input->post('entree'),$this->input->post('idUtilisateur'));
		$this->Modelesvehicule->updateEntreePortefeuille($this->input->post('entree'),$this->input->post('idUtilisateur'));
		//redirect(site_url());
	}

}
