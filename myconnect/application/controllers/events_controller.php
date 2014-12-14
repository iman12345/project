<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events_controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();	
		$session_data = $this->session->userdata('logged_in');
		
		$this->load->model('home_model','home',TRUE);
		$this->data['user'] = $this->home->get_profile();
		$this->data['apartment'] = $this->home->get_apartment();
		$this->data['menu'] = 'events';
		
		$this->load->view('shared/header', $this->data);
		$this->load->view('shared/left_menu', $this->data);
	}

	public function index()
	{
		$data['promotions'] = $this->home->get_latest_promotions();
		$data['services'] = $this->home->get_latest_services();

		$this->load->view('contents/events',$data);
		$this->load->view('shared/right_menu');
		$this->load->view('shared/footer');
	}
}
