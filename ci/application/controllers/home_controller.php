<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_controller extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();	
		//$session_data = $this->session->userdata('logged_in');
	}

	public function index()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			//$this->load->view('home_view', $data);
			$data['menu'] = 'home';
			
			$this->load->view('shared/header',$data);
			$this->load->view('shared/left_menu', $data);
			$this->load->view('contents/home');
			$this->load->view('shared/footer');

		}
		else
		{
			//If no session, redirect to login page
			redirect('login', 'refresh');
		}
		
	}
	
	public function logOn()
	{
		$this->load->view('login');
	}
	function logout()
	{
		$this->session->unset_userdata('logged_in');
		//session_destroy();
		redirect('home', 'refresh');
	}
	
	public function profile()
	{
		$this->load->model('Home_model','home',TRUE);
		$data['query'] = $this->home->get_profile();
		
		$this->load->view('shared/header');
		$this->load->view('shared/left_menu');
		$this->load->view('contents/profile', $data);
		$this->load->view('shared/footer');
	}
	
	public function notif()
	{
		$this->load->view('shared/header');
		$this->load->view('shared/left_menu', $data);
		$this->load->view('contents/notifications');
		$this->load->view('shared/footer');
	}
	
}
