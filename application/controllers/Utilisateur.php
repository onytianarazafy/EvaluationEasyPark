<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Model');
        $this->load->model('ModelParking');
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
    public function AjouterTarif(){
		//$this->load->helper('assets');
		$this->ModelParking->insertTarif($this->input->post('duree'),$this->input->post('montant'),$this->input->post('remarque'));
		redirect(site_url());
	} 

    public function RetirerVoiture(){
		//$this->load->helper('assets');
		$this->ModelParking->deleteVoitureParking($this->input->post('idParking'));
		//redirect(site_url());
	}

}
