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

<body>

<div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

    <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal"></span> E-PROBONO <span class="tx-normal"></span></div>
        <div class="tx-center mg-b-60">Administrator</div>

        <div class="form-group">
            <input type="text" id="username" class="form-control" placeholder="Enter your email">
        </div><!-- form-group -->
        <div class="form-group">
            <input type="password" id="password" class="form-control" placeholder="Enter your password">
<!--            <a href="" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>-->
        </div><!-- form-group -->
        <button type="submit" class="btn btn-info btn-block" onclick="login()">Sign In</button>

    </div><!-- login-wrapper -->
</div><!-- d-flex -->

<script src="<?=base_url()?>assets_123/lib/jquery/jquery.js"></script>
<script src="<?=base_url()?>assets_123/lib/popper.js/popper.js"></script>
<script src="<?=base_url()?>assets_123/lib/bootstrap/bootstrap.js"></script>

<script>
    function login(){
        console.log("halo");
        if($("#username").val()=="admin" && $("#password").val()=="admin"){
            window.location = "<?=base_url()?>admin/dashboard";
            return;
        }
        alert_error("Username atau Password salah");
        return;
    }

</script>
<script src="<?=base_url()?>probono_asset/javascript/alert.js"></script>

</body>
</html>
