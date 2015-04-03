<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Services_model extends CI_Model {

    var $username   = '';
    var $password = '';
    var $date    = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
	 
	function get_request()
    {
		//$this->db->where('ID',$id);
		$this->db->select('*');
		$this->db->from('MAINT_REQS');
        $query = $this->db->get();
        return $query->result();
    }
	
    function update_entry($input)
    {
		date_default_timezone_set('Asia/Jakarta');
		
		$data = array(
               $input['col'] => $input['val'],
			   'LAST_UPDATED_BY' => $input['uid'],
			   'LAST_UPDATED_DATE' => date("Y-m-d H:i:s")
            );

		$this->db->trans_start();
		$this->db->where('ID', $input['pk']);
		$this->db->update('MAINT_REQS', $data); 
		$this->db->trans_complete();
		
		if ($this->db->trans_status() === FALSE)
		{
			// generate an error... or use the log_message() function to log your error
			 log_message('error', 'Some variable did not contain a value.');
		}
    }
	
}