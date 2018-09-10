<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	// Login controller
	public function __construct(){
		parent::__construct();

		// load common model
		$this->load->model('user/user_model');		
	}

	public function downlaodAll(){
// call to model function to save new user in db
		$result = $this->user_model->getusers();
		print_r(json_encode($result));
	}

	public function makeQR(){
		extract($_POST);
 // print_r($_POST);die();
		$codeArr=explode('|', base64_decode($unique_code,TRUE));
		$name=str_replace(' ','_',$codeArr[0]);
		$img_name=$name.'_'.$codeArr[3];
		$file=base_url().'assets/uploads/qrcodes/'.$img_name.'.png';
		$img_path='assets/uploads/qrcodes/'.$img_name.'.png';
		$idvalue=date('Ymd');

// print_r($file);die();
		// load library
		// $this->load->library('ciqrcode');

		// $params['data'] = base_url().'user/checkin/'.$unique_code;
		// $params['level'] = 'M';
		// $params['size'] = 5;
		// $params['savename'] = 'assets/uploads/qrcodes/'.$img_name.'.png';
		
		$ticket='
		<link href="'.base_url().'assets/build/css/w3.css" rel="stylesheet"> 
		<h3><i class="fa fa-qrcode"></i> AGM Pass </h3>
		<div class="w3-col l10 col-md-offset-1">

		<div class="w3-col l12 w3-black" style="padding: 8px">
		<div class="w3-col l12 w3-padding-small w3-margin-bottom">
		<img src="'.base_url().'assets/images/mea_logo.jpg" class="img img-responsive" style="width: 100px;height: auto;"/>
		</div>	
		<div class="w3-col l12 w3-round demo"  style="background-image: linear-gradient(135deg,#33fffc, #00b3b0, #6600ff);">                        
		<div class="w3-col l12" style="padding: 3px;margin-top:10px;">
		<br>
		<div class="col-md-12">
		<h3 class="w3-text-white w3-right"><b> Sat, 8<sup>th</sup> Sep </b></h3>
		</div>
		<br>
		<div class="w3-col l12">
		<div class="col-md-12 w3-col s12">
		<div class="w3-col l12 w3-margin-bottom">
		<h6 class=" w3-text-white"><b>NAME :</b></h6>
		<h5 class=" w3-text-white"> '.strtoupper($codeArr[0]).' </h5>
		</div>

		<div class="w3-col l12 w3-margin-bottom">
		<h6 class=" w3-text-white"><b>PASS ID :</b></h6>
		<h5 class=" w3-text-white"> AGM '.$idvalue.'0'.$codeArr[3].' </h5>
		</div>

		<div class="w3-col l12 w3-margin-bottom">
		<h6 class=" w3-text-white"><b>VENUE :</b></h6>
		<h5 class=" w3-text-white"> Siddhi Banquets, D.P. Road, Near Mhatre Bridge, Pune-52 </h5>                              
		</div>

		<div class="w3-col l12 w3-margin-bottom">
		<h6 class=" w3-text-white"><b>TIME :</b></h6>
		<h5 class=" w3-text-white"> 5.00 PM </h5>
		</div>
		</div>
		</div>
		</div>

		<div class="w3-col l12 w3-padding" >
		<center><img class="img img-responsive img-round" src="'.$file.'" style="margin-bottom: 5px">
		</center>
		</div>
		</div>    
		</div>
		</div>
		';
		// echo '<img class="img img-responsive" src="'.base_url().'assets/images/'.$img_name.'.png" />';
		// $this->ciqrcode->generate($params);

		$response = array(
                'status' => true, //---------db error code 
                'status_message' => 'QR code generated successfully.',
                'name' => $img_name,
                'ticket' => $ticket
            );
		echo json_encode($response);
		
	}

	// main index function
	public function registerUser()
	{
		extract($_POST);
		$ip = $this->input->ip_address();
		$date=date('Y-m-d');
		$time=date('H:i:s');
//print_r($_POST);die();
		$user_info=array(
			'name'	=>	$memberName,
			'availability'	=>	$seatConfirm,
			'foodPreference'	=>	$foodRef,
			'gender'	=>	$gender,
			'mobNumber'	=>	$mobNumber,
			'date'	=>	$date,
			'time'	=>	$time,
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
		$file=base_url().'assets/uploads/qrcodes/'.$img_name.'.png';
		$img_path='assets/uploads/qrcodes/'.$img_name.'.png';
		$idvalue=date('Ymd');


		// load library
		$this->load->library('ciqrcode');

		$params['data'] = base_url().'user/checkin/'.$unique_code;
		$params['level'] = 'M';
		$params['size'] = 5;
		$params['savename'] = 'assets/uploads/qrcodes/'.$img_name.'.png';
		
		$ticket='

		<h3><i class="fa fa-qrcode"></i> AGM Pass </h3>
		<div class="w3-col l1 m2 w3-hide-small w3-circle w3-black" style="position: absolute;height: 60px;margin-top: 20px;margin-left: 32%"></div>
		<div class="w3-col s2 w3-circle w3-hide-large w3-hide-medium w3-black" style="position: absolute;height: 60px;margin-top: 20px;margin-left: 36%"></div>

		<div class="w3-col l10 col-md-offset-1">

		<div class="w3-col l12 w3-black" style="padding: 8px">
		<div class="w3-col l12 w3-padding-small w3-margin-bottom">
		<img src="'.base_url().'assets/images/mea_logo.jpg" class="img img-responsive" style="width: 100px;height: auto;"/>
		</div>
		<div class="w3-col l12 w3-round" style="background-image: linear-gradient(135deg,#33fffc, #00b3b0, #6600ff);">                        
		<div class="w3-col l12" style="padding: 3px;margin-top:10px;">
		<br>
		<div class="col-md-12">
		<h3 class="w3-text-white w3-right"><b> Sat, 8<sup>th</sup> Sep </b></h3>
		</div>
		<br>
		<div class="w3-col l12">
		<div class="col-md-12 w3-col s12">
		<div class="w3-col l12 w3-margin-bottom">
		<h6 class=" w3-text-white"><b>NAME :</b></h6>
		<h5 class=" w3-text-white"> '.strtoupper($name).' </h5>
		</div>

		<div class="w3-col l12 w3-margin-bottom">
		<h6 class=" w3-text-white"><b>PASS ID :</b></h6>
		<h5 class=" w3-text-white"> AGM '.$idvalue.'0'.$codeArr[3].' </h5>
		</div>

		<div class="w3-col l12 w3-margin-bottom">
		<h6 class=" w3-text-white"><b>VENUE :</b></h6>
		<h5 class=" w3-text-white"> Siddhi Banquets, D.P. Road, Near Mhatre Bridge, Pune-52 </h5>                              
		</div>

		<div class="w3-col l12 w3-margin-bottom">
		<h6 class=" w3-text-white"><b>TIME :</b></h6>
		<h5 class=" w3-text-white"> 5.00 PM </h5>
		</div>
		</div>
		</div>
		</div>

		<div class="w3-col l12 w3-padding" >
		<center><img class="img img-responsive img-round" src="'.$file.'" style="margin-bottom: 5px">
		<a style="padding: 3px" href="'.base_url().'user/registration/fileDownload?file='.$img_path.'&img_name='.$img_name.'" class="downloadLink w3-large w3-text-white"><i class="fa fa-download"> download</i></a> 
		</center>
		</div>
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
				'expire' => '2592000'

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
