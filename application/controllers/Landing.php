<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	// Login controller
	public function __construct(){
		parent::__construct();

		// load common model
		$this->load->model('user/user_model');			
	}

	// main index function
	public function index()
	{
		if(isset($_COOKIE['agm_registeredUser']) && isset($_COOKIE['agm_registeredUser'])!=''){
			$unique_code=$_COOKIE['agm_registeredUser'];

			$cookie_agm= array(
				'name' => 'agm_registeredUser',
				'value' => $unique_code,
				'expire' => '2592000'
			);
			$this->input->set_cookie($cookie_agm);

            // call to model function to get details of cookie reg user from db
			$result['userCookie'] = $this->user_model->getUserDetails($unique_code);
			// print_r($result);die();
			$this->load->view('pages/index',$result);
		}
		else{
			$this->load->view('pages/index');
		}		
	}

	// reset cookie
	public function resetCookie(){
		$this->load->helper('cookie');
		delete_cookie('agm_registeredUser');
		redirect(base_url());
	}
}
