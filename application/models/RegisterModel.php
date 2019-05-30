<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registermodel extends CI_Model {

    public function __construct(){
        parent::__construct();

        $this->load->database();
    }
    // Injetando as informações cadastradas na Table de Usuários
    function registerUser($data){

        $this->db->insert('tb_users', $data);
    }
}
