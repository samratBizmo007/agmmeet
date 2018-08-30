<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	// Login controller
	public function __construct(){
		parent::__construct();

		// load common model
		$this->load->model('login_model');		
	}

	// main index function
	public function index()
	{
		$this->load->view('pages/index');
		//$this->load->view('includes/footer');
	}
}