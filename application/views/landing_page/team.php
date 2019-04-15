<?php $this->load->view('landing_page/layout/header')?>

    <main class="main-content" id="main-content">

        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script type="text/javascript" src="//gitcdn.link/repo/Lwangaman/jQuery-Clock-Plugin/master/jqClock.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                customtimestamp = parseInt($("#jqclock").data("time"));
                $("#jqclock").clock({"langSet":"en","timestamp":customtimestamp});
                $("#jqclock-local").clock({"langSet":"en"});
            });
        </script>
        
        <!-- Services -->
        <section class="flat-row section-services pd-bottom6">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="wrap-teammember">
                            <div class="flat-team team-list style2 clearfix">
                                <div class="avatar"> 
                                    <a href="#" class="opacity" >
                                        <img src="<?=base_url()?>probono_asset/images/Mappi.png" alt="image">
                                    </a>  
                                </div>                        
                                <div class="content">
                                    <!--<span class="position">Founder & CEO</span>-->
                                    <h5 class="name">MAPPI UI</h5>
                                    <p>Kami adalah Masyarakat Pemantau Peradilan Indonesia (MaPPI) Fakultas Hukum Universitas Indonesia. Kami merupakan lembaga kajian dan penelitian di bawah Fakultas Hukum Universitas Indonesia yang bergerak dalam bidang Penelitian dan Advokasi Peradilan. Kami merupakan lembaga yang bersifat independen dan profesional.</p>
                                    <h6 class="name">VISI</h6>
                                    <p>Visi kami adalah mewujudkan peradilan dan kebijakan hukum yang adil serta rasional untuk setiap umat manusia.</p>
                                    <h6 class="name">MISI</h6>
                                    <p>Untuk mewujudkan visi itu, kami berupaya untuk:<br>
                                        1.	Menyediakan penelitian berbasis bukti yang dapat dipercaya dan bermutu;<br>
                                        2.	Mendukung pemangku kepentingan terkait isu-isu strategis; dan<br>
                                        3.	Melakukan otoritas pemberdayaan masyarakat demi kepentingan masyarakat dan ilmu pengetahuan.
                                    </p>
                                    <h6 class="name">Kontak</h6>

                                    <div class="textwidget"><iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15861.008770581555!2d106.82925419049077!3d-6.361397169498871!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1462122921734" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                                    <ul class="info-team">
                                        <li><span>Alamat:</span>Fakultas Hukum Universitas Indonesia, Gedung D, Lantai 4
                                        </li>
                                        <li><span></span>Ruang 404 Kampus UI Depok 16424</li>
                                        <li><span>Email:</span>office@mappifhui.org</li>
                                        <li class="team-social"><span>Social:</span>
                                            <a href="http://www.facebook.com/mappifhui" class="facebook"><i class="fa fa-facebook"></i></a>
                                            <a href="http://twitter.com/mappifhui" class="twitter"><i class="fa fa-twitter"></i></a>
                                            <a href="http://instagram.com/mappifhui" class="instagram"><i class="fa fa-instagram"></i></a>
                                        </li>
                                    </ul>
<!--                                        <div id="jqclock" class="jqclock" data-time="--><?php //echo time(); ?><!--"></div>-->
                                        <!--//local time
                                        <div id="jqclock-local" class="jqclock"></div>-->
                                </div>
                            </div>
                        </div>  
                    </div>
                    <?php $this->load->view('landing_page/widget/widget-3')?>
                </div>
            </div>
        </section>  
    </main>

<?php $this->load->view('landing_page/layout/footer')?>