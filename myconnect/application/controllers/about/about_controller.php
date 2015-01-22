<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About_controller extends CI_Controller {

	public function index()
	{
		$data['menu'] = 'about';

		$this->load->view('shared/header');
		$this->load->view('shared/left_menu', $data);
		$this->load->view('about/about');
		$this->load->view('shared/footer');
	}
	
}
