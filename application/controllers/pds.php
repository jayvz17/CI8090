<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pds extends CI_Controller {

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
		$this->load->library('functions');
		$this->load->model("home_model");
		$this->load->model("pds_model");

		if(!$this->session->userdata('logged_in')){
			
			if ($this->input->is_ajax_request()) {
                echo json_encode(array("err"=>"900", "msg"=> 900));
                exit;
            }
			redirect(site_url());
		}
	}

	public function index()
	{
		// $data['get_sex'] = $this->home_model->get_sex();
		// $data['get_gender'] = $this->home_model->get_gender();
		// $data['get_relationship_status'] = $this->home_model->get_relationship_status();
		// $data['get_div_office_unit'] = $this->home_model->get_div_office_unit();
		// $data['get_mother_unit'] = $this->home_model->get_mother_unit();
		// $data['get_position'] = $this->home_model->get_position();
		// $data['get_designation'] = $this->home_model->get_designation();
		// $data['EMPLOYEE_NO'] = $EMPLOYEE_NO;
		// $this->load->view('pds/index',$data);
		$this->load->view('personal_information/index');
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

	public function save_information() {

		$LNAME 					= $this->input->post("lname");
		$FNAME 					= $this->input->post("fname");
		$MNAME 					= $this->input->post("mname");
		$NAME_EXTENSION 		= $this->input->post("name_extension");
		$DATE_OF_BIRTH 			= $this->input->post("date_of_birth");
		$SEX 					= $this->input->post("sex");
		$CITIZENSHIP 			= $this->input->post("citizenship");
		$HEIGHT 				= $this->input->post("height");
		$WEIGHT 				= $this->input->post("weight");
		$BLOOD_TYPE 			= $this->input->post("blood_type");
		$GSIS_ID 				= $this->input->post("gsis_id");
		$PAGIBIG_ID 			= $this->input->post("pagibig_id");
		$PHILHEALT_ID 			= $this->input->post("philhealt_id");
		$SSS_NO 				= $this->input->post("sss_no");
		$RESIDENTIAL_ADDRESS 	= $this->input->post("residential_address");
		$ZIP_CODE 				= $this->input->post("zip_code");
		$CELL_NO 				= $this->input->post("cell_no");
		$PERMANENT_ADDRESS 		= $this->input->post("permanent_address");
		$ZIP_CODE2 				= $this->input->post("zip_code2");
		$AGENCY_EMPLOYEE 		= $this->input->post("agency_employee");
		$TIN 					= $this->input->post("tin");
		$PLACE_OF_BIRTH 		= $this->input->post("place_of_birth");
		$CIVIL_STATUS 			= $this->input->post("civil_status");
		$EMAIL_ADDRESS 			= $this->input->post("email_address");
		$TELPHONE2 				= $this->input->post("telphone2");

		$JOURNAL_NO = $this->functions->journal_no();
		$JOURNAL_NO = str_pad($JOURNAL_NO, 8, 0,STR_PAD_LEFT);

		$DATA 	= 	array(
						
						"emp_no" 						=> date("Ymd").$JOURNAL_NO,
						"first_name"					=> $FNAME,
						"last_name"						=> $LNAME,
						"middle_name"					=> $MNAME,
						"ext_name"						=> $NAME_EXTENSION,
						"date_of_birth "				=> $DATE_OF_BIRTH,
						"place_of_birth"				=> $PLACE_OF_BIRTH,
						"sex"							=> $SEX,
						"civil_status"					=> $CIVIL_STATUS,
						"citizenship"					=> $CITIZENSHIP,
						"height"						=> $HEIGHT,
						"weight"						=> $WEIGHT,
						"blood_type"					=> $BLOOD_TYPE,
						"gsis_id_no"					=> $GSIS_ID,
						"pag_ibig_id_no"				=> $PAGIBIG_ID,
						"philhealth_no"					=> $PHILHEALT_ID,
						"sss_no"						=> $SSS_NO,
						"residential_address "			=> $RESIDENTIAL_ADDRESS,
						"residential_zipcode"			=> $ZIP_CODE,
						"residential_telephone_no"		=> $CELL_NO,
						"permanent_address"				=> $PERMANENT_ADDRESS,
						"permanent_zipcode"				=> $ZIP_CODE2,
						"permanent_telephone_no"		=> $TELPHONE2,
						"email_address"					=> $EMAIL_ADDRESS,
						"cellphone_no"					=> $CELL_NO,
						"agency_employee_no"			=> $AGENCY_EMPLOYEE,
						"tin"							=> $TIN,
					);

		$RESULT = $this->pds_model->save_information_model($DATA);

		echo json_encode( array( "CODE" => "00" , "EMP_NO" => date("Ymd").$JOURNAL_NO, ) );

	}

	public function pds_other_info($EMPLOYEE_NO) {

		$WHERE = array("emp_no" => $EMPLOYEE_NO);

		$data['EMPLOYEE_NO'] 	= $EMPLOYEE_NO;
		$data['NAME'] 			= $this->pds_model->full_name($WHERE);
		/*DYNAMIC PARAMETER FOR E.G. DEPARTMENT, POSITION (parameter table)*/
		$data['RESULT_PARAMETER'] = $this->pds_model->get_parameter();

		$data['FAMILY_BACKGROUND'] = $this->pds_model->existing_family_background($WHERE);
		$EDU_RESULT_ = $this->pds_model->existing_edu_background($WHERE);

		foreach ($EDU_RESULT_ as $key => $value) {
			if ( $value["level"] == "ELEMENTARY" ) 
				$data["EDU_BACKGROUND_ELEM"] = $value;
			else if ($value["level"] == "SECONDARY")
				$data["EDU_BACKGROUND_SECON"] = $value;
			else if ($value["level"] == "VOCATIONAL COURSE/TRADE COURSE")
				$data["EDU_BACKGROUND_VOCA"] = $value;
			else if ($value["level"] == "COLLEGE")
				$data["EDU_BACKGROUND_COLL"] = $value;
			else if ($value["level"] == "GRADUATE STUDIES")
				$data["EDU_BACKGROUND_GRAD"] = $value;
		}

		$this->load->view('pds/index',$data);
	}

	public function save_family_information() {

		$_EMP_NO  					= $this->input->post("_EMP_NO");
		$FATHER_FNAME  				= $this->input->post("father_fname");
		$FATHER_LNAME  				= $this->input->post("father_lname");
		$FATHER_MNAME  				= $this->input->post("father_mname");
		$MOTHER_FNAME  				= $this->input->post("mother_fname");
		$MOTHER_LNAME  				= $this->input->post("mother_lname");
		$MOTHER_MNAME  				= $this->input->post("mother_mname");
		$SPOUSE_EMPLOYEE  			= $this->input->post("spouse_employee");
		$SPOUSE_FNAME  				= $this->input->post("spouse_fname");
		$SPOUSE_LNAME  				= $this->input->post("spouse_lname");
		$SPOUSE_MNAME  				= $this->input->post("spouse_mname");
		$SPOUSE_OCCUPATION  		= $this->input->post("spouse_occupation");
		$SPOUSE_EMPLOYEE_ADDRESS  	= $this->input->post("spouse_employee_address");
		$SPOUSE_EMPLOYEE_PHONE  	= $this->input->post("spouse_employee_phone");


		$DATA = array(
					"emp_no" 						=> $_EMP_NO,
					"spouse_first_name" 			=> $SPOUSE_FNAME,
					"spouse_last_name" 				=> $SPOUSE_LNAME,
					"spouse_middle_name" 			=> $SPOUSE_MNAME,
					"spouse_occupation" 			=> $SPOUSE_OCCUPATION,
					"spouse_employer/business_name" => $SPOUSE_EMPLOYEE,
					"spouse_business_address" 		=> $SPOUSE_EMPLOYEE_ADDRESS,
					"spouse_telephone_no" 			=> $SPOUSE_EMPLOYEE_PHONE,
					"father_first_name" 			=> $FATHER_FNAME,
					"father_last_name" 				=> $FATHER_LNAME,
					"father_middle_name" 			=> $FATHER_MNAME,
					"mother_first_name"  			=> $MOTHER_FNAME,
					"mother_last_name" 				=> $MOTHER_LNAME,
					"mother_middle_name" 			=> $MOTHER_MNAME,
				);

		$WHERE 			= array("emp_no" => $_EMP_NO);
		$RESULT_COUNT 	= $this->pds_model->if_exists_empno($WHERE);

		if($RESULT_COUNT == "0") {
			$RESULT = $this->pds_model->save_family_information_model($DATA);
			echo json_encode(array("err"=>"00", "msg"=> "Records has been Added."));
		}
		else {
			$RESULT = $this->pds_model->update_family_background($WHERE,$DATA);
			echo json_encode(array("err"=>"00", "msg"=> "Records has been updated."));
		}


		// $FULL_NAME  			= $this->input->post("full_name");
		// $DATE_OF_BIRTH  		= $this->input->post("date_of_birth");

		// $COUNT = count($DATE_OF_BIRTH);

		// $CHILD_SAVE =   array();

		// for ($i=0; $i < $COUNT ; $i++) { 
		// 	$TEMP_ARRAY = array(
		// 					"emp_no" 		=> $_EMP_NO,
		// 					"fb_no" 		=> 11,
		// 					"name_of_child" => $FULL_NAME[$i],
		// 					"date_of_birth" => $DATE_OF_BIRTH[$i],
		// 				);
		// 	array_push($CHILD_SAVE, $TEMP_ARRAY);
		// }

		// $RESULT_CHILD = $this->pds_model->save_family_information_child_model($CHILD_SAVE);

	}

	public function save_education() {


	$ELEM_NAME_SCHOOL				= 	$this->input->post("elem_name_school");
	$ELEM_DEGREE					= 	$this->input->post("elem_degree");
	$ELEM_YEAR_GRADUATED			=	$this->input->post("elem_year_graduated");
	$ELEM_GRADES					= 	$this->input->post("elem_grades");
	$ELEM_ATTENDANCE				=	$this->input->post("elem_attendance");
	$ELEM_SCHOLAR					= 	$this->input->post("elem_scholar");
	$SECONDARY_NAME_SCHOOL			=	$this->input->post("secondary_name_school");
	$SECONDARY_DEGREE				=	$this->input->post("secondary_degree");
	$SECONDARY_YEAR_GRADUATED		=	$this->input->post("secondary_year_graduated");
	$SECONDARY_GRADES				=	$this->input->post("secondary_grades");
	$SECONDARY_ATTENDANCE			=	$this->input->post("secondary_attendance");
	$SECONDARY_SCHOLAR				=	$this->input->post("secondary_scholar");
	$VOCATIONAL_NAME_SCHOOL			=	$this->input->post("vocational_name_school");
	$VOCATIONAL_DEGREE				=	$this->input->post("vocational_degree");
	$VOCATIONAL_YEAR_GRADUATED		=	$this->input->post("vocational_year_graduated");
	$VOCATIONAL_GRADES				=	$this->input->post("vocational_grades");
	$VOCATIONAL_ATTENDANCE			=	$this->input->post("vocational_attendance");
	$VOCATIONAL_SCHOLAR				=	$this->input->post("vocational_scholar");
	$COLLEGE_NAME_SCHOOL			=	$this->input->post("college_name_school");
	$COLLEGE_DEGREE					= 	$this->input->post("college_degree");
	$COLLEGE_YEAR_GRADUATED			=	$this->input->post("college_year_graduated");
	$COLLEGE_GRADES					= 	$this->input->post("college_grades");
	$COLLEGE_ATTENDANCE				=	$this->input->post("college_attendance");
	$COLLEGE_SCHOLAR				=	$this->input->post("college_scholar");
	$GRADUATES_NAME_SCHOOL			=	$this->input->post("graduates_name_school");
	$GRADUATES_DEGREE				=	$this->input->post("graduates_degree");
	$GRADUATES_YEAR_GRADUATED		=	$this->input->post("graduates_year_graduated");
	$GRADUATES_GRADES				=	$this->input->post("graduates_grades");
	$GRADUATES_ATTENDANCE			=	$this->input->post("graduates_attendance");
	$GRADUATES_SCHOLAR				=	$this->input->post("graduates_scholar");

	$GRADUATES_ATTENDANCE_FROM				=	$this->input->post("graduates_attendance_from");
	$GRADUATES_ATTENDANCE_TO				=	$this->input->post("graduates_attendance_to");
	$COLLEGE_ATTENDANCE_FROM				=	$this->input->post("college_attendance_from");
	$COLLEGE_ATTENDANCE_TO					= 	$this->input->post("college_attendance_to");
	$VOCATIONAL_ATTENDANCE_FROM				=	$this->input->post("vocational_attendance_from");
	$VOCATIONAL_ATTENDANCE_TO				=	$this->input->post("vocational_attendance_to");
	$SECONDARY_ATTENDANCE_FROM				=	$this->input->post("secondary_attendance_from");
	$SECONDARY_ATTENDANCE_TO				=	$this->input->post("secondary_attendance_to");
	$ELEM_ATTENDANCE_FROM 					= 	$this->input->post("elem_attendance_from");
	$ELEM_ATTENDANCE_TO 					= 	$this->input->post("elem_attendance_to");

	/*THIS EB_NO IS AN ID OF education_background THIS WILL BE USE FOR UPDATE THE RECORDS IF EXISTS */
	$EB_NO_ELEMENTARY 				= $this->input->post("eb_no_Elementary");
	$EB_NO_SECONDARY 				= $this->input->post("eb_no_Secondary");
	$EB_NO_VOCATIONAL 				= $this->input->post("eb_no_Vocational");
	$EB_NO_COLLEGE 					= $this->input->post("eb_no_College");
	$EB_NO_GRADUATE 				= $this->input->post("eb_no_Graduate");

	$_EMP_NO 						= 	$this->input->post("_EMP_NO");

	$DATA = array("");
	$UPDATE = array("");

	/*ELEMENTARY BATCH INSERT OR BATCH UPDATE*/
	if ($EB_NO_ELEMENTARY == "" ) {
		$DATA_ELEM = array(
			"emp_no" => $_EMP_NO,
			"level" => "ELEMENTARY",
			"name_of_school" => $ELEM_NAME_SCHOOL,
			"degree_course" => $ELEM_DEGREE,
			"year_graduated" => $ELEM_YEAR_GRADUATED,
			"highest_grade/level/units_earned" => $ELEM_GRADES,
			"inclusive_dates_of_attendance_from" => $ELEM_ATTENDANCE_FROM,
			"inclusive_dates_of_attendance_to" => $ELEM_ATTENDANCE_TO,
			"scholarship/academic_honors_recieved" => $ELEM_SCHOLAR,
		);
		array_push($DATA, $DATA_ELEM);
	}

	else {
		$UPDATE_ELEM = array(
			"eb_no" => $EB_NO_ELEMENTARY,
			"emp_no" => $_EMP_NO,
			"level" => "ELEMENTARY",
			"name_of_school" => $ELEM_NAME_SCHOOL,
			"degree_course" => $ELEM_DEGREE,
			"year_graduated" => $ELEM_YEAR_GRADUATED,
			"highest_grade/level/units_earned" => $ELEM_GRADES,
			"inclusive_dates_of_attendance_from" => $ELEM_ATTENDANCE_FROM,
			"inclusive_dates_of_attendance_to" => $ELEM_ATTENDANCE_TO,
			"scholarship/academic_honors_recieved" => $ELEM_SCHOLAR,
		);
		array_push($UPDATE, $DATA_ELEM);
	}

	/*SECONDARY BATCH INSERT OR BATCH UPDATE*/
	if ($EB_NO_SECONDARY == "" ) {
		$DATA_SECONDARY = array(
			"emp_no" => $_EMP_NO,
			"level" => "SECONDARY",
			"name_of_school" => $SECONDARY_NAME_SCHOOL,
			"degree_course" => $SECONDARY_DEGREE,
			"year_graduated" => $SECONDARY_YEAR_GRADUATED,
			"highest_grade/level/units_earned" => $SECONDARY_GRADES,
			"inclusive_dates_of_attendance_from" => $SECONDARY_ATTENDANCE_FROM,
			"inclusive_dates_of_attendance_to" => $SECONDARY_ATTENDANCE_TO,
			"scholarship/academic_honors_recieved" => $SECONDARY_SCHOLAR,
		);

		array_push($DATA, $DATA_SECONDARY);
	}
	else {
		$UPDATE_SECONDARY = array(
			"eb_no" => $EB_NO_SECONDARY,
			"emp_no" => $_EMP_NO,
			"level" => "SECONDARY",
			"name_of_school" => $SECONDARY_NAME_SCHOOL,
			"degree_course" => $SECONDARY_DEGREE,
			"year_graduated" => $SECONDARY_YEAR_GRADUATED,
			"highest_grade/level/units_earned" => $SECONDARY_GRADES,
			"inclusive_dates_of_attendance_from" => $SECONDARY_ATTENDANCE_FROM,
			"inclusive_dates_of_attendance_to" => $SECONDARY_ATTENDANCE_TO,
			"scholarship/academic_honors_recieved" => $SECONDARY_SCHOLAR,
		);
		array_push($UPDATE, $UPDATE_SECONDARY);
	}


	/*VOCATIONAL BATCH INSERT OR BATCH UPDATE*/
	if ($EB_NO_VOCATIONAL == "" ) {
		$DATA_VOCATIONAL = array(
			"emp_no" => $_EMP_NO,
			"level" => "VOCATIONAL COURSE/TRADE COURSE",
			"name_of_school" => $VOCATIONAL_NAME_SCHOOL,
			"degree_course" => $VOCATIONAL_DEGREE,
			"year_graduated" => $VOCATIONAL_YEAR_GRADUATED,
			"highest_grade/level/units_earned" => $VOCATIONAL_GRADES,
			"inclusive_dates_of_attendance_from" => $VOCATIONAL_ATTENDANCE_FROM,
			"inclusive_dates_of_attendance_to" => $VOCATIONAL_ATTENDANCE_TO,
			"scholarship/academic_honors_recieved" => $VOCATIONAL_SCHOLAR,
		);
		array_push($DATA, $DATA_VOCATIONAL);
	}
	else {
		$UPDATE_VOCATIONAL = array(
			"eb_no" => $EB_NO_VOCATIONAL,
			"emp_no" => $_EMP_NO,
			"level" => "VOCATIONAL COURSE/TRADE COURSE",
			"name_of_school" => $VOCATIONAL_NAME_SCHOOL,
			"degree_course" => $VOCATIONAL_DEGREE,
			"year_graduated" => $VOCATIONAL_YEAR_GRADUATED,
			"highest_grade/level/units_earned" => $VOCATIONAL_GRADES,
			"inclusive_dates_of_attendance_from" => $VOCATIONAL_ATTENDANCE_FROM,
			"inclusive_dates_of_attendance_to" => $VOCATIONAL_ATTENDANCE_TO,
			"scholarship/academic_honors_recieved" => $VOCATIONAL_SCHOLAR,
		);
		array_push($UPDATE, $UPDATE_VOCATIONAL);
	}

	/*COLLEGE BATCH INSERT OR BATCH UPDATE*/
	if ($EB_NO_COLLEGE == "" ) {
		$DATA_COLLEGE = array(
			"emp_no" => $_EMP_NO,
			"level" => "COLLEGE",
			"name_of_school" => $COLLEGE_NAME_SCHOOL,
			"degree_course" => $COLLEGE_DEGREE,
			"year_graduated" => $COLLEGE_YEAR_GRADUATED,
			"highest_grade/level/units_earned" => $COLLEGE_GRADES,
			"inclusive_dates_of_attendance_from" => $COLLEGE_ATTENDANCE_FROM,
			"inclusive_dates_of_attendance_to" => $COLLEGE_ATTENDANCE_TO,
			"scholarship/academic_honors_recieved" => $COLLEGE_SCHOLAR,
		);
		array_push($DATA, $DATA_COLLEGE);
	}
	else {
		$UPDATE_COLLEGE = array(
			"eb_no" => $EB_NO_COLLEGE,
			"emp_no" => $_EMP_NO,
			"level" => "COLLEGE",
			"name_of_school" => $COLLEGE_NAME_SCHOOL,
			"degree_course" => $COLLEGE_DEGREE,
			"year_graduated" => $COLLEGE_YEAR_GRADUATED,
			"highest_grade/level/units_earned" => $COLLEGE_GRADES,
			"inclusive_dates_of_attendance_from" => $COLLEGE_ATTENDANCE_FROM,
			"inclusive_dates_of_attendance_to" => $COLLEGE_ATTENDANCE_TO,
			"scholarship/academic_honors_recieved" => $COLLEGE_SCHOLAR,
		);
		array_push($UPDATE, $UPDATE_COLLEGE);
	}

	/*GRADUATE BATCH INSERT OR BATCH UPDATE*/
	if ($EB_NO_GRADUATE == "" ) {
		$DATA_GRADUATES = array(
			"emp_no" => $_EMP_NO,
			"level" => "GRADUATE STUDIES",
			"name_of_school" => $GRADUATES_NAME_SCHOOL,
			"degree_course" => $GRADUATES_DEGREE,
			"year_graduated" => $GRADUATES_YEAR_GRADUATED,
			"highest_grade/level/units_earned" => $GRADUATES_GRADES,
			"inclusive_dates_of_attendance_from" => $GRADUATES_ATTENDANCE_FROM,
			"inclusive_dates_of_attendance_to" => $GRADUATES_ATTENDANCE_TO,
			"scholarship/academic_honors_recieved" => $GRADUATES_SCHOLAR,
			);
		array_push($DATA, $DATA_GRADUATES);
	}
	else {
		$UPDATE_GRADUATES = array(
			"eb_no" => $EB_NO_GRADUATE,
			"emp_no" => $_EMP_NO,
			"level" => "GRADUATE STUDIES",
			"name_of_school" => $GRADUATES_NAME_SCHOOL,
			"degree_course" => $GRADUATES_DEGREE,
			"year_graduated" => $GRADUATES_YEAR_GRADUATED,
			"highest_grade/level/units_earned" => $GRADUATES_GRADES,
			"inclusive_dates_of_attendance_from" => $GRADUATES_ATTENDANCE_FROM,
			"inclusive_dates_of_attendance_to" => $GRADUATES_ATTENDANCE_TO,
			"scholarship/academic_honors_recieved" => $GRADUATES_SCHOLAR,
			);
		array_push($UPDATE, $UPDATE_GRADUATES);
	}

	/*UNSET IS TO REMOVE THE 1ST ARRAY */
	unset($DATA[0]);
	unset($UPDATE[0]);

	if (is_array($DATA) && sizeof($DATA) != "0" ) {
		// die("ADD");
		$RESULT_EDU = $this->pds_model->save_family_information_edu_model($DATA);
	}
	if (is_array($UPDATE) && sizeof($UPDATE) != "0")  {
		// die("UPDATE");
		$RESULT_EDU = $this->pds_model->update_family_information_edu_model($DATA);
	}
	

	}

	// public function save_civil_service() {
	// 	echo "asd";
	// }

	public function get_child() {
		
		$EMP_NO = $this->input->post("_EMP_NO");
		$WHERE = array("emp_no" => $EMP_NO);
		$RESULT = $this->pds_model->get_child_model($WHERE);

		echo(json_encode($RESULT));
	}

	public function add_child() {
		$EMP_NO 				= $this->input->post("_EMP_NO");
		$ADD_CHILD_DATEOFBIRTH 	= $this->input->post("add_child_dateOfBirth");
		$ADD_CHILD_NAME 		= $this->input->post("add_child_name");

		$DATA = array(
					"fb_no" => 1,
					"emp_no" => $EMP_NO,
					"name_of_child" => $ADD_CHILD_NAME,
					"date_of_birth" => $ADD_CHILD_DATEOFBIRTH,
				);
		$RESULT = $this->pds_model->add_child_model($DATA);
	}

	public function select_edit_child() {
		$FBC_NO 	= $this->input->post("fbc_no");
		$WHERE 		= array("fbc_no" => $FBC_NO);

		$RESULT = $this->pds_model->select_edit_child_model($WHERE);
		echo(json_encode($RESULT));
	}

	public function edit_child() {

		$EDIT_CHILD_DATEOFBIRTH 	= $this->input->post("add_child_dateOfBirth");
		$EDIT_CHILD_NAME 			= $this->input->post("add_child_name");
		$FBC_NO 					= $this->input->post("fbc_no");

		$DATA = array(
					"date_of_birth" => $EDIT_CHILD_DATEOFBIRTH,
					"name_of_child" => $EDIT_CHILD_NAME,
				);
		$WHERE = array("fbc_no" => $FBC_NO);

		$this->pds_model->select_update_child_model($WHERE,$DATA);

		echo json_encode(array("err"=>"00", "msg"=> "Records has been updated."));
	}

	public function remove_child() {
		$FBC_NO = $this->input->post("fbc_no");

		$DATA = array("fbc_no" => $FBC_NO);

		$RESULT = $this->pds_model->remove_child_model($DATA);
		echo(json_encode($RESULT));
	}

	public function get_civil_service() {

		$EMP_NO = $this->input->post("_EMP_NO");
		$WHERE = array("emp_no" => $EMP_NO);
		$RESULT = $this->pds_model->get_civil_service_model($WHERE);

		echo(json_encode($RESULT));
	}

	public function select_edit_civil() {
		
		$CSE_NO 	= $this->input->post("cse_no");
		$WHERE 		= array("cse_no" => $CSE_NO);
		$RESULT 	= $this->pds_model->select_edit_civil_model($WHERE);
		echo(json_encode($RESULT));
	}

	public function add_civil() {

		$CAREER_SERVICE 	= $this->input->post("career_service");
		$RATING 	= $this->input->post("rating");
		$DATE_EXAMINATION 	= $this->input->post("date_examination");
		$PLACE_EXAMINATION 	= $this->input->post("place_examination");
		$NUMBER 	= $this->input->post("number");
		$DATE_RELEASE 	= $this->input->post("date_release");
		$EMP_NO 	= $this->input->post("_EMP_NO");

		$DATA = array(
					"career_service"	=> $CAREER_SERVICE,
					"rating"															=> $RATING,
					"date_of_examination/conferment"									=> $DATE_EXAMINATION,
					"place_examination/conferment"										=> $PLACE_EXAMINATION,
					"license_number"													=> $NUMBER,
					"license_date_of_release"											=> $DATE_RELEASE,
					"emp_no"															=> $EMP_NO,
				);

		$RESULT 	= $this->pds_model->add_civil_model($DATA);
		echo json_encode(array("err"=>"00", "msg"=> "Records has been Added."));
	}

	public function edit_civil() {
		$CAREER_SERVICE 	= $this->input->post("career_service");
		$RATING 			= $this->input->post("rating");
		$DATE_EXAMINATION 	= $this->input->post("date_examination");
		$PLACE_EXAMINATION 	= $this->input->post("place_examination");
		$NUMBER 			= $this->input->post("number");
		$DATE_RELEASE 		= $this->input->post("date_release");
		$CSE_NO 			= $this->input->post("cse_no");

		$DATA = array(
					"career_service"	=> $CAREER_SERVICE,
					"rating"															=> $RATING,
					"date_of_examination/conferment"									=> $DATE_EXAMINATION,
					"place_examination/conferment"										=> $PLACE_EXAMINATION,
					"license_number"													=> $NUMBER,
					"license_date_of_release"											=> $DATE_RELEASE,
					// "emp_no"															=> $EMP_NO,
				);

		$WHERE = array("cse_no" => $CSE_NO);

		$RESULT 	= $this->pds_model->edit_civil_model($WHERE,$DATA);
		echo json_encode(array("err"=>"00", "msg"=> "Records has been update."));
	}

	public function remove_civil() {

		$CSE_NO 	= $this->input->post("cse_no");

		$DATA = array("cse_no" => $CSE_NO);

		$RESULT = $this->pds_model->remove_civil_model($DATA);
		echo(json_encode($RESULT));
	}

	public function work_expi() {

		$EMP_NO = $this->input->post("_EMP_NO");
		$WHERE = array("emp_no" => $EMP_NO);
		$RESULT = $this->pds_model->work_expi_model($WHERE);

		echo(json_encode($RESULT));
	}

	public function add_work() {

		$DATE_FROM = $this->input->post("date_from");
		$DATE_TO = $this->input->post("date_to");
		$POSITION = $this->input->post("position");
		$DEPARTMENT = $this->input->post("department");
		$MONTHLY_SALARY = $this->input->post("monthly_salary");
		$SALARY_STEP = $this->input->post("salary_step");
		$STATUS = $this->input->post("status");
		$GOVT_SERVICE = $this->input->post("govt_service");
		$_EMP_NO = $this->input->post("_EMP_NO");

		$DATA = array(
					"inclusive_dates_from" => $DATE_FROM,
					"inclusive_dates_to" => $DATE_TO,
					"position_title" => $POSITION,
					"department/agency/office/company" => $DEPARTMENT,
					"monthly_salary" => $MONTHLY_SALARY,
					"salary_grade_step_increment" => $SALARY_STEP,
					"status_of_appointment" => $STATUS,
					"govt_service" => $GOVT_SERVICE,
					"emp_no" => $_EMP_NO,
				); 

		$RESULT 	= $this->pds_model->add_work_model($DATA);
		echo json_encode(array("err"=>"00", "msg"=> "Records has been Added."));

	}

	public function select_edit_work() {
		$WE_NO = $this->input->post("we_no");
		$WHERE 		= array("we_no" => $WE_NO);

		$RESULT = $this->pds_model->select_edit_work_model($WHERE);
		echo(json_encode($RESULT));
	}

	public function edit_work() {
		$DATE_FROM = $this->input->post("date_from");
		$DATE_TO = $this->input->post("date_to");
		$POSITION = $this->input->post("position");
		$DEPARTMENT = $this->input->post("department");
		$MONTHLY_SALARY = $this->input->post("monthly_salary");
		$SALARY_STEP = $this->input->post("salary_step");
		$STATUS = $this->input->post("status");
		$GOVT_SERVICE = $this->input->post("govt_service");
		$WE_NO = $this->input->post("we_no");

		$DATA = array(
					"inclusive_dates_from" => $DATE_FROM,
					"inclusive_dates_to" => $DATE_TO,
					"position_title" => $POSITION,
					"department/agency/office/company" => $DEPARTMENT,
					"monthly_salary" => $MONTHLY_SALARY,
					"salary_grade_step_increment" => $SALARY_STEP,
					"status_of_appointment" => $STATUS,
					"govt_service" => $GOVT_SERVICE,
				); 
		$WHERE = array("we_no" => $WE_NO);

		$RESULT 	= $this->pds_model->edit_work_model($WHERE,$DATA);
		echo json_encode(array("err"=>"00", "msg"=> "Records has been updated."));
	}

	public function remove_work() {

		$WE_NO 		= $this->input->post("we_no");
		$WHERE 		= array("we_no" => $WE_NO);
		$RESULT 	= $this->pds_model->remove_work_model($WHERE);
		echo json_encode(array("err"=>"00", "msg"=> "Records has been remove."));
	}

	public function add_training() {

		$ADD_TRAINING_NAME 			= $this->input->post("add_training_name");
		$ADD_TRAINING_DATE_FROM 	= $this->input->post("add_training_date_from");
		$ADD_TRAINING_DATE_TO 		= $this->input->post("add_training_date_to");
		$ADD_NUMBERS_HOURS 			= $this->input->post("add_numbers_hours");
		$ADD_SPONSORED 				= $this->input->post("add_sponsored");
		$EMP_NO 					= $this->input->post("_EMP_NO");


		$DATA = array(
					"emp_no" => $EMP_NO,
					"title_of_seminar/conference/workshops/short_courses" => $ADD_TRAINING_NAME,
					"inclusive_dates_of_attendance_from" => $ADD_TRAINING_DATE_FROM,
					"inclusive_dates_of_attendance_to" => $ADD_TRAINING_DATE_TO,
					"number_of_hours" => $ADD_NUMBERS_HOURS,
					"conducted/sponsored_by" => $ADD_SPONSORED,
				);

		$RESULT 	= $this->pds_model->add_training_model($DATA);
		echo json_encode(array("err"=>"00", "msg"=> "Records has been Added."));

	}

	public function training_program() {

		$EMP_NO = $this->input->post("_EMP_NO");
		$WHERE = array("emp_no" => $EMP_NO);
		$RESULT = $this->pds_model->training_program_model($WHERE);

		echo(json_encode($RESULT));

	}

	public function select_edit_training() {
		$TP_NO = $this->input->post("tp_no");
		$WHERE  = array("tp_no"=> $TP_NO);

		$RESULT = $this->pds_model->select_edit_training_model($WHERE);
		echo(json_encode($RESULT));

	}

	public function edit_training() {

		$ADD_TRAINING_NAME 			= $this->input->post("add_training_name");
		$ADD_TRAINING_DATE_FROM 	= $this->input->post("add_training_date_from");
		$ADD_TRAINING_DATE_TO 		= $this->input->post("add_training_date_to");
		$ADD_NUMBERS_HOURS 			= $this->input->post("add_numbers_hours");
		$ADD_SPONSORED 				= $this->input->post("add_sponsored");
		$TP_NO 						= $this->input->post("tp_no");

		$WHERE = array("tp_no" => $TP_NO);
		$DATA = array(
					"title_of_seminar/conference/workshops/short_courses" => $ADD_TRAINING_NAME,
					"inclusive_dates_of_attendance_from" => $ADD_TRAINING_DATE_FROM,
					"inclusive_dates_of_attendance_to" => $ADD_TRAINING_DATE_TO,
					"number_of_hours" => $ADD_NUMBERS_HOURS,
					"conducted/sponsored_by" => $ADD_SPONSORED,
				);

		$RESULT 	= $this->pds_model->edit_training_model($WHERE,$DATA);
		echo json_encode(array("err"=>"PDS01", "msg"=> PDS01));

	}

	public function remove_training() {
		$TP_NO 						= $this->input->post("tp_no");

		$DATA = array("tp_no" => $TP_NO);

		$RESULT = $this->pds_model->remove_training_model($DATA);
		echo(json_encode($RESULT));
	}

	/*Voluntary Work*/

	/*SELECT ALL CURRENT VOLUNTART WORK*/
	public function voluntary_work() {

		$EMP_NO = $this->input->post("_EMP_NO");
		$WHERE = array("emp_no" => $EMP_NO);
		$RESULT = $this->pds_model->voluntary_work_model($WHERE);

		echo(json_encode($RESULT));
	}

	public function select_edit_voluntary() {

		$VW_IIC = $this->input->post("vw_iic");
		$WHERE 		= array("vw_iic" => $VW_IIC);

		$RESULT = $this->pds_model->select_edit_voluntary_model($WHERE);
		echo(json_encode($RESULT));
	}

	public function add_voluntary() {
		$ADD_VOLUNTARY_NAME = $this->input->post("add_voluntary_name");
		$ADD_VOLUNTARY_DATE_FROM = $this->input->post("add_voluntary_date_from");
		$ADD_VOLUNTARY_DATE_TO = $this->input->post("add_voluntary_date_to");
		$ADD_VOLUNTARY_NUMBERS_HOURS = $this->input->post("add_voluntary_numbers_hours");
		$ADD_VOLUNTARY_NATURE = $this->input->post("add_voluntary_nature");
		$EMP_NO 					= $this->input->post("_EMP_NO");

		$DATA  = array(
					"emp_no" => $EMP_NO,
					"name_&_address_of_organization" => $ADD_VOLUNTARY_NAME,
					"inclusive_dates_from" => $ADD_VOLUNTARY_DATE_FROM,
					"inclusive_dates_to" => $ADD_VOLUNTARY_DATE_TO,
					"number_of_hours" => $ADD_VOLUNTARY_NUMBERS_HOURS,
					"position/nature_of_work" => $ADD_VOLUNTARY_NATURE,
				);

		$RESULT 	= $this->pds_model->add_voluntary_model($DATA);
		echo json_encode(array("err"=>"00", "msg"=> "Records has been Added."));
	}

	public function edit_voluntary() {

		$ADD_VOLUNTARY_NAME = $this->input->post("add_voluntary_name");
		$ADD_VOLUNTARY_DATE_FROM = $this->input->post("add_voluntary_date_from");
		$ADD_VOLUNTARY_DATE_TO = $this->input->post("add_voluntary_date_to");
		$ADD_VOLUNTARY_NUMBERS_HOURS = $this->input->post("add_voluntary_numbers_hours");
		$ADD_VOLUNTARY_NATURE = $this->input->post("add_voluntary_nature");
		$VW_IIC 					= $this->input->post("vw_iic");

		$WHERE = array ("vw_iic" => $VW_IIC);
		$DATA = array(
					"name_&_address_of_organization" => $ADD_VOLUNTARY_NAME,
					"inclusive_dates_from" => $ADD_VOLUNTARY_DATE_FROM,
					"inclusive_dates_to" => $ADD_VOLUNTARY_DATE_TO,
					"number_of_hours" => $ADD_VOLUNTARY_NUMBERS_HOURS,
					"position/nature_of_work" => $ADD_VOLUNTARY_NATURE,
					);

		$RESULT 	= $this->pds_model->edit_voluntary_model($WHERE,$DATA);
		echo json_encode(array("err"=>"00", "msg"=> "Records has been Updated."));
	}

	public function remove_voluntary() {
		$VW_IIC = $this->input->post("vw_iic");

		$WHERE = array("vw_iic" => $VW_IIC);

		$RESULT = $this->pds_model->remove_voluntary_model($WHERE);
		echo(json_encode($RESULT));
	}

	/*OTHER INFO*/
	public function other_info() {

		$EMP_NO = $this->input->post("_EMP_NO");
		$WHERE = array("emp_no" => $EMP_NO);
		$RESULT = $this->pds_model->other_info_model($WHERE);

		echo(json_encode($RESULT));
	}

	public function add_other_info() {
		$ADD_OTHER_INFO_SKILL = $this->input->post("add_other_info_skill");
		$ADD_OTHER_INFO_ACADEMIC = $this->input->post("add_other_info_academic");
		$ADD_OTHER_INFO_MEMBER = $this->input->post("add_other_info_member");
		$_EMP_NO = $this->input->post("_EMP_NO");

		$DATA = array(
					"special_skills/hobbies" => $ADD_OTHER_INFO_SKILL,
					"non_academic_distinctions/recognition" => $ADD_OTHER_INFO_ACADEMIC,
					"membership_in_association/organization" => $ADD_OTHER_INFO_MEMBER,
					"emp_no" => $_EMP_NO,
				);

		$RESULT = $this->pds_model->add_other_info_model($DATA);
		echo json_encode(array("err"=>"00", "msg"=> "Records has been Added."));
	}

	public function select_edit_other_info() {
		$OT_NO 	= $this->input->post("ot_no");
		$WHERE 		= array("ot_no" => $OT_NO);

		$RESULT = $this->pds_model->select_edit_other_info_model($WHERE);
		echo(json_encode($RESULT));
	}

	public function edit_other_info() {
		$ADD_OTHER_INFO_SKILL 		= $this->input->post("add_other_info_skill");
		$ADD_OTHER_INFO_ACADEMIC 	= $this->input->post("add_other_info_academic");
		$ADD_OTHER_INFO_MEMBER 		= $this->input->post("add_other_info_member");
		$OT_NO 						= $this->input->post("ot_no");

		$DATA = array(
					"special_skills/hobbies" 					=> $ADD_OTHER_INFO_SKILL,
					"non_academic_distinctions/recognition" 	=> $ADD_OTHER_INFO_ACADEMIC,
					"membership_in_association/organization" 	=> $ADD_OTHER_INFO_MEMBER,
				);
		$WHERE = array("ot_no" => $OT_NO);

		$RESULT = $this->pds_model->edit_other_info_model($WHERE,$DATA);
		echo json_encode(array("err"=>"00", "msg"=> "Records has been Updated."));
	}

	public function remove_other_info() {
		$OT_NO = $this->input->post("ot_no");

		$DATA = array("ot_no" => $OT_NO);

		$RESULT = $this->pds_model->remove_other_info_model($DATA);
		echo(json_encode($RESULT));
	}

	/*REFERENCE*/
	public function reference() {
		$EMP_NO = $this->input->post("_EMP_NO");
		$WHERE = array("emp_no" => $EMP_NO);
		$RESULT = $this->pds_model->reference_model($WHERE);

		echo(json_encode($RESULT));
	}

	public function reference_add() {

		$ADD_REFERENCE_NAME 		= $this->input->post("add_reference_name");
		$ADD_REFERENCE_ADDRESS 		= $this->input->post("add_reference_address");
		$ADD_REFERENCE_CONTACT 		= $this->input->post("add_reference_contact");
		$_EMP_NO 					= $this->input->post("_EMP_NO");

		$DATA = array(
					"name" 				=> $ADD_REFERENCE_NAME,
					"address" 			=> $ADD_REFERENCE_ADDRESS,
					"telephone_no" 		=> $ADD_REFERENCE_CONTACT,
					"emp_no" 			=> $_EMP_NO,
				);

		$RESULT = $this->pds_model->add($this->TABLE11,$DATA);
		echo json_encode(array("err"=>"00", "msg"=> "Records has been Added."));
	}

	public function select_edit_reference() {

		$REF_NO = $this->input->post("ref_no");
		$WHERE 		= array("ref_no" => $REF_NO);

		$RESULT = $this->pds_model->select($this->TABLE11,$WHERE);
		echo(json_encode($RESULT));
	}

	public function reference_update() {
		$ADD_REFERENCE_NAME 		= $this->input->post("add_reference_name");
		$ADD_REFERENCE_ADDRESS 		= $this->input->post("add_reference_address");
		$ADD_REFERENCE_CONTACT 		= $this->input->post("add_reference_contact");
		$REF_NO 					= $this->input->post("ref_no");

		$DATA = array(
					"name" 				=> $ADD_REFERENCE_NAME,
					"address" 			=> $ADD_REFERENCE_ADDRESS,
					"telephone_no" 		=> $ADD_REFERENCE_CONTACT,
				);
		$WHERE = array("ref_no" => $REF_NO);

		$RESULT = $this->pds_model->update($this->TABLE11,$WHERE,$DATA);
		echo json_encode(array("err"=>"00", "msg"=> "Records has been Updated."));
	}

	public function reference_remove() {
		$REF_NO = $this->input->post("ref_no");

		$WHERE = array("ref_no" => $REF_NO);

		$RESULT = $this->pds_model->delete($this->table11,$WHERE);
		echo(json_encode($RESULT));
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */