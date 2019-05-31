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
            else if(!isset($data->user_adress) || empty($data->user_adress))
            {
                return array('success'=>false, 'msg'=> 'Preencha o campo de Endereço');
            }
            else if(!isset($data->user_phone) || empty($data->user_phone))
            {
                return array('success'=>false, 'msg'=> 'Preencha o campo de Telefone');
            }
            else if(!isset($data->user_pass) || empty($data->user_pass))
            {
                return array('success'=>false, 'msg'=> 'Preencha o campo de Senha');
            }
            else if($data->user_pass != $data->user_pass_verify)
            {
                return array('success'=>false, 'msg'=> 'Suas senhas não estão iguais');
            }
            else if(isset($data->user_name) && !empty($data->user_name) && isset($data->user_email) && !empty($data->user_email) && isset($data->user_pass) && !empty($data->user_pass))
            {
                $obejo = [
                    'user_name'=> $data->user_name,
                    'user_email' => $data->user_email,
                    'user_adress' => $data->user_adress,
                    'user_phone' => $data->user_phone,
                    'user_pass' => $data->user_pass,
                    'genero' =>$data->genero,
                    'user_idade'=> $data->user_idade
                ];
    
                $model = new Registermodel();
    
                $id = $model->registerUser($obejo); //Passa a Data para o Model. aonde é feito o Insert
                
                if($id){
                    return array('success'=>true, 'msg'=>'Usuário cadastrado com Sucesso!');    
                }else{
                    return array('success'=>false, 'msg'=> 'Oops, algo deu errado...');
                }
            

            }
        }
    }
?>