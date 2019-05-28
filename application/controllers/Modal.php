<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modal extends CI_Controller {

	public function index()
	{
        	$this->template->show('template/ModalPage.php');
	}
}
