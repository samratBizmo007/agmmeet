<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>AGM | MEA Event</title>

  <!-- Bootstrap -->
  <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Custom Theme Style -->
  
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/css/animate.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/fonts/ionicons/css/ionicons.min.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/css/owl.carousel.min.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/fonts/flaticon/font/flaticon.css">
  <!-- Font Awesome -->
  <link href="<?php echo base_url(); ?>assets/fa/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/css/select2.css">


  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/css/helpers.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/css/style.css">
  <link href="<?php echo base_url(); ?>assets/build/css/w3.css" rel="stylesheet"> 
  <link href="<?php echo base_url(); ?>assets/build/css/header_overlay.css" rel="stylesheet"> 
  <!-- angular-->
  <script src="<?php echo base_url(); ?>assets/js/angular.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/angular-sanitize.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/alert/jquery-confirm.css">
  <script src="<?php echo base_url(); ?>assets/js/const.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/loadingoverlay.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/loadingoverlay_progress.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/alert/jquery-confirm.js"></script>
</head>
<body> 
    <a href="<?php echo base_url(); ?>" class="btn w3-margin "><i class="fa fa-arrow-left"></i> Goto <u class="w3-text-blue">MEA Annual General Meet 2k18 Page </u></a>
    <div class="w3-middle" id="spinnerDiv"></div>
    <div class="container" id="mainBody" style="margin-top: 20px;margin-bottom: 71px;">

        <div class="row">
            <div class="col-lg-4 w3-hide-small"></div>
            <div class="w3-col l4">
                <div class="w3-col l12 w3-card-2"> 
                    <div class="w3-w3-col l12 w3-black w3-margin-bottom" style="padding: 12px 0 15px 10px">
                        <img src="<?php echo base_url(); ?>assets/images/mea_logo.jpg" class="img" style="width: 150px;height: auto;">
                    </div>
                    <div class="w3-container " style="padding:0 36px 12px 36px">
                        <div class="w3-col l12 w3-small w3-margin-bottom">
                            <h4><i class="fa fa-user-secret"></i> MEA Admin Login</h4>
                            <span>Login access is granted by administrative controls.</span>
                        </div>
                        <form id="Adminlogin_form">
                            <div class="w3-col l12" id="login_err"></div>
                            <div id = "registerDiv">
                                <div class="w3-margin-bottom w3-col l12 s12">
                                </div>
                                <div class="w3-col l12 s12">
                                    <div class="w3-margin-bottom">
                                        <input type="text" name="login_username" id="login_username" class="w3-input w3-border w3-light-grey" placeholder="Admin Login Id" required autocomplete="off">
                                    </div>

                                    <div class="w3-margin-bottom">
                                        <input type="password" name="login_password" id="login_password" class="w3-input w3-border w3-light-grey" value="" placeholder="Admin Login Password" required>
                                    </div>
                                </div>
                                <div class="w3-margin-bottom" style="">
                                 <button type="submit" name="admin_login_submit" id="admin_login_submit" class="btn btn-block w3-blue"> Login </button>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>


         </div>

     </div>

 </div>
 <div class="w3-col l12 w3-center w3-padding-bottom">
            <p class="lead mb-5"><span class="fa fa-copyright w3-large"></span> Powered by <a href="http://bizmo-tech.com" target="_blank" class="w3-text-blue" style="padding: 0 0 5px 0"> Bizmo Technologies </a>
              <br>
              Sponsored by <span>Ar. Dakshata Ranjeet Wagh</span></p>
              <br>
            </div>

<script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/login.js"></script>
</body>
</html>





