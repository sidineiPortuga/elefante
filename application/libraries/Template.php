<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Template {
 
		function show($view, $data=array()){
 
			$CI = & get_instance();
 
			// Load header
			$CI->load->view('template/header',$data);
 
			// Load content
			$CI->load->view($view,$data);
			// $CI->load->view('template/home',$data);
 
			// Load footer
			$CI->load->view('template/footer',$data);
 

		}

		function showOff($view, $data=array()){
 
			$CI = & get_instance();
 
			// Load header
			$CI->load->view('templateOff/header',$data);
 
			// Load content
			$CI->load->view($view,$data);
			// $CI->load->view('template/home',$data);
 
			// Load footer
			$CI->load->view('templateOff/footer',$data);
 

		}
}