<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Update_controller extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();	
		if(!$this->session->userdata('logged_in')) redirect('login', 'refresh');
		$this->data['menu'] = 'promolocal';

		$this->load->model('dashboard/dashboard_model','dashboard',TRUE);
		$this->data['user'] = $this->dashboard->get_profile();
		$this->data['apartment'] = $this->dashboard->get_apartment();
		$this->data['announcements'] = $this->dashboard->get_announcements();
		$this->data['promotions'] = $this->dashboard->get_latest_promotions();
		$this->data['services'] = $this->dashboard->get_latest_services();
		
		$this->load->view('shared/header', $this->data);
		$this->load->view('shared/left_menu');
	}

	public function index()
	{
		$this->load->model('promolocal/promolocal_model','promolocal',TRUE);
		
		$data['varP'] = $this->input->post('pk').','.$this->input->post('value').','.$this->input->post('name');  
		$this->load->view('promolocal/update',$data); 
	}
	
}
