<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Promolocal_model extends CI_Model {

    //var $username   = '';
    //var $password = '';
    //var $date    = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
	
	function get_promos_local_services()
	{
		$this->db->select('*');
		$this->db->from('PROMOS_LOCAL_SERVICES');
		$query = $this->db->get();
		return $query->result();	
	}
	
	function get_ref_values()
	{
		$this->db->select('*');
		$this->db->from('REF_VALUES');
		$this->db->where('LOOKUP_NAME','AD_TYPE');
		$query = $this->db->get();
		return $query->result();	
		//WHERE LOOKUP_NAME = 'AD_TYPE'	
	}
	 	
	function get_latest_promotions()
	{
		$this->db->where('TYPE','PROMO');
		$this->db->order_by('DATE', 'DESC');
		$query = $this->db->get('PROMOS_LOCAL_SERVICES',2);
		return $query->result();
	}
	
	function get_latest_services()
	{
		$this->db->where('TYPE','LOCAL_SERVICES');
		$this->db->order_by('DATE', 'DESC');
		$query = $this->db->get('PROMOS_LOCAL_SERVICES',2);
		return $query->result();
	}
	
    function insert_entry()
    {
        $this->id   = $this->input->post('id');
        $this->id   = $this->input->post('apartmentID');
		$this->id   = $this->input->post('type');
        $this->id   = $this->input->post('name');
		$this->id   = $this->input->post('desc');
        $this->id   = $this->input->post('date');DateTime;
		$this->id   = $this->input->post('postingID');
        $this->id   = $this->input->post('image');
		$this->id   = $this->input->post('category');
        $this->id   = $this->input->post('expireDate');
		$this->id   = $this->input->post('createdBy');
        $this->id   = $this->input->post('createdDate');
		$this->id   = $this->input->post('updatedBy');
        $this->id   = $this->input->post('updatedDate');
        //$this->date    = time();

        $this->db->insert('PROMOS_LOCAL_SERVICES', $this);
    }

    function update_entry($input)
    {
		date_default_timezone_set('Asia/Jakarta');
        /*$this->input->post('id');
        $this->input->post('apartmetID');
		$this->input->post('type');
        $this->input->post('name');
		$this->input->post('desc');
        $this->input->post('date');DateTime;
		$this->input->post('postingID');
        $this->input->post('image');
		$this->input->post('category');
        $this->input->post('expireDate');
		$this->input->post('createdBy');
        $this->input->post('createdDate');
		$this->input->post('updatedBy');
        $this->input->post('updatedDate');*/
        //$this->date    = time();
		//$session_data = $this->session->userdata('logged_in');
		//$user_id = $session_data['id'];
		
		//$id = $this->input->post('pk');
		//$col = $this->input->post('name');
		//$colname = strstr($col, '-', true);
		//$val = $this->input->post('value');
		
		$data = array(
               $input['col'] => $input['val'],
			   'LAST_UPDATED_BY' => $input['uid'],
			   'LAST_UPDATED_DATE' => date("Y-m-d H:i:s")
            );

		$this->db->trans_start();
		$this->db->where('ID', $input['pk']);
		$this->db->update('PROMOS_LOCAL_SERVICES', $data); 
		$this->db->trans_complete();
		
		if ($this->db->trans_status() === FALSE)
		{
			// generate an error... or use the log_message() function to log your error
			//echo "An error occured while updating.";
			 log_message('error', 'Some variable did not contain a value.');
		}


        //$this->db->update('PROMOS_LOCAL_SERVICES', $this, array('id' => $_POST['id']));
    }
	
	function update_promolocal($arrin){ 
		date_default_timezone_set('Asia/Jakarta');
		$session_data = $this->session->userdata('logged_in');
		$id = $session_data['id']; 
		$dt = date('Y-m-d H:i:s');
		$up = strstr($arrin[2], '-', true);
		$data = array(
		$up => $arrin[1],
			'LAST_UPDATED_BY' => $id,
			'LAST_UPDATED_DATE' => $dt,
		); 
		$this->db->where('ID',$arrin[0]);
		$query = $this->db->update('RESTAURANTS',$data);
		//$output[0] = $this->process->get_username($this->process->get_restaurant($arrin[0])->LAST_UPDATED_BY)->NAME;
		//$output[1] = $this->process->get_restaurant($arrin[0])->LAST_UPDATED_DATE;
		//$outputs = implode(",",$output);   
		return $outputs;
	}

}