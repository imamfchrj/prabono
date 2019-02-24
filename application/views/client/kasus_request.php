<?php $this->load->view('client/layout/header')?>


            <main class="main-content" id="main-content">

                <section id="services" class="flat-row vc wrap-iconbox">
                    <div class="container">
                        <div class="row">
                            
                            <div class="col-md-12 header-daftar">
                                <div class=" style3">
                                <div class="widget widget_search widget_search_left" >
                                    <form role="search" method="get" class="search-form" action="#">
                                        <input type="search" class="search-field" placeholder="Search…" value="" name="s" > 
                                        <input type="submit" class="search-submit" id="searchwidget" value="">
                                    </form>                            
                                </div>
                                </div>
                            </div>
                            <div class="col-md-12 box-kasus">
                                <div class="flat-team team-list style2 clearfix"> 
                                
                           
                                    <div class="content">
                                        <!-- <span class="position">Firda Safridi</span> -->
                                        <?php if($kasus->status==1){?>
                                         <span class="badge badge-success float-right">Open</span>


                                        <?php }else if($kasus->status==2){?>
                                         <span class="badge badge-primary float-right">Aktif</span>
                                        <?php }else{?>
                                         <span class="badge badge-dark float-right">Closed</span>
                                        <?php }?>
                                        <?php if($kasus->status>1){?>


                                        <ul class="nav nav-tabs nav-single">
                                            <li <?php if($menu!="agenda") {?>class="active"<?php } ?>><a href="<?=base_url()?>client/kasus_aktif/<?=$kasus->id?>">Kasus</a></li>
                                        <li <?php if($menu=="agenda") {?>class="active"<?php } ?>><a href="<?=base_url()?>clients/agenda/<?=$kasus->id?>">Agenda</a></li>
                                        <li <?php if($menu=="point") {?>class="active"<?php } ?>><a href="<?=base_url()?>clients/request/<?=$kasus->id?>">Request Time Sheet</a></li>
                                        </ul>
                                        <?php } ?>
                                        <div class="row-striped">
                                            <div class="pad15">
                                            <h5 class="blue_deep name"><?=$kasus->judul?></h5>
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> 2019-02-16 21:28:32</li>
                                                    <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> 12:30 PM - 2:00 PM</li>
                                                    <li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i> Pengadilan Negeri Surakarta</li>
                                                </ul>
                                                <p>Lorem ipsum dolsit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            </div>
                                        </div>
                                        <div class="row-striped">
                                            <div class="pad15">
                                            <h5 class="blue_deep name"><?=$kasus->judul?></h5>
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> 2019-02-16 21:28:32</li>
                                                    <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> 12:30 PM - 2:00 PM</li>
                                                    <li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i> Pengadilan Negeri Surakarta</li>
                                                </ul>
                                                <p>Lorem ipsum dolsit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            </div>
                                        </div>
                                        <div class="row-striped">
                                            <div class="pad15">
                                            <h5 class="blue_deep name"><?=$kasus->judul?></h5>
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> 2019-02-16 21:28:32</li>
                                                    <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> 12:30 PM - 2:00 PM</li>
                                                    <li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i> Pengadilan Negeri Surakarta</li>
                                                </ul>
                                                <p>Lorem ipsum dolsit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            </div>
                                        </div>
                                        <div class="row-striped">
                                            <div class="pad15">
                                            <h5 class="blue_deep name"><?=$kasus->judul?></h5>
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> 2019-02-16 21:28:32</li>
                                                    <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> 12:30 PM - 2:00 PM</li>
                                                    <li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i> Pengadilan Negeri Surakarta</li>
                                                </ul>
                                                <p>Lorem ipsum dolsit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            </div>
                                        </div>
                                        
                                        <div class="flat-view">
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div> 
                    
                    <div class="row">
                            <div class="divider h70">
                            </div>
                    </div>  
                </section> 
            </main>
<?php $this->load->view('landing_page/layout/footer')?>