<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Promolocal_controller extends CI_Controller {

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
		
		$this->load->model('promolocal/promolocal_model','promolocal',TRUE);
	}

	public function index()
	{
		$data['promolocal'] = $this->promolocal->get_promos_local_services();
		$data['ref_values'] = $this->promolocal->get_ref_values();
		
		$this->load->view('promolocal/promolocal',$data);
		$this->load->view('shared/right_menu');
		$this->load->view('shared/footer');
	}
	
	public function update_entry()
	{
		//$col = $this->input->post('name');
		//$colname = strstr($col, '-', true);
		//$val = $this->input->post('value');

		$input = array(
			'pk' => $this->input->post('pk'),
			'uid' => $session_data['id'],
			'col' => strstr($this->input->post('name'), '-', true),
			'val' => $this->input->post('value')
		);
		$this->promolocal->update_entry($input);
		$data['promolocal'] = $this->promolocal->get_promos_local_services();
		$data['ref_values'] = $this->promolocal->get_ref_values();
		
		$this->load->view('promolocal/promolocal',$data);

		//$html = '';
		//$html .= $this->load->view('promolocal/promolocal',$data, true);
		//$html .= $this->load->view('shared/right_menu');
		//$html .= $this->load->view('shared/footer');
		
		//echo html;
	}
	/*
	get_blogs(){
		// below would better be in a model
		$html='';
		$query = $this->db->get('my_blogs');        
		$blogs = $query->result();
	
		foreach ($blogs as $row){
		   // data from your table my_blogs column comments
			  $data['comments']=$row->comments;
			  $html.=$this->load->view('blogs', $data, true); // returns view as data
		};
		echo html;
	}
	*/
}
