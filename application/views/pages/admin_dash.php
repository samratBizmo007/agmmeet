<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEA Admin Dash</title>
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/alert/jquery-confirm.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/alert/jquery-confirm.js"></script>

</head>
<body>

    <div class="w3-container w3-margin-top w3-margin-bottom">
        <div class="w3-col l12 w3-padding">
            <a href="<?php echo base_url(); ?>admin/mea_admin/logout" class="btn w3-small w3-right w3-black w3-round-xlarge w3-text-white" style="margin-left: 30px;padding:0 5px 0 5px">Logout <i class="fa fa-sign-out" ></i></a>          
        </div>

        <br>
        <div class="w3-col l4 w3-text-white">test</div>
        <div class="w3-col l4 w3-padding w3-card w3-round-large">
            <div class="w3-col l12 w3-small w3-margin-bottom">
                <h4>Get AGM-2018 Member Details</h4>
                <span>Click the given button to get details of all members.</span>
            </div>
            <div class="w3-col l12">
                <a class="btn btn-block btn-warning" target="_blank" href="<?php echo base_url(); ?>admin/mea_dashboard/downloadPdf">View/ Download PDF</a>
                <a class="btn w3-right w3-text-blue" target="_blank" href="<?php echo base_url(); ?>admin/mea_dashboard/downloadCsv"><i class="fa fa-download"></i> Download Excel/csv File</a>
            </div>
        </div>
        <div class="col-lg-4"></div>
    </div>
    <br><br>
    <div class="w3-center w3-margin-bottom w3-small ">          
        <span class="w3-margin-top"><span class="fa fa-copyright w3-large"></span> Powered by 
        <a class="btn" href="http://bizmo-tech.com" target="_blank" style="padding: 0 0 5px 0"><img src="<?php echo base_url(); ?>assets/images/bizmo_logo.png" class="img" style="width:130px;height: auto;"></a>
    </span><br>
    <span class=" w3-margin-top">Sponsored by <b class="w3-text-red">Ar.Dakshata Ranjeet Wagh</b></span><br>
</div>
</body>
</html>





