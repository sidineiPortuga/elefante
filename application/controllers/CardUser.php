<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CardUser extends CI_Controller {

	public function index()
	{
        $this->template->show('template/cardUser.php');
      

	}


	public function getUser()
	{
		
			$this->load->model('User_list');
			$model = new User_list();

			$result = $model->get_user_data();

			$resultado = json_encode($result);

			print_r($resultado);

	}
}
