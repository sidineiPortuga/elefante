<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
	}

	public function index()
	{
		$this->template->showOff('templateoff/register.php');
	}


	public function create(){
		$this->load->library('registerlib');

		$data =	json_decode(file_get_contents("php://input"));
		
		$register = new Registerlib();
		$validate = $register->validate_register($data);

		$CI =& get_instance();
        $CI->output->set_content_type('application/json');
        return $CI->output->set_output(json_encode($validate));
	}
}
