<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_controller extends CI_Controller {

	public function index()
	{
		
		$this->load->helper(array('form'));
		$this->load->view('landing/login');
		
	}
		
	public function auth()
	{
		
		redirect('landing/login/form/', 'refresh');
	
	}

}
