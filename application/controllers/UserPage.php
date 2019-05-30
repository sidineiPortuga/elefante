<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserPage extends CI_Controller {

	public function index()
	{
        $this->template->show('template/UserPage.php');
      

	}


	public function getUser()
	{
		$data = json_encode(file_get_contents("php://input"));
		$this->load->model('User_list');
		$model = new User_list();

		$result = $model->get_user_data_id();


		var_dump($this->input->get()).die();




		// $model = new User_list();

		// $result = $model->get_user_data_id($id);

		// $resultado = json_encode($result);

		// print_r($resultado);

	}
}
