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
  <script src="https://cdn.bootcss.com/dom-to-image/2.6.0/dom-to-image.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
  <script src="https://cdn.bootcss.com/FileSaver.js/2014-11-29/FileSaver.min.js"></script> 
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/alert/jquery-confirm.css">
  <script src="<?php echo base_url(); ?>assets/js/const.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/alert/jquery-confirm.js"></script>
</head>

<body>

  <?php 
  if(isset($userCookie) && $userCookie['status']==true){
    $codeArr=explode('|', base64_decode($userCookie['status_message'][0]['unique_code'],TRUE));
    $name=str_replace(' ','_',$codeArr[0]);
    $img_name=$name.'_'.$codeArr[3];
    $idvalue=str_replace("-", "", $userCookie['status_message'][0]['dated']);
    ?>
    <section class="w3-black">
      <div class="row" style="padding-top: 25px">
        <div class="w3-col l12">
          <div class="col-lg-4"></div>
          <div class="w3-col l4">

            <div class="w3-col l1 m1 w3-hide-small w3-circle w3-black" style=";position: absolute;height: 50px;margin-top: 55px;margin-left: 13%"></div>
            <div class="w3-col s2 w3-circle w3-hide-large w3-hide-medium w3-black" style="position: absolute;height: 60px;margin-top: 50px;margin-left: 44%"></div>

            <div class="w3-col l12">

              <div class="w3-col l12 w3-black" style="padding: 8px">
                <div class="w3-col l12 w3-padding-small w3-margin-bottom w3-hide-small w3-hide-medium">
                  <a class="btn w3-left" style="padding:0" href="https://bizmo-tech.com" target="_blank">
                    <img src="<?php echo base_url(); ?>assets/images/mea_logo.jpg" class="img img-responsive" style="width: 150px;height: auto;"/>
                  </a>
                  <a class="btn w3-right" style="padding:0" href="https://bizmo-tech.com" target="_blank">
                    <img src="<?php echo base_url(); ?>assets/images/bizmo_logoDark.jpg" class="img img-responsive" style="width: 200px;height: auto;"/>
                  </a><br>
                  <!-- <img src="<?php echo base_url(); ?>assets/images/mea_logo.jpg" class="img img-responsive" style="width: 150px;height: auto;"/> -->
                </div>
                <div class="w3-col l12 w3-padding-small w3-margin-bottom w3-hide-large">
                  <a class="btn w3-left" style="padding:0" href="bizmo-tech.com" target="_blank">
                    <img src="<?php echo base_url(); ?>assets/images/mea_logo.jpg" class="img img-responsive" style="width: 150px;height: auto;"/>
                  </a>
                  <a class="btn w3-right" style="padding:0" href="bizmo-tech.com" target="_blank">
                    <img src="<?php echo base_url(); ?>assets/images/bizmo_logoDark.jpg" class="img img-responsive" style="width: 150px;height: auto;"/>
                  </a><br>
                  <!-- <img src="<?php echo base_url(); ?>assets/images/mea_logo.jpg" class="img img-responsive" style="width: 150px;height: auto;"/> -->
                </div>
                <div class="w3-col l12 w3-round" style="background-image: linear-gradient(135deg,#33fffc, #00b3b0, #6600ff);">                        
                  <div class="w3-col l12" style="padding: 3px;margin-top:10px;">
                    <br>
                    <div class="col-md-12">
                      <h3 class="w3-text-white w3-right"><b> Sat, 8<sup>th</sup> Sep </b></h3>
                      <h6 class=" w3-text-white"><b>TIME :</b></h6>
                      <h5 class=" w3-text-white"> 5.00 PM </h5>
                    </div>
                    <br>
                    <div class="w3-col l12">
                      <div class="col-md-12 w3-col s12">
                        <div class="w3-col l12 w3-margin-bottom">
                          <h6 class=" w3-text-white"><b>NAME :</b></h6>
                          <h5 class=" w3-text-white"> <?php echo strtoupper($userCookie['status_message'][0]['member_name']); ?> </h5>
                        </div>

                        <div class="w3-col l12 w3-margin-bottom">
                          <h6 class=" w3-text-white"><b>PASS ID :</b></h6>
                          <h5 class=" w3-text-white"> AGM <?php echo $idvalue.'0'.$userCookie['status_message'][0]['user_id']; ?> </h5>
                        </div>

                        <div class="w3-col l12 w3-margin-bottom">
                          <h6 class=" w3-text-white"><b>VENUE :</b></h6>
                          <h5 class=" w3-text-white"> Siddhi Banquets, D.P. Road, Near Mhatre Bridge, Pune-52 </h5>                              
                        </div>

                        <div class="w3-col l12 w3-margin-bottom">

                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="w3-col l12 w3-padding" >
                    <center><img class="img img-responsive img-round" src="<?php echo base_url(); ?><?php echo $userCookie['status_message'][0]['qr_img']; ?>" style="margin-bottom: 5px">
                      <a style="padding: 3px" href="<?php echo base_url(); ?>user/registration/fileDownload?file=<?php echo $userCookie['status_message'][0]['qr_img']; ?>&img_name=<?php echo $img_name; ?>" class="downloadLink w3-large w3-text-white"><i class="fa fa-download"> download</i></a> 
                    </center>
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
          </div>
          <!-- <div class="col-lg-4 w3-border">yygyj</div> -->
        </div>
      </div>
    </section>

    <?php 
  }
  else{
    ?>
    <section class="probootstrap-cover overflow-hidden relative"  style="background-image: url('<?php echo base_url(); ?>assets/template/images/background03.jpg');" data-stellar-background-ratio="0.5"  id="section-home" style="padding: 0">
      <div class="overlay"></div>
      <div class="container" style="padding: 10px">
        <div class="row align-items-center probootstrap-animate" style="padding: 10px">
          <div class="col-md">
            <!-- text based logo -->
            <div class="w3-center">
              <a class="btn w3-center" style="padding:10px" href="bizmo-tech.com" target="_blank">
                <img src="<?php echo base_url(); ?>assets/images/bizmo_logoDark.jpg" class="img img-responsive" style="width: 200px;height: auto;"/>
              </a><br>           
            </div>
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
              <p class="lead mb-5 probootstrap-animate"><span class="fa fa-copyright w3-large"></span> Powered by <a class="btn w3-center" style="padding:10px" href="bizmo-tech.com" target="_blank">
                <img src="<?php echo base_url(); ?>assets/images/bizmo_logoDark.jpg" class="img img-responsive" style="width: 200px;height: auto;"/>
              </a>
              <br>
              Sponsored by <span class="w3-text-white">Ar. Dakshata Ranjeet Wagh</span></p>
              <br>
            </div>
          </div> 

          <div class="col-md probootstrap-animate">
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
                        <label for="id_gender"><i class="fa fa-male"></i><i class="fa fa-female"></i> Gender <b class="w3-text-red">*</b></label>
                        <label for="id_gender" style="width: 100%;">
                          <label for="id_genderMale" class="mr-5"><input required type="radio" value="Male" id="id_genderMale" name="gender">  Male</label>
                          <label for="id_genderFemale"><input required type="radio" value="Female" id="id_genderFemale" name="gender">  Female</label>
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

                    <div class="col-md-6 w3-margin-bottom">                    
                      <div class="form-group">
                        <label for="id_seatConfirm"><i class="fa fa-check-square"></i> Seat Confirmation <b class="w3-text-red">*</b></label>
                        <label for="id_seatConfirm" style="width: 100%;">
                          <label for="id_seatConfirmYes" class="mr-5"><input required type="radio" value="yes" id="id_seatConfirmYes" name="seatConfirm">  Yes</label>
                          <label for="id_seatConfirmNo"><input required type="radio" value="no" id="id_seatConfirmNo" name="seatConfirm">  No</label>
                        </label>
                      </div>
                    </div>

                    <div class="col-md-12 w3-margin-bottom">
                      <div class="form-group">
                        <!-- <label for="id_memberName"><i class="fa fa-user-secret"></i> Member Name</label> -->
                        <label for="id_mobNumber" style="width: 100%;">
                          <input type="number" placeholder="Enter your Mobile number(optional)" name="mobNumber" id="id_mobNumber" class="form-control" style="width: 100%;">
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
                <input type="text" class="form-control" id="idPass">
                <input type="text" class="form-control" id="qrPAth">
                <button class="btn" id="downloadPass">Download pass</button>
                <div class="w3-col l10 col-md-offset-1" id="qr_img"></div>
              </div>
            </form>

          </div>
        </div>
      </div>

    </section>
    <?php
  }
  ?>

  <!-- END section -->
  <script type="text/javascript">
    $( document ).ready(function() {
      var deviceAgent = navigator.userAgent.toLowerCase();
      var agentID = deviceAgent.match(/(iphone|ipod|ipad)/);
      if (agentID) {
        $('.downloadLink').addClass('w3-hide');
      }
      else{
        $('.downloadLink').removeClass('w3-hide');
      }

    });

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
              $('#register_userBtn').html('<i class="fa fa-circle-o-notch fa-spin w3-medium"></i> Registering');
            },
            success: function(data){
              //alert(data);return false;
              var response=JSON.parse(data);
              //console.log(response);
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
            //console.log(response);
            if(response.status==true){
              $('#msgList').append('<li class="w3-text-green"><i class="fa fa-check"></i> '+response.status_message+'</li>');
              $('#qr_img').html(response.ticket);
              $('#regForm').hide();
              // $("#register_userForm :input").prop("disabled", true);
              var deviceAgent = navigator.userAgent.toLowerCase();
              var agentID = deviceAgent.match(/(iphone|ipod|ipad)/);
              if (agentID) {
                window.location.reload();
              }
              else{
                window.location.href=response.redirectToDownload;
              }
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

      // var node = document.getElementById('my-node');
      var code = document.getElementById('idPass');
      var btn = document.getElementById('downloadPass');
      var c=0;
      btn.onclick = function() {
        code.innerHTML = "I'm an image now."
        $.ajax({
          type: "POST",
          url: BASE_URL+"user/registration/downlaodAll",
          dataType : 'text',
          // data: {unique_code:code},
          return: false, 
          
          success: function(data){
           var response=JSON.parse(data);
             // console.log(response[c].unique_code);return false;
            $('#idPass').val(response[c].unique_code);
            $('#qrPAth').val(response[c].qr_img);
            
            downloadpass(response[c].unique_code,response[c].qr_img);
            c++;
              // window.setTimeout(function() {
              //   window.location.reload();
              // }, 1500);
            },
            error:function(data){

              // window.setTimeout(function() {
              //   $(".alert").fadeTo(500, 0).slideUp(500, function(){
              //     $(this).remove(); 
              //   });
              // }, 5000);
            }
          });
        return false;
      }
      function downloadpass(code,img){
        $.ajax({
          url: "<?php echo base_url(); ?>user/registration/makeQR",
          type: "POST",
          data: {unique_code:code,file:img},
          cache: false,
          success: function (html) {
            var response=JSON.parse(html);
             //console.log(html);return false;
            $('#qr_img').html(response.ticket);
            domtoimage.toBlob(document.getElementById('qr_img'))
               .then(function(blob) {
                window.saveAs(blob,response.name+'.png' );
              });
           //  html2canvas([document.getElementById('qr_img')], {
           //    onrendered: function(canvas) {
           //     document.body.appendChild(canvas);
           //     // ctx.fillStyle = "#92B901";
           //     var data = canvas.toDataURL('image/png');
           //     domtoimage.toBlob(canvas)
           //     .then(function(blob) {
           //      window.saveAs(blob,response.name+'.png' );
           //    });
           //   }
           // });
          }
        });
      }

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
              $('.downloadLink').addClass('w3-xlarge');

              setTimeout(function(){
                $('.downloadLink').removeClass('w3-xlarge');
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
