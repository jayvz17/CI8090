<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controller_login extends CI_Controller {

       function __construct(){

            parent::__construct();
           	$this->load->database();
            // $this->load->view("views_login");
       }

       public function index()
      {
            $this->load->database();
            $this->load->view("views_login");
      }

       function get_data_form(){

       	$data = array(
       		"username" => $this->input->post("emp_username"),
       		"password" => $this->input->post("emp_password")
       		);

       	$this->load->model("login_model");
            $resulta = $this->login_model->check_data_valid($data);

            if($resulta){
            $this->load->view("home");
            }

       }
}