<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cardpage extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('User_list');
	}

	public function index()
	{
        $this->template->show('template/CardPage.php');
	}


	public function getUser()
	{
			$model = new User_list();

			$result = $model->get_user_data();

			$resultado = json_encode($result);

			print_r($resultado);

	}
}
