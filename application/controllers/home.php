<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model("home_model");

		if(!$this->session->userdata('logged_in')){
			
			if ($this->input->is_ajax_request()) {
                echo json_encode(array("err"=>"900", "msg"=> "GAD900"));
                exit;
            }
			redirect(site_url());
		}
	}
	public function index()
	{
		$data['get_sex'] = $this->home_model->get_sex();
		$data['get_gender'] = $this->home_model->get_gender();
		$data['get_relationship_status'] = $this->home_model->get_relationship_status();
		$data['get_div_office_unit'] = $this->home_model->get_div_office_unit();
		$data['get_mother_unit'] = $this->home_model->get_mother_unit();
		$data['get_position'] = $this->home_model->get_position();
		$data['get_designation'] = $this->home_model->get_designation();
		
		$this->load->view('home_view',$data);
		//$this->load->view('common/test',$data);
		
	}
	
	public function filter_record() {
		$sex 					= $this->input->post("sex");
		$gender 				= $this->input->post("gender");
		$relationshipstatus 	= $this->input->post("relationshipstatus");
		$unit 					= $this->input->post("unit");
		$motherunit 			= $this->input->post("motherunit");
		$position 				= $this->input->post("position");
		$designation 			= $this->input->post("designation");
		
		$DATA = array(
				"emp_sex" 					=> $sex,
				"emp_gender" 				=> $gender,
				"emp_relationshipstatus" 	=> $relationshipstatus,
				"emp_unit" 					=> $unit,
				"emp_motherunit" 			=> $motherunit,
				"emp_position" 				=> $position,
				"emp_designation" 			=> $designation,
			);
			
		$RESULT = $this->home_model->filter_record_model($DATA);
		echo(json_encode($RESULT));
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */