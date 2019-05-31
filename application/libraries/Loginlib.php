<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    
    class Loginlib {
        // public function __construct(){
        //     $CI = & get_instance();
    	// 	$CI->load->model('Usuarios_model');
        // }

        public function validate_login($data){  
            if(empty($data->user_email) && empty($data->user_pass))
            {
                $obejo = [
                    'user_email' => $data->user_email,
                    'user_pass' => $data->user_pass
                ];
            }
            else
            {

            }





            // print_r($data->user_pass);
            // $dados = json_encode($data);
            // $dados2 = json_decode($dados);
            // $email 	= $dados2->user_email;
            // $pass	= $dados2->user_pass;
            
            // var_dump($email, $pass).die();
            // print_r($email.''.$pass);
            
            // if(!empty($email) || !empty($pass)){
            //     $usuario = $this->Usuarios_model->logarUsuarios($email, $pass);

            //     if(!empty($usuario)){
            //         $this->session->set_flashdata("usuarios_logado", $usuario);
            //         return "Usuario logado com sucesso";
            //     }else{
            //         return "senha ou login errados";
            //     }
            // }else{
            //     echo 'Campo E-mail ou Senha estão vazios';
            // }
        }
    
    }