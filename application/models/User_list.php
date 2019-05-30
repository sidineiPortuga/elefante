<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_list extends CI_Model {

    public function __construct(){
        parent::__construct();

        $this->load->database();
    }

    
public function get_user_data(){
    $this->db
    ->select('user_id,user_name, user_email, user_pass', 'data_user','user_status')
    ->from('tb_users');
    return $this->db->get()->result();
}

}


