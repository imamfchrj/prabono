                          

        <!-- Footer -->
        <!-- Footer -->
        <footer id="footer" class="footer main-footer" data-fixed="true" itemscope="itemscope">
        <div class="footer-widgets">
            <div class="container">
                <div class="row"> 
                    <div class="col-md-12"> 
                        <div class="wrap-widget-footer">
                            <div class="widget widget-footer widget_menu">
                                <h5 class="widget-title">Menu</h5>
                                <ul>
                                    <li><a href="<?=base_url()?>">Home</a></li>
                                    <li><a href="<?=base_url()?>jasa">Jasa</a></li>
                                    <li><a href="<?=base_url()?>publikasi">Publikasi</a></li>
                                    <li><a href="<?=base_url()?>berita">Berita</a></li>   
                                    <li><a href="<?=base_url()?>tentangkami">Tentang Kami</a></li>
                                    <li><a href="<?=base_url()?>bergabung">Bergabung</a></li>
                                </ul>
                            </div><!-- /.widget-menu -->
                            <div class="widget widget-footer widget_why_us">
                                <h5 class="widget-title">Why US</h5>
                                <ul>
                                    <li><a href="#">Special Offers</a></li>
                                    <li><a href="#">Career</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Clients Programs</a></li>   
                                </ul>
                            </div><!-- /.widget-menu -->
                            <div class="widget widget-footer widget_about">
                                <h5 class="widget-title">About</h5>
                                <ul>
                                    <li><a href="#">Our Story</a></li>
                                    <li><a href="#">Team</a></li>
                                    <li><a href="#">Main Principles</a></li>
                                    <li><a href="#">Vision</a></li>   
                                    <li><a href="#">Miussion</a></li>
                                    <li><a href="#">Strategies</a></li>  
                                </ul>
                            </div><!-- /.widget-menu -->
                            <div class="widget widget-footer widget_more_info">
                                <h5 class="widget-title">More Info</h5>
                                <ul>
                                    <li><a href="#">Support</a></li>
                                    <li><a href="#">Video tutorials</a></li>
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Privacy Policy</a></li>   
                                </ul>
                            </div><!-- /.widget-menu -->
                           
                            <div class="widget widget-footer widget_contact">
                                <h5 class="widget-title">Contacts</h5>
                                <ul class="flat-information">
                                    <li class="address"><a href="#">Jalan Salemba Universitas Indonesia</a></li>
                                    <li class="email"><a href="mailto:Themesflat@gmail.com">info@probono.com</a></li>
                                    <li class="phone"><a href="+84905010025">123-456-7890</a></li>
                                </ul>
                            </div><!-- /.widget-menu -->
                        </div>       
                    </div><!-- /.col-md-3 --> 
                </div><!-- /.row -->    
            </div><!-- /.container -->
        </div><!-- /.footer-widgets -->
        <div class=" divider h75">
        </div>
        <div class="footer-contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="logo-footer">
                            <div id="logo-footer" class="logo">
                                <a href="<?=base_url()?>" rel="home">
                                    <img src="<?=base_url()?>probono_asset/images/logo2.png" alt="image">
                                </a>
                            </div><!-- /.logo -->
                        </div>
                        <div class="copy-right">
                            <p>© 2018 Redcloud Project. All Rights Reserved. <a href="">Terms of Use</a> and <a href="#">Privacy Policy</a></p>
                        </div>
                    </div>
                    <div class="col-md-8 col-md-offset-2">
                        <ul class="social-links style2">
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>
                        </ul> 
                    </div>
                </div>
            </div>
        </div>
    </footer>

        <!-- Go Top -->
        <a class="go-top">
            <i class="fa fa-angle-up"></i>
        </a>       
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                </div>
                <div class="modal-body">

                    <div id="login_form" class="" method="post">
                        <div class="field clearfix ">
                            <div class="form-group row form-biodata">
                                <div class="col-md-4 col-md-offset-4">
                                    <input class="user_set" type="checkbox" checked data-width="100%" data-height="40" data-on="User" data-off="Advokat" data-toggle="toggle" data-onstyle="info" data-offstyle="danger">
                                </div>
                                <label class="col-md-8 col-md-offset-2" for="exampleInputEmail1">Username <span class="text-danger email-error"></span></label>

                                <div class="col-md-8 col-md-offset-2">
                                    <input type="text" class="form-control">
                                </div>
                                <label class="col-md-8 col-md-offset-2" for="exampleInputEmail1">Password <span class="text-danger email-error"></span></label>

                                <div class="col-md-8 col-md-offset-2">
                                    <input type="password" class="form-control">
                                </div>

                                <div class="col-md-8 col-md-offset-2">
                                    <!-- <label  for="setuju_syarat"><input id="setuju_syarat" type="checkbox" name="aggree" value="1" class="aggree"> &nbsp;&nbsp;<a href="#" class="blue">Syarat dan ketentuan berlaku!</a>
                                    </label> -->
                                    <a href="#" class="blue float-right">Lupa Password!</a>
                                </div>

                                <div class="col-md-8 col-md-offset-2">
                                    <hr>
                                </div>

                                <div class="col-md-8 col-md-offset-2">
                                    <button type="button" class="btn btn-secondary btn-block login-btn" >Masuk</button>
                                </div>
                                <div class="col-md-8 col-md-offset-2">
                                    <hr>
                                </div>
                                <div class="col-md-8 col-md-offset-2">
                                    <button type="button" class="btn btn-secondary btn-block login-btn" >Daftar</button>
                                </div>
                                <div class="col-md-8 col-md-offset-2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="modal-footer">
                <button type="button" class="btn btn-default"  data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-secondary" onclick="location.href='<?=base_url()?>users/caradaftar'">Masuk</button>
                </div> -->
            </div>
        </div>
    </div>

    <!-- Modal Term & Condition-->
        <div class="modal fade" id="modal-term-condition" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h5 class="modal-title" id="exampleModalLabel">Term & Condition</h5>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to submit the following details?<br>

                        a.<br>
                        b.<br>
                        c.<br>

                        <input type="checkbox" value="">    <br>I accept the Term & Condition<br>

                    </div>

                    <div class="modal-footer">
                        <a href="#" id="submitend" class="btn btn-success success">Confirm</a>
                    </div>
                </div>
            </div>
        </div>

<script>
    $(document).ready(function() {
        
        $('.toggle-on').removeAttr("style");
        $('.toggle-off').removeAttr("style");
    });
</script>

<script>

    $(".login-btn").click(function(){
        if($(".user_set").prop("checked") == true){
            window.location = "<?php echo base_url('laporkan-masalah-hukum'); ?>";
            return true;
        }
        window.location = "<?php echo base_url('users/caradaftar'); ?>";
    });
</script>
    
</body>
</html>