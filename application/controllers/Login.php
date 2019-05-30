<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
		$this->template->showOff('templateOff/login.php');
	}
	public function autenticar(){
		$this->load->model("Usuarios_model");

		$data = json_encode(file_get_contents("php://input"));


		$dados 	= json_decode($data);
		$teste 	= json_decode($dados);
		$email 	= isset($teste->user_email) ? $teste->user_email : '';
		$pass	= isset($teste->user_pass) ? $teste->user_pass : '';

		if(!empty($email) || !empty($pass)){

			$usuario = $this->Usuarios_model->logarUsuarios($email, $pass);
			if(!empty($usuario)){
				$this->session->set_flashdata("usuarios_logado", $usuario);
				$this->session->set_flashdata("success", "Logado com sucesso!");
				echo("Usuario logado com sucesso");
			}else{
				$this->session->set_flashdata("danger", "Usuario ou senha invalido!");
				echo("senha ou login errados");
			}
		}else{
			echo "algum dos campos estao vazio";
		}
	}
}
