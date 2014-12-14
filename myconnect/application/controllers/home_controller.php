<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_controller extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();	
		$session_data = $this->session->userdata('logged_in');
		
		$this->load->model('home_model','home',TRUE);
		$this->data['user'] = $this->home->get_profile();
		$this->data['apartment'] = $this->home->get_apartment();
		$this->data['menu'] = 'home';
		
		$this->load->view('shared/header', $this->data);
		$this->load->view('shared/left_menu', $this->data);
	}

	public function index()
	{
		if($this->session->userdata('logged_in'))
		{
			$data['announcements'] = $this->home->get_announcements();
			$data['promotions'] = $this->home->get_latest_promotions();
			$data['services'] = $this->home->get_latest_services();
						
			$this->load->view('contents/home',$data);
			$this->load->view('shared/right_menu');
			$this->load->view('shared/footer');

		}
		else
		{
			//If no session, redirect to login page
			redirect('login', 'refresh');
		}
		
	}
	
	public function profile()
	{
		$data['profile'] = $this->home->get_profile();
		$data['promotions'] = $this->home->get_latest_promotions();
		$data['services'] = $this->home->get_latest_services();

		$this->load->view('contents/profile', $data);
		$this->load->view('shared/right_menu');
		$this->load->view('shared/footer');
	}
	
	public function notif()
	{
		$data['promotions'] = $this->home->get_latest_promotions();
		$data['services'] = $this->home->get_latest_services();
		
		$this->load->view('contents/notifications',$data);
		$this->load->view('shared/right_menu');
		$this->load->view('shared/footer');
	}
	
	function logout()
	{
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('login', 'refresh');
	}
			
}
