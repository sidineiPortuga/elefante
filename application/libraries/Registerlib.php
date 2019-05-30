<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    
    class Registerlib {
        public function __construct(){
            $CI = & get_instance();
    		$CI->load->model('Registermodel');
        }

        public function validate_register($data){ //Valida o Registro, com um IF ele passa um Registro validado
            
            if( isset($data->user_email) && !empty($data->user_email) && isset($data->user_pass) && !empty($data->user_pass)){
                redirect('./Login');
            }else if(empty($data->user_email) && empty($data->user_pass))
            {
                return array('Success'=>false, 'msg'=> 'Campos em branco, verifique-os');
            }
            else if(!isset($data->user_pass) || empty($data->user_pass)){
                return array('Success'=>false, 'msg'=> 'Preencha o campo de Senha');
            }
            else if(!isset($data->user_email) || empty($data->user_email))
            {
                return array('Success'=>false, 'msg'=> 'Preencha o campo de Email');
            }



            $model = new Registermodel();

            $model->registerUser($data); //Passa a Data para o Email
        }
    }
?>