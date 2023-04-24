<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Persona_model");
	}

	public function index()
	{
		$this->load->view('user/add');
	}

	public function save(){
		$fullName = $this->input->post("fullName");
		$email = $this->input->post("email");
		$password = $this->input->post("password");
		$repeatPassord = $this->input->post("repeatPassord");

		$this->form_validation->set_rules('fullName', 'Nombre completo', 'required|min_length[3]');
		$this->form_validation->set_rules('email', 'Correo eléctronico', 'required|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
		$this->form_validation->set_rules('repeatPassord', 'Confirma contraseña', 'required|matches[password]');

		if ($this->form_validation->run() == FALSE){
			$this->load->view('user/add');
		}else{
			$data = array(
				"nconpleto"=>$fullName,
				"email"=>$email,
				"password"=>md5($password)
			);
			
			$this->Persona_model->save($data);
			$this->session->set_flashdata('success', 'Se guardo los datos correctamente');
			redirect(base_url()."usuarios");
		}
	}
}
