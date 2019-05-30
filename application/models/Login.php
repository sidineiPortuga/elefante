<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
		 $this->template->showOff('templateOff/login.php');
	}
	public function autenticar() {
		$this->load->model("Usuarios_model");
		$email = $this->input->post("email");
		$senha = $this->input->post("senha");
		$usuario = $this->Usuarios_model->logarUsuarios($email, $senha);


		if($usuario){
			$this->session->set_userdata("usuario_logado", $usuario);
			$this->session->set_flashdata("success", "Logado com sucesso");
			echo 'foi';
		}else{
			$this->session->set_flashdata("danger", "usuario ou senha invalidos");
			echo 'nao foi';

		}
	}
}
