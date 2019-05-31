<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Loginlib {
        public function __construct(){
            $CI = & get_instance();
            $CI->load->model('Loginmodel');
        }
        public function validate_usuario($data){ 
            if(empty($data->user_email) || empty($data->user_pass))
            {
                return array('success'=>false, 'msg'=> 'Campos login ou senha vazios');
            }
            else
            {
                $obejo = [
                    'user_email' => $data->user_email,
                    'user_pass' => $data->user_pass
                ];
    
                $model = new Loginmodel();
    
                $id = $model->LoginUser($obejo); 
                if($id){
                    session_start();
                    $_SESSION['success'] = $id;
                    return array('success'=>true, 'msg'=>'Usuário logado com sucesso!');  
                }else{
                    return array('success'=>false, 'msg'=> 'Oops, algo deu errado...');
                }

            }

        }
}