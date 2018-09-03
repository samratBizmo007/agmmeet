
//  ------------------------ADMIN LOGIN FORM -------------------------//
$(function () {
    $("#Adminlogin_form").submit(function () {
        dataString = $("#Adminlogin_form").serialize();
        $.LoadingOverlay("show");

        $.ajax({
            type: "POST",
            url: BASE_URL + "admin/mea_admin/adminLogin",
            data: dataString,
            return: false, //stop the actual form post !important!
            success: function (data)
            {
                $.LoadingOverlay("hide");
                if(navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {           
                    $("html,body").animate({scrollTop:0},"slow");
                    document.scrollingElement.scrollTop;
                } else {
                   $("html,body").animate({scrollTop:0},"slow");
               }
               
               $("#spinnerDiv").html('');
               $("#login_err").html(data);
            }
        });
        return false;  //stop the actual form post !important!
    });
});
//  -------------------------END -------------------------------//


