<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->

<?php
    $notif_limit=get_notif(get_from_sess("advokat_user_id"),4,1);
?>
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>@user - Probono</title>


    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>probono_asset/stylesheets/bootstrap.css" >

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>probono_asset/stylesheets/style.css">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>probono_asset/stylesheets/responsive.css">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>probono_asset/stylesheets/colors/color1.css" id="colors">

    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>probono_asset/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>probono_asset/revolution/css/settings.css">
    
    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>probono_asset/stylesheets/animate.css">

    <!-- Favicon and touch icons  -->
    <link href="<?=base_url()?>probono_asset/icon/apple-touch-icon-48-precomposed.png" rel="icon" sizes="48x48">
    <link href="<?=base_url()?>probono_asset/icon/apple-touch-icon-32-precomposed.png" rel="icon">
    <link href="<?=base_url()?>probono_asset/icon/favicon.png" rel="shortcut icon">
</head>                                 
<body class="header_sticky page-loading style-body onepage"> 


    <!-- Javascript -->
    <script src="<?=base_url()?>probono_asset/javascript/jquery.min.js"></script>
    <script src="<?=base_url()?>probono_asset/javascript/bootstrap.min.js"></script> 
    <script src="<?=base_url()?>probono_asset/javascript/jquery.easing.js"></script>   

    <script src="<?=base_url()?>probono_asset/javascript/jquery-waypoints.js"></script> 
    <script src="<?=base_url()?>probono_asset/javascript/jquery-countTo.js"></script>
    <script src="<?=base_url()?>probono_asset/javascript/imagesloaded.min.js"></script>

    <script src="<?=base_url()?>probono_asset/javascript/owl.carousel.js"></script>
    <script src="<?=base_url()?>probono_asset/javascript/jquery-validate.js"></script>

    <script src="<?=base_url()?>probono_asset/javascript/jquery.cookie.js"></script>
    <script src="<?=base_url()?>probono_asset/javascript/html5shiv.js"></script>
    <script src="<?=base_url()?>probono_asset/javascript/respond.min.js"></script>
     
    <script src="<?=base_url()?>probono_asset/javascript/jquery.magnific-popup.min.js"></script>   
      
    
     
    <script src="<?=base_url()?>probono_asset/javascript/jquery.fancybox.js"></script>
    
    <script src="<?=base_url()?>probono_asset/javascript/main.js"></script>

    <!-- Revolution Slider -->
    <script src="<?=base_url()?>probono_asset/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?=base_url()?>probono_asset/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="<?=base_url()?>probono_asset/revolution/js/slider.js"></script>

    <!-- time zone -->
    <script type="text/javascript" src="//gitcdn.link/repo/Lwangaman/jQuery-Clock-Plugin/master/jqClock.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            customtimestamp = parseInt($("#jqclock").data("time"));
            $("#jqclock").clock({"langSet":"en","timestamp":customtimestamp});
            $("#jqclock-local").clock({"langSet":"en"});
        });
    </script>

    <script>
        var ROOT = "<?=base_url()?>";
    </script>


    <!-- Preloader -->
    <div class="loading-overlay">
    </div>  

    <div id="site-off-canvas">
        <div class="content mCustomScrollbar ">
            <div class="wrapper">
                <!-- <div id="logo" class="logo">
                    <a href="index.html" rel="home">
                        <img src="<?=base_url()?>probono_asset/images/logo.png" alt="image">
                    </a>
                </div> -->
                <div class="row">

                    <div class="col-sm-12" style="margin-bottom:24px;">
                        <h6>Advokat</h6>
                    </div>
                    <div class="col-sm-6">
                        <nav id="mainnav2" class="row">
                            <div class="circle">
                            <?php if(!get_from_sess('foto')) {?>
                                <img src="<?=base_url()?>probono_asset/images/defaultprofile.jpg" class="profile-pic img-profile" alt="Probono"> 
                            <?php }  else{ ?>
                                <img src="<?=base_url()?>probono_asset/probono/asset/<?=get_from_sess('foto')?>" class="profile-pic img-profile" alt="Probono"> 
                            <?php }  ?>
                            </div>

                            <div class="p-image">
                            <i class="fa fa-camera upload-button"></i>
                                <input class="file-upload-profile" style="display:none;" type="file" accept="image/*"/>
                            </div>
                        </nav>
                    </div>

                    <div class="col-sm-6">
                        <p><?=get_from_sess("advokat_username")?></p>
                        <hr>
                        <a class="blue" href="<?=base_url()?>users/daftar">Ubah Profile</a>
                    </div>
                </div>

                <hr>
                <div id="nav_menu-2" class="">
                    <nav id="mainnav2" class="mainnav2">
                        <ul class="menu"> 
<!--                        <a href="--><?//=base_url()?><!--users/daftar_kasus"><li>Home</li>-->
                            <a href="<?=base_url()?>users/caradaftar"><li>Cara mendaftar</li></a>
                            <a href="<?=base_url()?>users/daftar_kasus"><li>Daftar Kasus</li></a>
                            <a href="<?=base_url()?>users/selesai"><li>Kasus Saya</li></a>
<!--                            <a href="--><?//=base_url()?><!--users/faq"><li>FAQ</li></a>-->
                            <a href="<?=base_url()?>users/logout"><li>Logout</li></a>
                        </ul><!-- /.menu -->
                    </nav><!-- /.mainnav --> 
                </div>
                <div class="divider wrapp">
                </div>
                <div class="wrap-header-bottom">
<!--                    <ul class="social-links style4">-->
<!--                        <li><a href ="#"><i class="fa fa-facebook"></i></a></li>-->
<!--                        <li><a href ="#"><i class="fa fa-twitter"></i></a></li>-->
<!--                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>-->
<!--                        <li><a href="#"><i class="fa fa-rss"></i></a></li>-->
<!--                    </ul>-->
                    <div class="copy-right">
                        <p>Copyright © 2018 <a href="#">IFFS Project</a>.<br>All Rights Reserved.</p>
                        <div id="jqclock" class="jqclock" data-time="<?php echo time(); ?>"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap-boxed" id="maincontent">
        <!-- Boxed -->
        <div class="boxed">
            
            <header id="header" class="nav header-style1 nav2" >
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="flat-wrap-header" >
                                <div class="nav-wrap">   
                                    <ul class="menu menu-extra" style="float:left">
                                        <li class="off-canvas-toggle">
                                            <a href="#"><span></span></a>
                                        </li>
                                    </ul>   
                                </div><!-- /.nav-wrap -->
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        
            
            <div class="flat-top">
                <div class="container">
                    <div class="row navbar navbar-static-top" style="margin-bottom:0px;">    
                        <div class="col-md-12 navbar-custom-menu">
                            <ul class="float-right nav navbar-nav">
                            <!-- <p class="info-link"><a href="#">Kamu memiliki <span>5</span> Notifikasi</a><i class="fa fa-bell aria-hidden notif"  ></i></p> -->
                                <li class="info-link dropdown notifications-menu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="label label-info"><?=$notif_limit["count"]?></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                    <li class="header">You have <?=$notif_limit["count"]?> notifications</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                        <?=$notif_limit["html"]?>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="<?=base_url()?>users/notification">Tandai baca</a></li>
                                    <li class="footer"><a href="<?=base_url()?>users/notification">Baca semua</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>        
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div>



            <script>
            $(document).ready(function() {


    
                // var readURL = function(input) {
                //     if (input.files && input.files[0]) {
                //         var reader = new FileReader();

                //         reader.onload = function (e) {
                //             $('.profile-pic').attr('src', e.target.result);
                //         }

                //         reader.readAsDataURL(input.files[0]);
                //     }
                // }


                $(".file-upload-profile").on('change', function(){
                    var myFormData = new FormData();
                        myFormData.append('userfile',$(".file-upload-profile").prop('files')[0]);

                        $.ajax({
                            url: "<?=base_url()?>users_ajax/do_upload_profile",
                            type: 'POST',
                            processData: false, // important
                            contentType: false, // important
                            dataType : 'json',
                            data: myFormData
                        }).done(function(data) {

                        if(data.is_error==1){ 
                            alert_error(data.error);
                            console.log(data);
                            return; 
                        }
                        // $($nameput).val(data.filename);

                        $(".profile-pic").attr("src","<?=base_url()?>probono_asset/probono/asset/"+data.image_url);

                        })
                        .fail(function() {
                            if(tmp){
                                alert_error( "Server tidak merespon. Mohon cek koneksi internet anda.\nServer not responding. Please check your internet connection." );
                                tmp = false;
                            }
                        })
                        .always(function() {
                            
                        }) ;
                });

                    $(".upload-button").on('click', function() {
                        $(".file-upload-profile").click();
                    });
                });
            </script>
