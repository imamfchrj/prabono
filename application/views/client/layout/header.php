<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<?php 
        $notif_limit=get_notif(get_from_sess("user_id"),0);
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
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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
                        <h6>Pengguna</h6>
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
                        <p><?=get_from_sess('username')?></p>
                        <hr>
                        <a class="blue" href="<?=base_url()?>laporkan-masalah-hukum     ">Ubah Profile</a>
                    </div>
                </div>

                <hr>
                <div id="nav_menu-2" class="">
                    <nav id="mainnav2" class="mainnav2">
                        <ul class="menu"> 
                            <a href="<?=base_url()?>laporkan-masalah-hukum"><li>Ajukan Kasus</li></a>
                            <a href="<?=base_url()?>client/kasus_aktif"><li>Kasus</li></a>
<!--                            <a href="--><?//=base_url()?><!--client/faq"><li>FAQ</li></a>-->
                            <a href="<?=base_url()?>client/logout"><li>Logout</li></a>
                        </ul><!-- /.menu -->
                    </nav><!-- /.mainnav --> 
                </div>
                <div class="divider wrapp">
                </div>
                <div class="wrap-header-bottom">
                    <ul class="social-links style4">
                        <li><a href ="#"><i class=""></i></a></li>
                        <li><a href ="#"><i class=""></i></a></li>
                        <li><a href="#"><i class=""></i></a></li>
                        <li><a href="#"><i class=""></i></a></li>
                    </ul>
                    <div class="copy-right">
                        <p>Copyright © 2019 <a href="#">IFFS Project</a>.<br>All Rights Reserved.</p>
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
                                    <li class="footer"><a href="<?=base_url()?>clients/notification">Tandai baca</a></li>
                                    <li class="footer"><a href="<?=base_url()?>clients/notification">Lihat semua</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>        
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div>

            <script>
            $(document).ready(function() {

                $(".file-upload-profile").on('change', function(){
                    var myFormData = new FormData();
                        myFormData.append('userfile',$(".file-upload-profile").prop('files')[0]);

                        $.ajax({
                            url: "<?=base_url()?>clients_ajax/do_upload_profile",
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