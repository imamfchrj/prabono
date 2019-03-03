<?php $this->load->view('client/layout/header')?>


            <main class="main-content" id="main-content">

                <section id="services" class="flat-row vc wrap-iconbox">
                    <div class="container">
                        <div class="row">
                            
                            <div class="col-md-12 header-daftar">
                                <div class=" style3">
                                <div class="widget widget_search widget_search_left" >
<!--                                    <form role="search" method="get" class="search-form" action="#">-->
<!--                                        <input type="search" class="search-field" placeholder="Search…" value="" name="s" > -->
<!--                                        <input type="submit" class="search-submit" id="searchwidget" value="">-->
<!--                                    </form>                            -->
                                </div>
                                <h5 class="">Kasus yang dapat dipilih</h5>
                                </div>
                            </div>

                        <?php if(count($kasus) < 1){?>
                        <div class="col-md-12 text-center">
                                <div class="field clearfix " style="margin-top:24px;"> 
                                    <div class="form-group row form-biodata" style="background:black;">
                                        <div href="#" class="blue_deep form-control col-md-12">Kasus Belum Tersedia</div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <?php foreach($kasus as $list){ ?>
                            <div class="col-md-12 box-kasus">
                                <div class="flat-team team-list style2 clearfix">                  
                                    <div class="content">
                                        <!-- <span class="position">Firda Safridi</span> -->
                                        <?php if($list->status==1){?>
                                         <span class="badge badge-success float-right">Open</span>
                                        <?php }else if($list->status==2){?>
                                         <span class="badge badge-primary float-right">Aktif</span>
                                        <?php }else{?>
                                         <span class="badge badge-dark float-right">Closed</span>
                                        <?php }?>
                                        <h5 class="blue_deep name"><?=$list->judul?></h5>
                                        <!-- <p><a href="#">#PerdaganganInternationsal</a> <a href="#">#PencucisanUang</a></p> -->
                                        <p>
                                            
                                        <?php if(strlen(strip_tags($list->kronologi_masalah))>509){?>
                                        <?=strip_tags(substr($list->kronologi_masalah,0,509))?>
                                        <?php }else{?>
                                        <?=strip_tags($list->kronologi_masalah)?>
                                        <?php }?>
                                        </p>
                                        <?php if($list->firstname){ ?>
                                        <ul class="info-team">
                                            <li><span>Nama Advokat:</span><?=$list->firstname?> <?=$list->lastname?></li>
                                            <li><span>Telpon:</span><?=$list->hp?></li>
                                            <li><span>Email:</span><?=$list->email?></li>
                                            <!-- <li><span>Tanggal Sidang:</span>22 January 2019</li> -->
                                            <!-- <li><span>Lokasi:</span>DKI Jakarta</li> -->
                                        </ul>
                                        <?php }?>
                                        <div class="flat-view">
                                                
                                                <button type="button" class="btn-link float-right" onclick="location.href='<?=base_url()?>client/kasus_aktif/<?=$list->id?>'">Lihat detail kasus</button>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <?php if(count($kasus) > 0){?>
                            <div class="col-md-12 text-center">
                                <div class="field clearfix " style="margin-top:24px;"> 
                                    <div class="form-group row form-biodata" style="background:black;">
                                        <a href="#" class="blue_deep form-control col-md-12">Lihat lebih banyak</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div> 
                    
                    <div class="row">
                            <div class="divider h70">
                            </div>
                    </div>  
                </section> 
            </main>
<?php $this->load->view('landing_page/layout/footer')?>