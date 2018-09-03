<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mea_admin extends CI_Controller {

	public function index()
	{
	//start session		
		$admin_name=$this->session->userdata('admin_nameEvent');
		$sessionArr=explode('|', $admin_name);
	//check session variable set or not, otherwise logout
		if(($sessionArr[0]=='MEAEVENT007')){
			//print_r($sessionArr);
    		redirect('admin/mea_dashboard');
		}
		$this->load->view('pages/admin_login');
	}

	// ----------------------admin login fucntion starts here-------------------//
	public function adminLogin() {
		extract($_POST);

        //print_r($_POST);die();
        //Connection establishment, processing of data and response from REST API   

		$this->load->model('admin');
		$result = $this->admin->adminLogin($login_username, $login_password);
		//print_r($result);die();

		if ($result) {
        	//----create session array--------//
			$session_data = array(
				'admin_nameEvent' => "MEAEVENT007|".$login_username
			);

            //start session of user if login success
			$this->session->set_userdata($session_data);

			echo '<div class="alert alert-success">
			<strong>Login Sucess</strong> 
			</div>
			<script>
			window.setTimeout(function() {
				$(".alert").fadeTo(500, 0).slideUp(500, function(){
					$(this).remove(); 
					});
					window.location.href="'.base_url().'admin/mea_dashboard";
					}, 500);
					</script>
					';
				} else {
					echo '<div class="alert alert-danger">
					<strong>Login Credentials are incorrect!</strong> 
					</div>      
					';
				}
			}
		// ---------------admin login fucntion ends here--------------------//

		// -------------------admin logout fucntion starts here---------------//
			public function logout() {
				$admin_name=$this->session->userdata('admin_name');

        //if logout success then destroy session and unset session variables
				$this->session->unset_userdata(array("admin_name" => ""));
				$this->session->sess_destroy();

				redirect('admin/mea_admin');
			}

    //----------function for admin registerd user------------------//
		}
