<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkin extends CI_Controller {

	// Login controller
	public function __construct(){
		parent::__construct();

		// load common model
		$this->load->model('user/user_model');		
	}

	// main index function
	public function index($code)
	{
		$result['code']=$code;
		$codeArr=explode('|', base64_decode($code,TRUE));
		$user_id=$codeArr[3];
		$name=$codeArr[0];
		$result['name']=$name;

		// call to model function to update user status
		$result['message'] = $this->user_model->checkIn($user_id);
		$this->load->view('pages/scan/success',$result);
	}

	// checkout user function
	public function checkout($code)
	{
		$codeArr=explode('|', base64_decode($code,TRUE));
		$user_id=$codeArr[3];
		$name=$codeArr[0];
		$result['name']=$name;


		// call to model function to update user status
		$result['message'] = $this->user_model->checkOut($user_id);
		// print_r($result);die();
		$this->load->view('pages/scan/checkout',$result);
	}
}
