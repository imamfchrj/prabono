<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Bracket Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="<?=base_url()?>assets_123/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?=base_url()?>assets_123/lib/Ionicons/css/ionicons.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets_123/css/bracket.css">
</head>
<script>
    var ROOT="<?=base_url()?>";
</script>

<body>

<div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

    <div id="login_form" class="" method="post">
        <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
            <div class="signin-logo tx-center tx-28 tx-bold tx-inverse">
                <span class="tx-normal"></span> E-PROBONO <span class="tx-normal"></span>
            </div>
            <div class="tx-center mg-b-60">Administrator
            </div>

            <div class="form-group">
                <input type="text" id="username" class="form-control" placeholder="Enter your username">
            </div><!-- form-group -->
            <div class="form-group">
                <input type="password" id="password" class="form-control" placeholder="Enter your password">
    <!--            <a href="" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>-->
            </div><!-- form-group -->

            <div class="form-group g-cap">
                                    <div id="html_element"></div>
                                </div>

            <button class="btn btn-info btn-block login-btn">Sign In</button>

        </div><!-- login-wrapper -->
    </div>
</div><!-- d-flex -->

<script src="<?=base_url()?>assets_123/lib/jquery/jquery.js"></script>
<script src="<?=base_url()?>assets_123/lib/popper.js/popper.js"></script>
<script src="<?=base_url()?>assets_123/lib/bootstrap/bootstrap.js"></script>


<script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('html_element', {
          'sitekey' : '<?=config_item('recatpcha_site_key');?>'
        });
      };
    </script>

<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit&hl=id"
        async defer></script>



<script>
    //function login(){
    //    console.log("halo");
    //    if($("#username").val()=="admin" && $("#password").val()=="admin"){
    //        window.location = "<?//=base_url()?>//admin/dashboard";
    //        return;
    //    }
    //    alert_error("Username atau Password salah");
    //    return;
    //}

</script>
<script type="text/javascript">

</script>
<script>
$(".login-btn").click(function() {
    $.ajax({
        url: ROOT + 'admin_nl/ajax_login',
        type: 'post',
        dataType: 'json',
        data: {
            "username": $("#username").val(),
            "password": $("#password").val(),
            "g-recaptcha-response":grecaptcha.getResponse()
        }
    })
    .done(function (data) {
        if (data.is_error == true) {
            grecaptcha.reset();
            alert(data.error_message);
            return;
        }
        window.location = ROOT+'admin/dashboard';
    })
    .fail(function (data){
        grecaptcha.reset();
    })
    .always(function () {

    });
});
</script>

</body>
</html>
