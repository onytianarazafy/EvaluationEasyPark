<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Model');
        $this->load->model('ModelParking');
        $this->load->model('UserModel');
        $this->load->database();
        $this->load->helper('url');
       // $this->load->helper('assets');
      }
    //   public function userDetails(){
    //     // POST data
    //     $postData = $this->input->post();
    //     // get data
    //     $data = $this->Model->getUserDetails($postData); 
    //     echo json_encode($data);
    //   }

    public function index(){
       //$data['data'] = $this->db->get("items")->result();
        //$this->load->view('itemlist', $data);
        $data['listeTrajet'] = $this->Model->getAllTrajet();
        $this->load->view('Acceuil', $data);
    }
    public function addPlaceVehicule(){$this->load->view('addStock');}
    public function Admin(){
        $data['tarif'] = $this->Model->getAllTarif();
        $data['place'] = $this->ModelParking->getAllPlace();
        $data['user'] = $this->UserModel->getAllUsers();
        $data['parking'] = $this->ModelParking->getAllParking();
        $this->load->view('admin' , $data);
    }
    public function ToReserver(){
        $data['user'] = $this->UserModel->getAllUsers();
        $data['typePassager'] = $this->Model->getAllTypePassager();
        $this->load->view('Reserver',$data);
    }

    public function ToLogin(){
         $this->load->view('Login');
    }
    public function ToValidationRecharge(){
        $data['valider'] = $this->UserModel->getAllAvalider();
        $this->load->view('ValidationRecharge' ,$data );
    }
    public function ToSignUp(){ $this->load->view('signUp');}
    public function ajaxRequestPost(){
        $data = array(
        'title' => $this->input->post('title'),
        'description' => $this->input->post('description')
        );
        $this->db->insert('items', $data);
        echo 'Added successfully.'; 
    }
    public function AjouterAdmin(){
		$this->load->helper('assets');
		$this->Model->insertAdmin($this->input->post('username'),$this->input->post('email'),$this->input->post('password'));
		redirect(site_url());
	}
    public function Login(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$row = $this->Model->loginAdmin($username,$password);
		//if($row>0){ redirect(site_url('Welcome/Admin'));}
        //else {redirect('Welcome/PageError');}
	}
    public function validerPorteFeuille(){
		$this->UserModel->validerPorteFeuille($this->input->post('iduser'),$this->input->post('montant'));
        $this->UserModel->updateEntreePortefeuille($this->input->post('montant'),$this->input->post('iduser'));
        $this->UserModel->deleteValidationRecharge($this->input->post('id'));
	}
    public function PayerParking(){
		$this->UserModel->updateUtilisateur($this->input->post('montant'),$this->input->post('iduser'));
        $this->UserModel->updateSortiePortefeuille($this->input->post('montant'),$this->input->post('iduser'));
	}
    public function addToAValider(){
		$this->UserModel->insertValider($this->input->post('idUsers'),$this->input->post('porteFeuille'));
	}
    public function gestionTarif(){
        $data['tarif'] = $this->ModelParking->getAllTarif();
        $this->load->view('gestionTarif' ,  $data);
    }
}
