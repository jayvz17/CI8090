<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Functions {

    public $TABLE = "journal_table";

	public function journal_no() {

        $CI             =& get_instance();

        $DATA = array("junk" => "1");

        $RESULT = $CI->db->insert("journal_table",$DATA); 
        return $CI->db->insert_id();
        // $LAST_ID = $CI->db->insert_id();
        // return $LAST_ID;
    }
}
