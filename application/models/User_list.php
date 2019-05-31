<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

class User_list extends CI_Model {

    public function __construct(){
        parent::__construct();

        $this->load->database();
    }


    
    public function get_user_data(){
        $this->db
        ->select('user_id,user_name, user_email', 'data_user')
        ->from('tb_users');
        return $this->db->get()->result();
    }

    public function get_user_data_id($data){
        $this->db
        ->select('user_name, user_email,user_phone,user_adress,user_tags,genero,user_idade, data_user')
        ->from('tb_users')
        ->where('user_id', $data);
        $user = $this->db->get()->result();
        return isset($user[0]->data_user)?$user[0] :  [];
    }


}

?>
