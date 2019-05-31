<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
	}

	public function index()
	{
		$this->template->showOff('templateoff/login.php');
	}


	public function login(){
		$this->load->library('loginlib');
		$data =	json_decode(file_get_contents("php://input"));
		// var_dump($data);
		$login = new Loginlib();
		$validate = $login->validate_usuario($data);

		$CI =& get_instance();
        $CI->output->set_content_type('application/json');
        return $CI->output->set_output(json_encode($validate));
	}
}
