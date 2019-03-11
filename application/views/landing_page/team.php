<?php $this->load->view('landing_page/layout/header')?>

    <main class="main-content" id="main-content">
        
        <!-- Services -->
        <section class="flat-row section-services pd-bottom6">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="wrap-teammember">
                            <div class="flat-team team-list style2 clearfix">
                                <div class="avatar"> 
                                    <a href="#" class="opacity">
                                        <img src="<?=base_url()?>probono_asset/images/clients/2.jpg" alt="image">
                                    </a>  
                                </div>                        
                                <div class="content">
                                    <span class="position">Founder & CEO</span>
                                    <h6 class="name">MAPPI UI</h6>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem santium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>
                                    <ul class="info-team">
                                        <li><span>Telpon:</span>001-1234-88888</li>
                                        <li><span>Email:</span>mappiui@gmail.com</li>
                                        <li><span>Pengalaman:</span>5 years</li>
                                        <li class="team-social"><span>Social:</span>
                                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="printer"><i class="fa fa-pinterest-p"></i></a>
                                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                        </li>
                                    </ul>
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