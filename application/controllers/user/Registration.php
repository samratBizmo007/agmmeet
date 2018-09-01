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

		echo json_encode($result);
	}

	// generate qr code of unique code
	public function generateQR(){
		extract($_POST);
		$codeArr=explode('|', base64_decode($unique_code,TRUE));
		$img_name=$codeArr[0].'_'.$codeArr[3];


		// load library
		$this->load->library('ciqrcode');

		$params['data'] = $unique_code;
		$params['level'] = 'M';
		$params['size'] = 5;
		$params['savename'] = 'assets/images/'.$img_name.'.png';
		
		$ticket='		
		<div class="w3-col l12 w3-black" style="padding: 5px">
		<div class="w3-col l12 w3-padding-small">
		<img src="'.base_url().'assets/images/mea_logo.jpg" class="img img-responsive" style="width: 100px;height: auto;"/>
		</div>
		<div class="w3-col l12 w3-light-grey " style="padding: 3px;border-bottom-right-radius:15px;border-bottom-left-radius:15px;margin-top:10px">
		<div class="col-md-12 w3-padding-top w3-border-bottom">
		<p class="w3-text-grey"><span class="w3-large fa fa-life-bouy"></span> Annual General Meet 2k18</p>
		</div>
		<div class="col-md-12 w3-padding-top w3-border-bottom">
		<p class="w3-text-grey"><span class="w3-large fa fa-calendar"></span> 8th September, 2018</p>
		</div>
		<div class="col-md-12 w3-padding-top w3-border-bottom">
		<p class="w3-text-grey"><span class="w3-large fa fa-clock-o"></span> Sharp 5pm</p>
		</div>
		<div class="col-md-12 w3-padding-top">
		<p class="w3-text-grey"><span class="w3-large fa fa-map-marker"></span> Siddhi Banquets, D.P. Road, Near Mhatre Bridge, Pune-52</p>
		</div>
		</div>
		<div class="w3-col l12 w3-white w3-padding" style="border-top-right-radius:15px;border-top-left-radius:15px;">
		<center><img class="img img-responsive" src="'.base_url().'assets/images/'.$img_name.'.png" /></center>
		</div>		
		</div>              
		';
		// echo '<img class="img img-responsive" src="'.base_url().'assets/images/'.$img_name.'.png" />';

		if($this->ciqrcode->generate($params)){
			$file=base_url().'assets/images/'.$img_name.'.png';
			// return repsonse
			$response = array(
                'status' => true, //---------db error code 
                'status_message' => 'Generated QR code successfully.',
                'ticket' => $ticket,
                'redirectToDownload'	=>	base_url().'user/registration/fileDownload?file='.$file.'&img_name='.$img_name
            );
		}
		else{
			$response = array(
                'status' => false, //---------db error code 
                'status_message' => 'QR code generation failed!'
            );
		}
		
		echo json_encode($response);
	}

	// file download code
	public function fileDownload(){
		extract($_GET);
		$this->load->helper('file');
		$this->load->helper('download');
		
		// download file code
		$data =   file_get_contents($file);            
		force_download($img_name.'.png',$data);

	}

}
