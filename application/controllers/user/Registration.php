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
		$name=str_replace(' ','_',$codeArr[0]);
		$img_name=$name.'_'.$codeArr[3];
		$file=base_url().'assets/images/'.$img_name.'.png';
		$img_path='assets/images/'.$img_name.'.png';
		$idvalue=date('Ymd');


		// load library
		$this->load->library('ciqrcode');

		$params['data'] = base_url().'user/checkin/'.$unique_code;
		$params['level'] = 'M';
		$params['size'] = 5;
		$params['savename'] = 'assets/images/'.$img_name.'.png';
		
		$ticket='		
		<h3 class="w3-padding-left"><i class="fa fa-qrcode"></i> AGM Pass </h3>
		<div class="w3-col l1 m2 w3-hide-small w3-circle w3-black" style="position: absolute;height: 60px;margin-top: 10px;margin-left: 32%"></div>
		<div class="w3-col s2 w3-circle w3-hide-large w3-hide-medium w3-black" style="position: absolute;height: 60px;margin-top: 10px;margin-left: 35%"></div>

		<div class="w3-col l10 col-md-offset-1">

		<div class="w3-col l12 w3-black" style="padding: 8px">
		<div class="w3-col l12 w3-padding-small">
		<img src="'.base_url().'assets/images/mea_logo.jpg" class="img img-responsive" style="width: 100px;height: auto;"/>
		</div>
		<div class="w3-col l12 w3-light-grey " style="padding: 3px;margin-top:10px">
		<br>
		<div class="col-md-12">
		<h3 class="w3-text-grey w3-right"> Sat, 8 Sep </h3>
		</div>
		<br>
		<div class="w3-col l12">
		<div class="col-md-8 w3-col s8">
		<div class="w3-col l12 w3-margin-bottom">
		<h6>NAME</h6>
		<h5> '.strtoupper($name).' </h5>
		</div>

		<div class="w3-col l12 w3-margin-bottom">
		<h6>PASS ID</h6>
		<h5> AGM '.$idvalue.'0'.$codeArr[3].' </h5>
		</div>

		<div class="w3-col l12 w3-margin-bottom">
		<h6>VENUE</h6>
		<h5> Siddhi Banquets, D.P. Road, Near Mhatre Bridge, Pune-52 </h5>                              
		</div>

		<div class="w3-col l12 w3-margin-bottom">
		<h6>TIME</h6>
		<h5> 5.00 PM </h5>
		</div>
		</div>
		<div class="w3-col m4 s4">
		<img src="'.base_url().'assets/images/event.jpeg" style="height: auto;width: 100%;">
		</div>
		</div>
		</div>
		<div class="w3-col l12 w3-light-grey w3-padding">
		<center><img class="img img-responsive img-round" src="'.$file.'" style="margin-bottom: 5px">
		<a style="padding: 3px" href="'.base_url().'user/registration/fileDownload?file='.$img_path.'&img_name='.$img_name.'" class="downloadLink w3-medium w3-text-grey"><i class="fa fa-download"> download</i></a> 
		</center>
		<br>
		</div>    
		</div>
		</div>

		';
		// echo '<img class="img img-responsive" src="'.base_url().'assets/images/'.$img_name.'.png" />';

		if($this->ciqrcode->generate($params)){
			
			// call to model function to update qr image field
			$result = $this->user_model->updateImg($img_path,$codeArr[3],$unique_code);

			$cookie_agm= array(
				'name' => 'agm_registeredUser',
				'value' => $unique_code,
				'expire' => '86400'

			);
			$this->input->set_cookie($cookie_agm);     
                //-------set username to coockies-------------// 


			// return repsonse
			$response = array(
                'status' => true, //---------db error code 
                'status_message' => 'QR code generated successfully.',
                'ticket' => $ticket,
                'redirectToDownload'=>	base_url().'user/registration/fileDownload?file='.$file.'&img_name='.$img_name
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
		// print_r($_GET);
		$this->load->helper('file');
		$this->load->helper('download');
		
		// download file code
		$data =   file_get_contents($file);            
		force_download($img_name.'.png',$data);
	}

}
