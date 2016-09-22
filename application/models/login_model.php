<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_model extends CI_Model {

    public function __construct()
    {
    	parent::__construct();
    }

    public function validate_user($WHERE){
    	
    	$this->db->select('username');
    	$this->db->where($WHERE);
    	$query = $this->db->get('users');
    	if($query->num_rows()){
    		$this->session->set_userdata('logged_in', true);
    		return true;
    	}else{
    		return false;
    	}
    }

}
