<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Swan Industries | Login</title>

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
  <!-- angular-->
  <script src="<?php echo base_url(); ?>assets/js/angular.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/angular-sanitize.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/const.js"></script>




</head>

<body>

  <section class="probootstrap-cover overflow-hidden relative"  style="background-image: url('<?php echo base_url(); ?>assets/template/images/background03.jpg');" data-stellar-background-ratio="0.5"  id="section-home" style="padding: 0">
    <div class="overlay"></div>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md">
          <!-- text based logo -->
          <div class="w3-center">
            <a class="btn w3-padding-bottom w3-center" style="background-color: black;border:1px solid;border-color: white;border-radius: 0;padding:10px" href="#">
              <img src="<?php echo base_url(); ?>assets/images/mea_logo.jpg" class="img" style="width: 170px;height: auto;"/>
            </a>
            <p style="color: white">
              <br>
              Welcomes you for 
            </p>
            <h2 class="heading mb-2 display-4 font-light probootstrap-animate">Annual Gathering Meet 2K18</h2>
            <p class="mu-event-date-line" style="background-color: black;color: white;border:1px solid;border-color: white">30th June, 2018 | Pune, Maharashtra</p>
          </div>         
          <br>
          <div class="w3-col l12 w3-text-white w3-center w3-padding-bottom">
            <p class="lead mb-5 probootstrap-animate"><span class="fa fa-copyright w3-large"></span> Powered by <a href="http://bizmo-tech.com" class="w3-text-white" target="_blank" style="padding: 0 0 5px 0"> Bizmo Technologies </a>
              <br>
              Sponsored by <span class="w3-text-white">Ar. Dakshata Ranjeet Wagh</span></p>
              <br>
            </div>
          </div> 

          <div class="col-md probootstrap-animate">
            <form action="#" class="probootstrap-form">
              <h3><i class="fa fa-edit"></i> Register Here !</h3>
              <br>
              <div class="form-group">
                <div class="row mb-3">
                  <div class="col-md-12 w3-margin-bottom">
                    <div class="form-group">
                      <!-- <label for="id_memberName"><i class="fa fa-user-secret"></i> Member Name</label> -->
                      <label for="id_memberName" style="width: 100%;">
                        <input type="text" required placeholder="Enter your full name here..." name="" id="id_memberName" class="form-control" style="width: 100%;">
                      </label>
                    </div>
                  </div>

                  <div class="col-md-6 w3-margin-bottom">                    
                    <div class="form-group">
                      <label for="id_seatConfirm"><i class="fa fa-check-square"></i> Seat Confirmation</label>
                      <label for="id_seatConfirm" style="width: 100%;">
                        <label for="id_seatConfirmYes" class="mr-5"><input required type="radio" id="id_seatConfirmYes" name="seatConfirm">  Yes</label>
                        <label for="id_seatConfirmNo"><input required type="radio" id="id_seatConfirmNo" name="seatConfirm">  No</label>
                      </label>
                    </div>
                  </div>

                  <div class="col-md-6 w3-margin-bottom">
                    <div class="form-group">
                      <label for="id_foodRef"><i class="fa fa-glass"></i> Food Reference</label>
                      <label for="id_foodRef" style="width: 100%;">
                        <label for="id_foodRefVeg" class="mr-5"><input required type="radio" id="id_foodRefVeg" name="foodRef">  Veg</label>
                        <label for="id_foodRefNVeg"><input required type="radio" id="id_foodRefNVeg" name="foodRef">  Non Veg</label>
                      </label>
                    </div>
                  </div>

                  <div class="col-md-12 w3-margin-bottom ">
                    <input type="submit" value="Submit" class="btn btn-primary btn-block">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      
    </section>
    <!-- END section -->

    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/template/js/owl.carousel.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/template/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url(); ?>assets/template/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/template/js/jquery.easing.1.3.js"></script>

    <script src="<?php echo base_url(); ?>assets/template/js/select2.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/template/js/main.js"></script>
  </body>
  </html>