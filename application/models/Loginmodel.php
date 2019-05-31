<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginmodel extends CI_Model {

    public function __construct(){
        parent::__construct();

        $this->load->database();

    }

    function LoginUser($obejo){

        // var_dump($obejo);
        $obg = json_encode($obejo);
        $obg2 = json_decode($obg); 


        $this->db->where("user_email", $obg2->user_email);
        $this->db->where("user_pass", $obg2->user_pass);
        $usuario = $this->db->get("tb_users")->row_array();   
        return $usuario;

    }
   
}
