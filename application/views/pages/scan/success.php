<!DOCTYPE html>
<html lang="en">
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
  <!-- Font Awesome -->
  <link href="<?php echo base_url(); ?>assets/fa/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/css/style.css">
  <link href="<?php echo base_url(); ?>assets/build/css/w3.css" rel="stylesheet"> 
  
  <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/const.js"></script>
</head>

<body>
  <div class="row w3-black">
    <div class="col-md-12">
      <!-- text based logo -->
      <a class="btn w3-center" style="background-color: black;padding:10px" href="#">
        <img src="<?php echo base_url(); ?>assets/images/mea_logo.jpg" class="img img-responsive" style="width: 200px;height: auto;"/>
      </a>
    </div>
  </div>
  <br>
  <div class="container" id="ScanQr">
    <div class="col-md-8 col-md-offset-2" style="color: #242424">
      <div class="w3-col l12 w3-padding-small w3-center">
        <h4>Welcome,</h4>
        <h1><?php echo $name; ?></h1>
        <p><br>
          <span class="fa fa-check-circle-o w3-jumbo w3-text-green"></span> 
          <h2><?php echo $message['status_message']; ?></h2>
        </p>
        <p>If you are not <b><?php echo $name; ?></b>, then <a class="w3-text-blue" href="<?php echo base_url(); ?>user/checkin/checkout/<?php echo $code; ?>">Click Here</a></p>
        <br><br>
        <p class="w3-right"><a href="<?php echo base_url(); ?>admin/scanner"><span class="fa fa-arrow-left"></span> Back to scanner.</a></p>
      </div>

    </div>
  </div>

  <!-- END section -->
  <script type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
