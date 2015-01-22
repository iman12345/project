<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_controller extends CI_Controller {

	public function index()
	{
		//$this->load->helper('url');
		$data['menu'] = 'contact';

		$this->load->view('shared/header');
		$this->load->view('shared/left_menu', $data);
		$this->load->view('contact/contact');
		$this->load->view('shared/footer');
	}
	
}
