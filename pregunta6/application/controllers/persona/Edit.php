<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Persona_model");
	}

	public function index($id)
	{   
        $data=$this->Persona_model->getUser($id);
		$this->load->view('user/edit',$data);
	}

	public function update($id){
		$fullName = $this->input->post("fullName");
		$email = $this->input->post("email");
		$password = $this->input->post("password");
        $repeatPassord = $this->input->post("repeatPassord");
        
        $data=$this->Persona_model->getUser($id);

        $validateEMail="";
        
        if($email!=$data->email){
            $validateEMail="|is_unique[user.email]";
        }

		$this->form_validation->set_rules('fullName', 'Nombre completo', 'required|min_length[3]');
		$this->form_validation->set_rules('email', 'Correo eléctronico', 'required|valid_email'.$validateEMail);
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
		$this->form_validation->set_rules('repeatPassord', 'Confirma contraseña', 'required|matches[password]');

		if ($this->form_validation->run() == FALSE){
			$this->index($id);
		}else{
			$data = array(
				"nconpleto"=>$fullName,
				"email"=>$email,
                "password"=>md5($password),
                "modified_at"=>date("Y-m-d h:m:s")
			);
			
			$this->Persona_model->update($data,$id);
			$this->session->set_flashdata('success', 'Los datos actualizaron correctamente');
			redirect(base_url()."usuarios");
		}
	}
}
