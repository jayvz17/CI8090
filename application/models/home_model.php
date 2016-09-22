<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Home_model extends CI_Model {
	
	public $table = "employees";

    public function __construct()
    {
    	parent::__construct();
    }
	
	public function get_sex()
    {
        $this->db->select('emp_sex');
        $this->db->distinct(true);
        $this->db->order_by('emp_sex', 'desc');
        $this->db->from($this->table);
		
		$result = $this->db->get();
        return $result->result_array();
    }
	
	public function get_gender()
    {
        $this->db->select('emp_gender');
        $this->db->distinct(true);
        $this->db->order_by('emp_gender', 'desc');
		$this->db->from($this->table);
		
		$result = $this->db->get();
        return $result->result_array();
    }

    public function get_relationship_status()
    {
        $this->db->select('emp_relationshipstatus');
        $this->db->distinct(true);
        $this->db->order_by('emp_relationshipstatus', 'asc');
		$this->db->from($this->table);
		
		$result = $this->db->get();
        return $result->result_array();
    }

    public function get_div_office_unit()
    {
        $this->db->select('emp_unit');
        $this->db->distinct(true);
        $this->db->order_by('emp_unit', 'asc');
		$this->db->from($this->table);
		
		$result = $this->db->get();
        return $result->result_array();
    }

    public function get_mother_unit()
    {
        $this->db->select('emp_motherunit');
        $this->db->distinct(true);
        $this->db->order_by('emp_motherunit', 'asc');
        $this->db->from($this->table);
		
		$result = $this->db->get();
        return $result->result_array();
    }

    public function get_position()
    {
        $this->db->select('emp_position');
        $this->db->distinct(true);
        $this->db->order_by('emp_position', 'asc');
        $this->db->from($this->table);
		
		$result = $this->db->get();
        return $result->result_array();
    }

    public function get_designation()
    {
        $this->db->select('emp_designation');
        $this->db->distinct(true);
        $this->db->order_by('emp_designation', 'asc');
        $this->db->from($this->table);
		
		$result = $this->db->get();
        return $result->result_array();
    }
	
	public function filter_record_model($LIKE) {
		$this->db->select("*");
		$this->db->from($this->table);
		$this->db->like($LIKE);
		
		$result = $this->db->get();
        return $result->result_array();
	}
	
}