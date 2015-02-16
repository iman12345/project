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
		$this->db->from('maint_reqs');
        $query = $this->db->get();
        return $query->result();
    }
	
}