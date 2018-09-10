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
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue-router/3.0.1/vue-router.min.js"></script>
  <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
  <style type="text/css">
  .cameras .active {
    font-weight: bold;
    color: #009900;
  }
  .cameras a {
    color: #555;
    text-decoration: none;
    cursor: pointer;
  }
  .cameras a:hover {
    text-decoration: underline;
  }
  .preview-container {
    align-items: center;
    overflow: hidden;
  }
</style>
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
    <div class="w3-col l8 col-md-offset-2">
      <div class="w3-col l12 w3-padding-small">
        <div class="w3-col l4 w3-padding-right">
          <h6><b>Cameras Found:</b></h6>
          <ul class="cameras" style="list-style: none;padding: 0">
            <li v-if="cameras.length === 0" class="w3-border w3-padding-top w3-text-red" style="padding: 5px"><p style="margin: 0"><i class="fa fa-times-rectangle-o"></i> No Camera Found</p></li>
            <li v-for="camera in cameras" class="w3-border w3-padding-top active" style="padding: 5px">
              <p v-if="camera.id == activeCameraId" :title="formatName(camera.name)" class="active" style="margin: 0">{{ formatName(camera.name) }}</p>
              <p style="margin: 0" v-if="camera.id != activeCameraId" :title="formatName(camera.name)">
                <a @click.stop="selectCamera(camera)">{{ formatName(camera.name) }}</a>
              </p>
            </li>
          </ul>
        </div>
        <div class="w3-col l8">
          <h6><b>QR Scanner:</b></h6>
          <div class=" w3-border w3-padding-tiny w3-round w3-light-grey w3-margin-bottom">
            <video id="preview" style="width: 100%;height: auto;"></video>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- END section -->
  <script type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/qrscanner.js"></script>
</body>
</html>
