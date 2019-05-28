<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserPage extends CI_Controller {

	public function index()
	{
        $this->template->show('template/UserPage.php');
      

	}
}
