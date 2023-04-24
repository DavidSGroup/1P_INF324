<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Persona_model");
	}

	public function index()
	{	
		$data = array("data"=>$this->Persona_model->getUsers());

		$this->load->view('persona/main',$data);
	}

	public function delete($carnet){
		$this->Persona_model->delete($carnet);
		$this->session->set_flashdata('success', 'El usuario se eliminó correctamente');
		redirect(base_url()."personas");
	}
}
