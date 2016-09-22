<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pds_model extends CI_Model {

    public $TABLE = "personal_information";
    public $TABLE2 = "family_background";
    public $TABLE3 = "family_background_child";
    public $TABLE4 = "education_background";
    public $TABLE5 = "career_service_eligibity";
    public $TABLE6 = "work_experience";
    public $TABLE7 = "parameter";
    public $TABLE8 = "training_programs";
    public $TABLE9 = "voluntary_work";
    public $TABLE10 = "other_information";
    public $TABLE11 = "references";


    public function __construct()
    {
    	parent::__construct();
    }

    public function full_name($WHERE) {
        $this->db->select("first_name, middle_name, last_name");
        $this->db->from($this->TABLE);
        $this->db->where($WHERE);

        $RESULT = $this->db->get();
        return $RESULT->result_array();
    }

    public function save_information_model($DATA){
    	
    	$RESULT = $this->db->insert($this->TABLE, $DATA); 
        return $RESULT;
    }

    public function save_family_information_model($DATA) {

        $RESULT = $this->db->insert($this->TABLE2, $DATA); 
        return $RESULT;
    }

    public function save_family_information_child_model($DATA) {

        $RESULT = $this->db->insert_batch($this->TABLE3, $DATA); 
        return  $RESULT;
    }

    public function save_family_information_edu_model($DATA) {
        $RESULT = $this->db->insert_batch($this->TABLE4, $DATA); 
        return  $RESULT;
    }

    public function get_child_model($WHERE) {

        $this->db->select("*");
        $this->db->from($this->TABLE3);
        $this->db->where($WHERE);

        $RESULT = $this->db->get();
        return $RESULT->result_array();
    }

    public function add_child_model($DATA) {

        $RESULT = $this->db->insert($this->TABLE3, $DATA); 
        return $RESULT;
    } 

    public function select_edit_child_model($WHERE) {

        $this->db->select("*");
        $this->db->from($this->TABLE3);
        $this->db->where($WHERE);
        
        $RESULT = $this->db->get();
        return $RESULT->result_array();
    }

    public function select_update_child_model($WHERE,$DATA) {

        $this->db->where($WHERE);
        $SQL = $this->db->update($this->TABLE3, $DATA);
        return true;
    }

    public function remove_child_model($DATA) {
        
        $this->db->where($DATA);
        $this->db->delete($this->TABLE3); 
        
        return true;
    }

    public function get_civil_service_model($WHERE) {

        $this->db->select("*");
        $this->db->from($this->TABLE5);
        $this->db->where($WHERE);

        $RESULT = $this->db->get();
        return $RESULT->result_array();
    }

    public function select_edit_civil_model($WHERE) {

        $this->db->select("*");
        $this->db->from($this->TABLE5);
        $this->db->where($WHERE);

        $RESULT = $this->db->get();
        return $RESULT->result_array();
    }

    public function add_civil_model($DATA) {

        $RESULT = $this->db->insert($this->TABLE5, $DATA); 
        return $RESULT;
    }

    public function edit_civil_model($WHERE,$DATA) {

        $this->db->where($WHERE);
        $SQL = $this->db->update($this->TABLE5, $DATA);
        return true;
    }

    public function remove_civil_model($DATA) {
        
        $this->db->where($DATA);
        $this->db->delete($this->TABLE5); 
        
        return true;
    }

    public function work_expi_model($WHERE) {

        $this->db->select("*");
        $this->db->from($this->TABLE6);
        $this->db->where($WHERE);

        $RESULT = $this->db->get();
        return $RESULT->result_array();
    }

    public function add_work_model($DATA) {

        $RESULT = $this->db->insert($this->TABLE6, $DATA); 
        return $RESULT;
    }

    /*WORK*/

    public function select_edit_work_model($WHERE) {
        $this->db->select("*");
        $this->db->from($this->TABLE6);
        $this->db->where($WHERE);

        $RESULT = $this->db->get();
        return $RESULT->result_array();
    }

    public function edit_work_model($WHERE,$DATA) {

        $this->db->where($WHERE);
        $SQL = $this->db->update($this->TABLE6, $DATA);
        return true;
    }

    public function remove_work_model($WHERE) {
        $this->db->where($WHERE);
        $this->db->delete($this->TABLE6); 
        
        return true;
    }

    public function get_parameter() {
        $this->db->select("*");
        $this->db->from($this->TABLE7);
        // $this->db->where($WHERE);

        $RESULT = $this->db->get();
        return $RESULT->result_array();
        // return $RESULT;
    }

    public function training_program_model($WHERE) {

        $this->db->select("*");
        $this->db->from($this->TABLE8);
        $this->db->where($WHERE);

        $RESULT = $this->db->get();
        return $RESULT->result_array();

    }

    public function add_training_model($DATA) {

        $RESULT = $this->db->insert($this->TABLE8, $DATA); 
        return $RESULT;
    }

    public function select_edit_training_model($WHERE) {
        $this->db->select("*");
        $this->db->from($this->TABLE8);
        $this->db->where($WHERE);
        
        $RESULT = $this->db->get();
        return $RESULT->result_array();
    }

    public function edit_training_model($WHERE,$DATA) {

        $this->db->where($WHERE);
        $SQL = $this->db->update($this->TABLE8, $DATA);
        return true;
    }

    public function remove_training_model($DATA) {

        $this->db->where($DATA);
        $this->db->delete($this->TABLE8); 
        
        return true;
    }

    /*VOLUNTARY WORK*/
    public function voluntary_work_model($WHERE) {
        $this->db->select("*");
        $this->db->from($this->TABLE9);
        $this->db->where($WHERE);

        $RESULT = $this->db->get();
        return $RESULT->result_array();
    }

    public function select_edit_voluntary_model($WHERE) {
        $this->db->select("*");
        $this->db->from($this->TABLE9);
        $this->db->where($WHERE);
        
        $RESULT = $this->db->get();
        return $RESULT->result_array();
    }

    public function edit_voluntary_model($WHERE,$DATA) {
         $this->db->where($WHERE);
        $SQL = $this->db->update($this->TABLE9, $DATA);
        return true;
    }

    public function add_voluntary_model($DATA) {
        $RESULT = $this->db->insert($this->TABLE9, $DATA); 
        return $RESULT;
    }

    public function remove_voluntary_model($WHERE) {
        $this->db->where($WHERE);
        $this->db->delete($this->TABLE9); 
        
        return true;
    }

    /*OTHER INFO*/
    public function other_info_model($WHERE) {
        $this->db->select("*");
        $this->db->from($this->TABLE10);
        $this->db->where($WHERE);

        $RESULT = $this->db->get();
        return $RESULT->result_array();
    }

    public function add_other_info_model($DATA) {
        $RESULT = $this->db->insert($this->TABLE10, $DATA); 
        return $RESULT;
    }

    public function select_edit_other_info_model($WHERE) {
        $this->db->select("*");
        $this->db->from($this->TABLE10);
        $this->db->where($WHERE);
        
        $RESULT = $this->db->get();
        return $RESULT->result_array();
    }

    /*GET CURRENT RECORDS FOR FAM BACKGROUND (UPDATE)*/
    public function existing_family_background($WHERE) {

        $this->db->select("*");
        $this->db->from($this->TABLE2);
        $this->db->where($WHERE);

        $RESULT = $this->db->get();
        return $RESULT->result_array();
    }

    /*GET CURRENT RECORDS FOR EDU BACKGROUND (UPdATE)*/
    public function existing_edu_background($WHERE) {

        $this->db->select("*");
        $this->db->from($this->TABLE4);
        $this->db->where($WHERE);

        $RESULT = $this->db->get();
        return $RESULT->result_array();
    }

    /*COUNT IF EXISTS THE EMP NO IN FAMILY BACKGROUND*/
    public function if_exists_empno($WHERE) {

        $this->db->select("count(*) as COUNT");
        $this->db->from($this->TABLE2);
        $this->db->where($WHERE);

        $RESULT = $this->db->get();
        return $RESULT->result_array();
    }

    /*UPDATE THE FAMILY BACKGROUND*/
    public function update_family_background($WHERE,$DATA) {
        $this->db->where($WHERE);
        $SQL = $this->db->update($this->TABLE2, $DATA);
        return true;
    }

    /*BATCH UPDATE FOR EDUCATION BACKGROUND*/
    public function update_family_information_edu_model($DATA) {
        $this->db->update_batch($this->TABLE4, $DATA, 'eb_no');
        return true;
    }

    public function edit_other_info_model($WHERE,$DATA) {
        $this->db->where($WHERE);
        $SQL = $this->db->update($this->TABLE10, $DATA);
        return true;
    }

    public function remove_other_info_model($DATA) {
        $this->db->where($DATA);
        $this->db->delete($this->TABLE10); 
        
        return true;
    }

    /*REFERENCE*/
    public function reference_model($WHERE) {
        $this->db->select("*");
        $this->db->from($this->TABLE11);
        $this->db->where($WHERE);

        $RESULT = $this->db->get();
        return $RESULT->result_array();
    }

    /*ADD*/
    public function add($FROM,$DATA) {
        $RESULT = $this->db->insert($FROM, $DATA); 
        return $RESULT;
    }

    public function select( $FROM,$WHERE = false) {
        $this->db->select("*");
        $this->db->from($FROM);
        if ($WHERE != false) 
            $this->db->where($WHERE);

        $RESULT = $this->db->get();
        return $RESULT->result_array();
    }

    public function update($FROM,$WHERE,$DATA) {
        $this->db->where($WHERE);
        $SQL = $this->db->update($FROM, $DATA);
        return true;
    }

    public function delete($FROM,$WHERE) {
        $this->db->where($WHERE);
        $this->db->delete($FROM); 
        
        return true;
    }
    
}
