<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userpage extends CI_Controller {

	public function index()
	{
        $this->template->show('template/Userpage.php');
	}


	public function getUser()
	{
		$this->load->model('User_list');

		$model = new User_list();

		$data = json_decode(file_get_contents("php://input"));


		$result = $model->get_user_data_id($data->id);
		$resultado['user'] = $result;


		$CI =& get_instance();
        $CI->output->set_content_type('application/json');
        return $CI->output->set_output(json_encode($resultado));



		// $model = new User_list();

		// $result = $model->get_user_data_id($id);


		// print_r($resultado);

	}
}
