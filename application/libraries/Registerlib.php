<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    
    class Registerlib {
        public function __construct(){
            $CI = & get_instance();
    		$CI->load->model('Registermodel');
        }

        public function validate_register($data){ //Valida o Registro, com um IF ele passa um Registro validado
            
            if(empty($data->user_email) && empty($data->user_pass))
            {
                return array('success'=>false, 'msg'=> 'Campos em branco, verifique-os');
            }
            else if ( !isset($data->user_name) || empty($data->user_name))
            {
                return array('success'=>false, 'msg'=> 'Preencha o campo de Nome');
            }
            else if(!isset($data->user_email) || empty($data->user_email))
            {
                return array('success'=>false, 'msg'=> 'Preencha o campo de Email');
            }
            else if(!isset($data->user_pass) || empty($data->user_pass))
            {
                return array('success'=>false, 'msg'=> 'Preencha o campo de Senha');
            }
            else if(isset($data->user_name) && !empty($data->user_name) && isset($data->user_email) && !empty($data->user_email) && isset($data->user_pass) && !empty($data->user_pass))
            {

            }

            $obejo = [
                'user_name'=> $data->user_name,
                'user_email' => $data->user_email,
                'user_pass' => $data->user_pass
            ];

            $model = new Registermodel();

            $model->registerUser($obejo); //Passa a Data para o Model. aonde é feito o Insert
        }
    }
?>