<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	// Login controller
	public function __construct(){
		parent::__construct();

		// load common model
		$this->load->model('user/user_model');		
	}

	// main index function
	public function registerUser()
	{
		extract($_POST);
		$ip = $this->input->ip_address();
		$date=date('Y-m-d');

		$user_info=array(
			'name'	=>	$memberName,
			'availability'	=>	$seatConfirm,
			'foodPreference'	=>	$foodRef,
			'date'	=>	$date,
			'ip_addr'	=>	$ip
		);

		// call to model function to save new user in db
		$result = $this->user_model->registerUser($user_info);
		if($result['status']=='200'){
			
		}

// print_r($result);
	}

	// generate qr code of unique code
	public function generateQR($unique_code){
		$this->load->library('ciqrcode');

		$params['data'] = $unique_code;
		$params['level'] = 'M';
		$params['size'] = 5;
		$params['savename'] = 'assets/images/tes.png';
		$this->ciqrcode->generate($params);

		echo '<img src="'.base_url().'assets/images/tes.png" />';
	}

}
