<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model("login_model");
		
		if(!$this->session->userdata('logged_in')){
			//echo "sadsad";
			//die();
			//redirect(site_url(''));
			$this->load->view('login_view');
			return;
		}
		//die("sadsassssss");
	}

	public function index()
	{	
		
		if($this->input->post()) {
			$this->process();
		}
		$this->load->view('login_view');
		
		

	}

	private function process()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required',
                array('required' => 'You must provide a %s.')
        );

        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('login_error', array('Please enter username and password'));
        }else{
        	$username = $this->input->post('username');
        	$password = $this->input->post('password');
			
			$WHERE = array("username" => $username, "password" => md5($password) );
			
        	$user_match = $this->login_model->validate_user($WHERE);
        	if($user_match){
        		redirect(site_url('home'));
        	}else{
        	$this->session->set_flashdata('login_error', array('Invalid username or password, please try again'));
        	}
        }
			
			
	}
	
}