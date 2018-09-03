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
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/alert/jquery-confirm.css">
  <script src="<?php echo base_url(); ?>assets/js/const.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/alert/jquery-confirm.js"></script>
</head>

<body>

  <section class="probootstrap-cover overflow-hidden relative"  style="background-image: url('<?php echo base_url(); ?>assets/template/images/background03.jpg');" data-stellar-background-ratio="0.5"  id="section-home" style="padding: 0">
    <div class="overlay"></div>
    <div class="container">
      <div class="row align-items-center probootstrap-animate">
        <div class="col-md">
          <!-- text based logo -->
          <div class="w3-center">
            <a class="btn w3-center" style="background-color: black;border:1px solid;border-color: white;border-radius: 0;padding:10px" href="#">
              <img src="<?php echo base_url(); ?>assets/images/mea_logo.jpg" class="img img-responsive" style="width: 200px;height: auto;"/>
            </a>
            <p style="color: white">
              <br>
              Welcomes you for 
            </p>
            <h2 class="heading mb-2 display-4 font-light probootstrap-animate">Annual General Meet 2k18</h2>
            <p class="mu-event-date-line probootstrap-animate" style="background-color: black;color: white;border:1px solid;border-color: white">8th September, 2018. Sharp 5pm <br> Siddhi Banquets, D.P. Road, Near Mhatre Bridge, Pune.</p>
          </div>         
          <br>
          <div class="w3-col l12 w3-text-white w3-center w3-padding-bottom probootstrap-animate">
            <p class="lead mb-5 probootstrap-animate"><span class="fa fa-copyright w3-large"></span> Powered by <a href="http://bizmo-tech.com" class="w3-text-white" target="_blank" style="padding: 0 0 5px 0"> Bizmo Technologies </a>
              <br>
              Sponsored by <span class="w3-text-white">Ar. Dakshata Ranjeet Wagh</span></p>
              <br>
            </div>
          </div> 

          <div class="col-md probootstrap-animate">

            <?php 
            if(isset($userCookie) && $userCookie['status']==true){
              $codeArr=explode('|', base64_decode($userCookie['status_message'][0]['unique_code'],TRUE));
              $name=str_replace(' ','_',$codeArr[0]);
              $img_name=$name.'_'.$codeArr[3];
              $idvalue=str_replace("-", "", $userCookie['status_message'][0]['dated']);
              ?>

              <form class="probootstrap-form">
                <div class="w3-col l12">
                  <h3><i class="fa fa-qrcode"></i> AGM Pass </h3>
                  <div class="w3-col l1 m2 w3-hide-small w3-circle w3-black" style="position: absolute;height: 60px;margin-top: 10px;margin-left: 35%"></div>
                  <div class="w3-col s2 w3-circle w3-hide-large w3-hide-medium w3-black" style="position: absolute;height: 60px;margin-top: 10px;margin-left: 32%"></div>

                  <div class="w3-col l10 col-md-offset-1">

                    <div class="w3-col l12 w3-black" style="padding: 8px">
                      <div class="w3-col l12 w3-padding-small">
                        <img src="<?php echo base_url(); ?>assets/images/mea_logo.jpg" class="img img-responsive" style="width: 100px;height: auto;"/>
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
                              <h5> <?php echo strtoupper($userCookie['status_message'][0]['member_name']); ?> </h5>
                            </div>

                            <div class="w3-col l12 w3-margin-bottom">
                              <h6>PASS ID</h6>
                              <h5> AGM <?php echo $idvalue.'0'.$userCookie['status_message'][0]['user_id']; ?> </h5>
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
                            <img src="<?php echo base_url(); ?>assets/images/event.jpeg" style="height: auto;width: 100%;">
                          </div>
                        </div>
                      </div>
                      <div class="w3-col l12 w3-light-grey w3-padding">
                        <center><img class="img img-responsive img-round" src="<?php echo base_url(); ?><?php echo $userCookie['status_message'][0]['qr_img']; ?>" style="margin-bottom: 5px">
                          <a style="padding: 3px" href="<?php echo base_url(); ?>user/registration/fileDownload?file=<?php echo $userCookie['status_message'][0]['qr_img']; ?>&img_name=<?php echo $img_name; ?>" class="downloadLink w3-medium w3-text-grey"><i class="fa fa-download"> download</i></a> 
                        </center>
                        <br>
                      </div>    
                    </div>
                  </div>
                </div>
                <div class="container w3-center">
                  <br>
                  <p class="w3-text-grey">
                    Register new Member?<a onclick="resetCookie('<?php echo $userCookie['status_message'][0]['member_name']; ?>')"  class="w3-text-blue btn" style="padding: 0"> <u> Click here</u></a>
                  </p>
                </div>                
              </form>
              <?php 
            }
            else{
              ?>
              <form id="register_userForm" class="probootstrap-form">
                <div id="regForm">
                  <h3><i class="fa fa-edit"></i> Register Here !</h3>
                  <br>
                  <div class="form-group">
                    <div class="row mb-3">
                      <div class="col-md-12 w3-margin-bottom">
                        <div class="form-group">
                          <!-- <label for="id_memberName"><i class="fa fa-user-secret"></i> Member Name</label> -->
                          <label for="id_memberName" style="width: 100%;">
                            <input type="text" required placeholder="Enter your full name here *" name="memberName" id="id_memberName" class="form-control" style="width: 100%;">
                          </label>
                        </div>
                      </div>

                      <div class="col-md-6 w3-margin-bottom">                    
                        <div class="form-group">
                          <label for="id_seatConfirm"><i class="fa fa-check-square"></i> Seat Confirmation <b class="w3-text-red">*</b></label>
                          <label for="id_seatConfirm" style="width: 100%;">
                            <label for="id_seatConfirmYes" class="mr-5"><input required type="radio" value="yes" id="id_seatConfirmYes" name="seatConfirm">  Yes</label>
                            <label for="id_seatConfirmNo"><input required type="radio" value="no" id="id_seatConfirmNo" name="seatConfirm">  No</label>
                          </label>
                        </div>
                      </div>

                      <div class="col-md-6 w3-margin-bottom">
                        <div class="form-group">
                          <label for="id_foodRef"><i class="fa fa-glass"></i> Food Reference <b class="w3-text-red">*</b></label>
                          <label for="id_foodRef" style="width: 100%;">
                            <label for="id_foodRefVeg" class="mr-5"><input required type="radio" value="veg" id="id_foodRefVeg" name="foodRef">  Veg</label>
                            <label for="id_foodRefNVeg"><input required type="radio" value="nveg" id="id_foodRefNVeg" name="foodRef">  Non Veg</label>
                          </label>
                        </div>
                      </div>

                      <div class="col-md-12 w3-margin-bottom ">
                        <button type="submit" id="register_userBtn" class="btn btn-primary btn-block">Submit</button>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="row" class="probootstrap-form" style="padding: 0">
                  <div class="col-md-12">
                    <ul style="list-style: none;padding: 5px" id="msgList"></ul>
                  </div>
                  <div class="w3-col l10 col-md-offset-1" id="qr_img"></div>
                </div>
              </form>
              <?php
            }
            ?>
            
          </div>
        </div>
      </div>

    </section>
    <!-- END section -->
    <script type="text/javascript">
      // ------------register user--------------
      $(function () {
        $("#register_userForm").submit(function () {
          dataString = $("#register_userForm").serialize();
          $('#msgList').html('');

          $.ajax({
            type: "POST",
            url: BASE_URL+"user/registration/registerUser",
            dataType : 'text',
            data: dataString,
            return: false, 
            beforeSend: function(){
              $("#register_userBtn").attr("disabled", true);
              $('#register_userBtn').html('<i class="fa fa-circle-o-notch fa-spin w3-medium"></i> Registering. Please wait');
            },
            success: function(data){
              var response=JSON.parse(data);
              console.log(response);
              if(response.status==true){
                $('#msgList').append('<li class="w3-text-green"><i class="fa fa-check"></i> '+response.status_message+'</li>');
                qrCode(response.code);
              }
              else{
                $('#msgList').append('<li class="w3-text-red"><i class="fa fa-remove"></i> '+response.status_message+'</li>');
              }
              $('#register_userBtn').removeAttr("disabled");
              $('#register_userBtn').html('Submit');
              // window.setTimeout(function() {
              //   window.location.reload();
              // }, 1500);
            },
            error:function(data){
              $('#register_userBtn').removeAttr("disabled");
              $('#msgList').html('<li class="w3-text-red"><i class="fa fa-remove"></i> Something went wrong with Registration. Please refresh the page and try once again.</li>');

              $('#register_userBtn').html('Submit');
              // window.setTimeout(function() {
              //   $(".alert").fadeTo(500, 0).slideUp(500, function(){
              //     $(this).remove(); 
              //   });
              // }, 5000);
            }
          });
          return false;
        });
      });
      // ------------register user--------------

      // genertae QR code
      function qrCode(code){
        $.ajax({
          type: "POST",
          url: BASE_URL+"user/registration/generateQR",
          dataType : 'text',
          data: {unique_code:code},
          return: false, 
          beforeSend: function(){
            $("#register_userBtn").attr("disabled", true);
            $('#register_userBtn').html('<i class="fa fa-circle-o-notch fa-spin w3-medium"></i> Generating Pass.');
          },
          success: function(data){
            var response=JSON.parse(data);
            console.log(response);
            if(response.status==true){
              $('#msgList').append('<li class="w3-text-green"><i class="fa fa-check"></i> '+response.status_message+'</li>');
              $('#qr_img').html(response.ticket);
              $('#regForm').hide();
              // $("#register_userForm :input").prop("disabled", true);
              window.location.href=response.redirectToDownload;

            }
            else{
              $('#msgList').append('<li class="w3-text-red"><i class="fa fa-remove"></i> '+response.status_message+'</li>');
            }
            $('#register_userBtn').removeAttr("disabled");
            $('#register_userBtn').html('Submit');
              // window.setTimeout(function() {
              //   window.location.reload();
              // }, 1500);
            },
            error:function(data){
              $('#register_userBtn').removeAttr("disabled");
              $('#msgList').html('<li class="w3-text-red"><i class="fa fa-remove"></i> Something went wrong with Generating Pass. Please refresh the page and try once again.</li>');

              $('#register_userBtn').html('Submit');
              // window.setTimeout(function() {
              //   $(".alert").fadeTo(500, 0).slideUp(500, function(){
              //     $(this).remove(); 
              //   });
              // }, 5000);
            }
          });
        return false;
      }
      // genertae QR code ends

      // confirm reset cookie
      function resetCookie(name) {
        $.confirm({
          title: '<h4 class="w3-text-orange"><i class="fa fa-warning"></i> Have you downloaded the pass of <b>'+name+'</b> ?</h4>',
          type: 'orange',
          content: 'Click "Confirm" button, if you have downloaded the previous  pass and want to register new member.',
          buttons: {
            confirm: function () {
              $.ajax({
                url: "<?php echo base_url(); ?>landing/resetCookie",
                type: "POST",
                cache: false,
                success: function (html) {
                  location.reload();
                }
              });
            },
            cancel: function () {
              $('.downloadLink').addClass('w3-text-blue');
              $('.downloadLink').addClass('w3-xlarge');
              $('.downloadLink').removeClass('w3-text-grey');

              setTimeout(function(){
                $('.downloadLink').removeClass('w3-text-blue');
                $('.downloadLink').removeClass('w3-xlarge');
                $('.downloadLink').addClass('w3-text-grey');
              }, 5000);

            }
          }
        });

      }
      // confirm reset cookie ends
      
    </script>
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
