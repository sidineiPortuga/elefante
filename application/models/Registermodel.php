<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registermodel extends CI_Model {

    public function __construct(){
        parent::__construct();

        $this->load->database();
    }
    
    // PEGA ARRAY $DATA E FAZ O INSERT NO BANCO DE DADOS NA TABELA DE USUÁRIOS
    function registerUser($obejo){

        $this->db->insert('tb_users', $obejo);


    }
    
}
