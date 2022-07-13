<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Model');
        $this->load->database();
        $this->load->helper('url');
       // $this->load->helper('assets');
      }
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
    
}
