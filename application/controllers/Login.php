<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct(){
		parent::__construct();	

	}

	public function index()
	{
		$this->template->showOff('templateOff/login.php');
	}


	public function autenticar(){
		$this->load->library('loginlib');

		$data =	json_decode(file_get_contents("php://input"));
		
		$login = new Loginlib();
		$validate = $login->validate_login($data);

		$CI =& get_instance();
        $CI->output->set_content_type('application/json');
        return $CI->output->set_output(json_encode($validate));
	}
}
